<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
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
echo " connecting";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trashcycle</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles */
        .body {
            background-color: #f8fafc; /* Light background color */
        }

        .text-black {
            color: #1a202c; /* Dark text color */
        }

        /* Adjust brightness of the background image */
        .bg-bright {
            background-image: url('assets/images/donate.jpg');
            filter: brightness(70%); /* Adjust brightness here */
        }

        /* Custom styles for donation form */
        .form-input {
            margin-bottom: 1rem;
        }

        .form-submit {
            background-color: #667eea;
            color: #fff;
        }

        /* Adjust header styles for desktop */
        @media (min-width: 1024px) {
            .header {
                background-color: #fff; /* White background color */
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
                z-index: 1000; /* Ensure header is above other content */
            }

            .logo {
                font-size: 2rem; /* Larger font size for logo */
            }

            .nav-links {
                display: flex;
                justify-content: flex-end;
                align-items: center;
            }

            .nav-link {
                margin-left: 2rem; /* Add space between links */
            }
        }
    </style>
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
        <div id="navLinks" class="hidden lg:flex space-x-4 nav-links">
            <a href="recycle.php" class="nav-link">Recycle</a>
            <a href="donate.php" class="nav-link">Donate</a>
            <a href="about.php" class="nav-link">About Us</a>
            <a href="contact.php" class="nav-link">Contact Us</a>
        </div>
    </div>

    <div class="body bg-cover bg-center bg-no-repeat min-h-screen flex flex-col items-center justify-center px-6 bg-bright">
        <br>
        <br>
        <br>
        <h1 class="text-5xl text-black">DONATE HERE</h1>
        <p class="text-black max-w-lg text-center">Help us promote environmental sustainability by donating via GCash. Your
            support funds educational campaigns, community clean-ups, and eco-friendly initiatives.</p>

        <div class="max-w-lg w-full mt-15 flex items-center">
            <div>
                <img src="./assets/images/gcash.jpg" alt="Image" class="w-60 h-50 p-4">
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data"
                class="w-full">
       <div class="form-input w-60">
    <input type="text" id="account_name" name="account_name" placeholder="Account Name" required
        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full py-2 px-3 border border-gray-300 rounded-md bg-white text-gray-700 shadow-sm sm:text-sm">
</div>

<div class="form-input w-60">
    <input type="text" id="gcash_number" name="gcash_number" placeholder="Gcash mobile number" required
        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full py-2 px-3 border border-gray-300 rounded-md bg-white text-gray-700 shadow-sm sm:text-sm">
</div>

<div class="form-input w-60">
    <input type="text" id="receipt_mobile_number" name="receipt_mobile_number" placeholder="Receipt Mobile number" required
        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full py-2 px-3 border border-gray-300 rounded-md bg-white text-gray-700 shadow-sm sm:text-sm">
</div>

<div class="form-input w-60">
    <input type="text" id="amount" name="amount" placeholder="Amount" required
        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full py-2 px-3 border border-gray-300 rounded-md bg-white text-gray-700 shadow-sm sm:text-sm">
</div>

                <div class="form-input">
    <label for="attachment" class="block text-sm font-medium text-gray-700">Attachment Screen of Receipt</label>
    <input type="file" id="receipt_attachment" name="receipt_attachment" required
        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full py-2 px-3 border border-gray-300 rounded-md bg-white text-gray-700 shadow-sm sm:text-sm">
</div>

                <button type="submit" value="Submit" class="form-submit  flex justify-center items-center py-2 px-4 rounded-md">Submit</button>
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

</body>

</html>
