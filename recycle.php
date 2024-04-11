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
            <a href="recycle.php" class="nav-link">Recycle</a>
            <a href="donate.php" class="nav-link">Donate</a>
            <a href="about.php" class="nav-link">About Us</a>
            <a href="contact.php" class="nav-link">Contact Us</a>
        </div>
    </div>

    <div class="container mx-auto mt-20">
        <h2 class="text-3xl font-bold mb-8">START Recycle</h2>
        <p class="text-lg mb-4">What trash do you have mate?</p>
        <div class="flex justify-between items-start mb-8">
            <div class="w-1/2 pr-2">
                <img src="assets/images/trash1.png" alt="Image 1" class="w-full h-auto max-h-64">
            </div>
            <div class="w-1/2 pl-2">
                <img src="assets/images/trash2.png" alt="Image 2" class="w-full h-auto max-h-64">
            </div>
        </div>
        <div class="flex justify-between items-start">
            <div class="w-1/2 pr-2">
                <h3 class="text-2xl font-bold mb-2">Used Paper And Newspaper</h3>
                <p class="text-lg">Instead of throwing them into the trash, why not find a way to repurpose them? If you
                    recycle It, I'll help you</p>
                <button class="mt-4 border border-gray-500 text-black px-4 py-2 rounded mx-auto block">Read
                    More</button>
            </div>
            <div class="w-1/2 pl-2">
                <h3 class="text-2xl font-bold mb-2">Use Plastic</h3>
                <p class="text-lg">Instead of throwing them into the trash, why not find a way to repurpose them? If you
                    recycle It, I'll help you</p>
                <button class="mt-4 border border-gray-500 text-black px-4 py-2 rounded mx-auto block">Read
                    More</button>
            </div>
            
        </div>
        <br>
        <br>
        <!-- Additional Section with Three Images -->
        <h2 class="text-3xl font-bold mb-8">LEARN MORE</h2>
        <p class="text-lg mb-4"> you can watch some<br>
            tips for your trash meter
        </p>
        <br>
        <div class="flex justify-between items-start mb-8">
      


            <div class="w-1/3 pr-2">
                <img src="./assets/images/trash4.jpg" alt="Image 4" class="w-full h-auto max-h-64">
                <h3 class="text-2xl font-bold mb-2">Glass Recycling</h3>
                <p class="text-lg">Recycle glass bottles and containers to reduce waste and conserve resources.</p>
                <button class="mt-4 border border-gray-500 text-black px-4 py-2 rounded mx-auto block">
                    PLAY</button>
            </div>
            <div class="w-1/3 px-2">
                <img src="./assets/images/trash3.jpg" alt="Image 5" class="w-full h-auto max-h-64">
                <h3 class="text-2xl font-bold mb-2">Metal Recycling</h3>
                <p class="text-lg">Recycling metal products helps in saving energy and preserving natural resources.</p>
                <button class="mt-4 border border-gray-500 text-black px-4 py-2 rounded mx-auto block">
                    PLAY</button>
            </div>
            <div class="w-1/3 pl-2">
                <img src="./assets/images/trash5.jpg"  alt="Image 6" class="w-full h-auto max-h-64">
                <h3 class="text-2xl font-bold mb-2">Plastic Bottles</h3>
                <p class="text-lg">Recycle plastic bottles to reduce pollution and protect marine life.</p>
                <button class="mt-4 border border-gray-500 text-black px-4 py-2 rounded mx-auto block">
                    PLAY</button>
           
            
    </div>
    </div>
    <!-- Additional Section with Three More Images -->
    <div class="flex justify-between items-start">
        <div class="w-1/3 pr-2">
            <img src="./assets/images/trash7.jpg" alt="Image 7" class="w-full h-auto max-h-64">
            <h3 class="text-2xl font-bold mb-2">Organic Waste</h3>
            <p class="text-lg">Composting organic waste helps in reducing methane emissions and enriching soil quality.</p>
            <button class="mt-4 border border-gray-500 text-black px-4 py-2 rounded mx-auto block">Read
                More</button>
        </div>
        <div class="w-1/3 px-2">
            <img src="./assets/images/trash8.jpg" alt="Image 8" class="w-full h-auto max-h-64">
            <h3 class="text-2xl font-bold mb-2">E-Waste Recycling</h3>
            <p class="text-lg">Recycle electronic waste to recover valuable materials and reduce environmental impact.</p>
            <button class="mt-4 border border-gray-500 text-black px-4 py-2 rounded mx-auto block">Read
                More</button>
        </div>
        <div class="w-1/3 pl-2">
            <img src="./assets/images/trash6.jpg" alt="Image 9" class="w-full h-auto max-h-64">
            <h3 class="text-2xl font-bold mb-2">Textile Recycling</h3>
            <p class="text-lg">Recycle textiles to conserve resources and reduce waste in landfills.</p>
            <button class="mt-4 border border-gray-500 text-black px-4 py-2 rounded mx-auto block">Read
                More</button>
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