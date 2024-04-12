<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost"; 
$username = "root"; 
$password = "@wasie"; 
$database = "receipt_info"; 

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get form data and sanitize inputs
    $accountName = mysqli_real_escape_string($conn, $_POST["account_name"]);
    $gcashNumber = mysqli_real_escape_string($conn, $_POST["gcash_number"]);
    $receiptMobileNumber = mysqli_real_escape_string($conn, $_POST["receipt_mobile_number"]);
    $amount = mysqli_real_escape_string($conn, $_POST["amount"]);

    // File upload handling
    $uploadDir = "uploads/"; // Directory where uploads will be saved
    $receiptAttachment = $uploadDir . basename($_FILES["receipt_attachment"]["name"]);
    move_uploaded_file($_FILES["receipt_attachment"]["tmp_name"], $receiptAttachment);

    // Insert data into database
    $sql = "INSERT INTO receipt_info (account_name, gcash_number, receipt_mobile_number, amount, receipt_attachment)
            VALUES ('$accountName', '$gcashNumber', '$receiptMobileNumber', '$amount', '$receiptAttachment')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Receipt information added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
} else {
    // Redirect back to the form if accessed directly
    header("Location: index.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trashcycle</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <div class="header bg-gray-100 fixed top-0 w-full px-6 py-4 flex justify-between items-center">
        <a href="index.html" class="logo flex items-center text-3xl font-bold">
            <img src="assets/images/logo.png" alt="Logo" class="mr-2 h-12">
            TRASHCYCLE
        </a>
        <button id="burgerIcon" onclick="toggleMenu()" class="block lg:hidden border border-gray-200 p-2 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    <div id="navLinks" class="hidden lg:flex space-x-4">
        <a href="recycle.html" class="nav-link">Recycle</a>
        <a href="donate.html" class="nav-link">Donate</a>
        <a href="about.html" class="nav-link">About Us</a>
        <a href="contact.html" class="nav-link">Contact Us</a>
    </div>
    </div>

<div class="body bg-cover bg-center bg-no-repeat min-h-screen flex flex-col items-center justify-center px-6"
    style="background-image: url('assets/images/donate.jpg');">
    <br>
    <br>
    <br>
    <h1 class="text-5xl text-black">DONATE HERE</h1>
    <p class="text-black max-w-lg text-center">Help us promote environmental sustainability by donating via GCash. Your
        support funds educational campaigns, community clean-ups, and eco-friendly initiatives.</p>

    <div class="max-w-lg w-full mt-8 flex items-center">
        <div>
            <img src="./assets/images/gcash.jpg" alt="Image" class="w-60 h-50 mr-4">
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="accountName" class="block text-sm font-medium text-gray-700">Account Name</label>
                <input type="text" id="accountName" name="accountName"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="gcashMobile" class="block text-sm font-medium text-gray-700">GCash Mobile Number</label>
                <input type="text" id="gcashMobile" name="gcashMobile"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="receiptMobile" class="block text-sm font-medium text-gray-700">Receipt Mobile Number</label>
                <input type="text" id="receiptMobile" name="receiptMobile"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
                <input type="text" id="amount" name="amount"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="attachment" class="block text-sm font-medium text-gray-700">Attachment Screen of
                    Receipt</label>
                <input type="file" id="attachment" name="attachment" accept="image/*"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <button type="submit" value="Submit" class="text-black border border-gray-500 py-2 px-4 rounded-md " >Submit</button>
        </form>
    </div>
</div>

    <script>
        let isMenuOpen = false;

        function toggleMenu() {
            const navLinks = document.getElementById('navLinks');
            const burgerIcon = document.getElementById('burgerIcon');

            if (!isMenuOpen) {
                navLinks.classList.remove('hidden');
                burgerIcon.classList.add('text-gray-600');
                isMenuOpen = true;
            } else {
                navLinks.classList.add('hidden');
                burgerIcon.classList.remove('text-gray-600');
                isMenuOpen = false;
            }
        }

        // Close the menu when a link is clicked (optional)
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (isMenuOpen) {
                    toggleMenu();
                }
            });
        });
    </script>

<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>