<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trashcycle</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .circle-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            justify-items: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .circle-item {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            position: relative;
        }

        .circle-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .circle-item .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .circle-item:hover .overlay {
            opacity: 1;
        }
        .fixed-header {
            position: fixed;
            z-index: 50;
            background-color: rgba(255, 255, 255, 0.9); /* Adjust the background color and opacity as needed */
        }

        .body {
            padding-top: 80px; /* Adjust this value to match your header height */
        }
    </style>
</head>

<body>
    <div class="header bg-gray-100  fixed-header top-0 w-full px-6 py-4 flex justify-between items-center">
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

    <div class="body bg-cover bg-center bg-no-repeat min-h-screen flex flex-col items-center justify-center px-6"
        style="background-image: url('assets/images/about.jpg');">
        <h1 class="text-5xl text-black">About Us</h1>
        <div class="circle-container mt-8">
            <!-- Image Set 1 -->
            <div class="circle-item absolute">
                <img src="./assets/images/about7.jpg" alt="Image 1">
                <div class="overlay">
                    <h2 class="text-lg font-semibold mb-2">What We Do</h2>
                </div>
            </div>
            <div class="circle-item relative">
                <img src="./assets/images/abou1.jpg" alt="Image 2">
                <div class="overlay">
                    <h2 class="text-lg font-semibold mb-2">Benefits of Recycling</h2>
                </div>
            </div>
            <div class="circle-item relative">
                <img src="./assets/images/about2.jpg" alt="Image 3">
                <div class="overlay">
                    <h2 class="text-lg font-semibold mb-2">How Recycling Works</h2>
                </div>
            </div>
            <!-- Image Set 2 -->
            <div class="circle-item relative">
                <img src="./assets/images/about3.jpg" alt="Image 4">
                <div class="overlay">
                    <h2 class="text-lg font-semibold mb-2">Recycling Do's and Don'ts</h2>
                </div>
            </div>
            <div class="circle-item relative">
                <img src="./assets/images/about4.jpg" alt="Image 5">
                <div class="overlay">
                    <h2 class="text-lg font-semibold mb-2">Eco-Friendly Alternatives</h2>
                </div>
            </div>
            <div class="circle-item relative">
                <img src="./assets/images/about5.jpg" alt="Image 6">
                <div class="overlay">
                    <h2 class="text-lg font-semibold mb-2">Meet the Team</h2>
                </div>
            </div>
        </div>
        <br>
     

    </div>
    <div class="body bg-cover bg-center bg-no-repeat min-h-screen flex flex-col items-center justify-center px-6"
        style="background-image: url('assets/images/about.jpg');">
        <h1 class="text-5xl text-black">What We Do</h1>
        <p class="text-xl" >At TRASHCYCLE, our mission is to empower Lagro High School students to take
        meaningful action towards environmental sustainability. We provide a platform for
        students to learn about the importance of waste reduction, recycling, and ecofriendly practices.</p>
        <br>
        <p class="text-xl">Through DIY videos that we make for you to follow, and step by step tips to recycle
        and reuse your trash, we aim to raise awareness and inspire positive change within
        our school community. From organizing recycling drives and clean-up campaigns to
        implementing sustainable practices in our daily lives, we are committed to making a
        tangible difference in preserving our planet for future generations.
</p>
<br>
<P>Join us as we strive to create a cleaner, greener, and more sustainable environment at
Lagro High School and beyond!</P>
</div>
</div>
<div class="body bg-cover bg-center bg-no-repeat min-h-screen flex flex-col items-center justify-center px-6"
    style="background-image: url('assets/images/about8.jpg');">
    <h1 class="text-5xl text-black">Benefits of Recycling</h1>
    <p class="text-xl">Additionally, recycling saves energy by requiring less energy to produce recycled
    materials compared to virgin materials, thus lowering greenhouse gas emissions
    and mitigating climate change.
</p>
    <br>
    <p class="font-bold text-xl text-center">Economic Benefits</p>
    <br>
    <p class="text-xl">Recycling creates jobs and stimulates economic growth by supporting a robust
    recycling industry that encompasses collection, sorting, processing, and
    manufacturing activities. It also saves money for businesses and municipalities
    by reducing waste disposal costs associated with landfilling and incineration.
    Moreover, recycling generates revenue from the sale of recycled materials,
    contributing to local economies and promoting sustainable business practices.
    </p>
    <br>
</div>
</div>


<div class="body bg-cover bg-center bg-no-repeat min-h-screen flex flex-col items-center justify-center px-6"
    style="background-image: url('assets/images/about8.jpg');">
    <h1 class="text-5xl text-black">Benefits of Recycling</h1>
    <p class="text-xl">Discover the numerous environmental, economic, and social advantages of
    recycling and why it's essential for building a sustainable future
    </p>
    <br>
    <p class="font-bold text-xl text-center">Environmental Benefits:</p>
    <br>
    <p class="text-xl">
        Recycling conserves natural resources by reducing the need for raw
        materials extraction, such as trees for paper and ores for metal. It also helps
        minimize pollution by decreasing the amount of waste sent to landfills and
        incinerators, which can release harmful toxins into the air, soil, and water.
    </p>
    <br>

    </div>
    </div>
    
    
    <div class="body bg-cover bg-center bg-no-repeat min-h-screen flex flex-col items-center justify-center px-6"
        style="background-image: url('assets/images/about8.jpg');">
        <h1 class="text-5xl text-black">Benefits of Recycling</h1>
        <br>
        <p class="font-bold text-xl text-center">Social Advantages</p>
        <p class="text-xl">Recycling fosters community engagement and environmental stewardship by
        empowering individuals and communities to take action in preserving natural
        resources and protecting the environment. It enhances public health and quality of
        life by reducing pollution and improving air and water quality. Recycling also instills
        values of responsibility and sustainability in future generations, educating them about
        the importance of resource conservation and waste reduction
        </p>
        <br>
       
        <p class="text-xl">
        .By recycling, we can create a cleaner, healthier, and more sustainable world for
        ourselves and future generations.
        </p>
        <br>

        </div>
        </div>
        
        
        <div class="body bg-cover bg-center bg-no-repeat min-h-screen flex flex-col items-center justify-center px-6"
            style="background-image: url('assets/images/about9.jpg');">
            <h1 class="text-5xl text-black">How Recycling Works</h1>
            <b></b>
            <p class="text-xl">We'll take you through the step-by-step process of recycling and how
            materials are transformed from waste into valuable resources
            </p>
            <br>
            <p class="font-bold text-2xl text-center">Collection</p>
        
            <p class="text-xl">
            The recycling process begins with the collection of recyclable materials
            from homes, businesses, and public spaces. Materials such as paper,
            cardboard, glass, aluminum cans, and plastic bottles are collected through
            curbside collection programs, drop-off centers, and recycling bins located
            in communities.
            </p>
            <br>


            </div>
            </div>
            
            
            <div class="body bg-cover bg-center bg-no-repeat min-h-screen flex flex-col items-center justify-center px-6"
                style="background-image: url('assets/images/about9.jpg');">
                <h1 class="text-5xl text-black">How Recycling Works</h1>
                
                <br>
                <p class="font-bold text-2xl text-center">Sorting</p>
                <p class="text-xl">
                Once collected, recyclable materials are transported to recycling facilities where they
                undergo sorting. Sorting involves separating materials by type (e.g., paper, plastic,
                glass) using manual and automated methods. Advanced technologies, such as
                conveyor belts, screens, and optical scanners, help efficiently sort materials into
                designated categories
                </p>
                <br>
                <p class="font-bold text-2xl text-center">Processing</p>
                <p class="text-xl">
                After sorting, recyclable materials are processed and prepared for manufacturing into
                new products. This may involve cleaning, shredding, and compacting materials to
                remove contaminants and prepare them for the next stage of the recycling process.
                </p>

                    <br>
                    
                    
                    </div>
                    </div>

<div class="body bg-cover bg-center bg-no-repeat min-h-screen flex flex-col items-center justify-center px-6"
    style="background-image: url('assets/images/about10.jpg');">
    <h1 class="text-5xl text-black">Recycling DOS</h1>

    <div class="flex flex-wrap text-left b p-4">
        <div class="w-full md:w-1/3">
            <p class="text-xl">
                <b>1. Rinse Containers:</b><br>
                Before recycling, rinse containers such as bottles, jars, and cans to remove any remaining food residue.
                Clean containers help prevent contamination and maintain the quality of recycled materials.
            </p>
        </div>
        <div class="w-full md:w-1/2 mt-4 md:mt-0">
            <p class="text-xl">
                <b>2. Flatten Cardboard Boxes:</b><br>
                Flatten cardboard boxes to save space and facilitate transportation during the recycling process. This
                ensures efficient sorting and processing at recycling facilities.
            </p>
        </div>
    </div>

    <div class="flex flex-wrap">
        <div class="w-full md:w-1/3">
            <p class="text-xl">
                <b>3. Follow Local Guidelines:</b><br>
                Familiarize yourself with your local
                recycling guidelines and
                regulations. Pay attention to what
                materials are accepted for
                recycling in your area and how
                they should be prepared for
            </p>
        </div>
        <div class="w-full md:w-1/2 mt-4 md:mt-0">
            <p class="text-xl">
                <b>4. Recycle Paper Products:</b><br>
                Recycle paper products such as
                newspapers, magazines, office
                paper, and cardboard packaging.
                Paper is a valuable recyclable
                material that can be turned into
                new paper products multiple times.
            </p>
        </div>
    </div>

    <div class="flex flex-wrap">
        <div class="w-full md:w-1/3">
            <p class="text-xl">
                <b>5. Reduce and Reuse:</b><br>
                Whenever possible, reduce waste
                by minimizing consumption and
                reusing items. Opt for reusable
                products and containers to reduce
                the amount of waste that needs to
                be recycled.
            </p>
        </div>
        <div class="w-full md:w-1/2 mt-4 md:mt-0">
            <p class="text-xl">
                <b>6. Donate Usable Items:</b><br>
                Donate gently used items such as
                clothing, furniture, and electronics
                to local charities or thrift stores
                instead of throwing them away.
                Donating extends the life of these
                items and reduces waste.
            </p>
        </div>
    </div>

    </div>
<br>
</div>
</div>

<div class="body bg-cover bg-center bg-no-repeat min-h-screen flex flex-col items-center justify-center px-6"
    style="background-image: url('assets/images/about10.jpg');">
    <h1 class="text-5xl text-black">Recycling DOS</h1>

    <div class="flex flex-wrap text-left b p-4">
        <div class="w-full md:w-1/3">
            <p class="text-xl">
                <b>1. No Plastic Bags:</b><br>
            Avoid putting plastic bags and film in
            recycling bins, as they can cause
            equipment malfunctions at recycling
            facilities and contaminate other
            recyclable materials. Instead, recycle
            plastic bags at designated drop-off
            locations.
            </p>
        </div>
        <div class="w-full md:w-1/2 mt-4 md:mt-0">
            <p class="text-xl">
                <b>2. No Tanglers:</b><br>
        Do not recycle tanglers such as hoses,
        wires, cords, and chains, as they can
        tangle and damage recycling
        equipment. Dispose of tanglers properly
        as trash or take them to specialized
        recycling facilities if available.

            </p>
        </div>
    </div>

    <div class="flex flex-wrap">
        <div class="w-full md:w-1/3">
            <p class="text-xl">
                <b>3. No Styrofoam:</b><br>
            Avoid recycling Styrofoam (expanded
            polystyrene foam) products, as they
            are not typically accepted in curbside
            recycling programs. Look for
            alternative disposal options or reuse
            Styrofoam packaging whenever
            possible.
            </p>
        </div>
        <div class="w-full md:w-1/2 mt-4 md:mt-0">
            <p class="text-xl">
                <b>4. No Food Contamination:</b><br>
                Do not recycle materials contaminated
                with food waste, grease, or liquids, as
                they can spoil other recyclables and
                attract pests. Empty and clean
                containers before recycling them to
                prevent contamination.
            </p>
        </div>
    </div>

    <div class="flex flex-wrap">
        <div class="w-full md:w-1/3">
            <p class="text-xl">
                <b>5. No Wishful Recycling:
</b><br>
                
            Refrain from wishful recycling, which
            involves placing non-recyclable items
            in recycling bins in the hope that they
            will be recycled. Follow local recycling
            guidelines and only recycle materials
            that are accepted in your area
            </p>
        </div>
        <div class="w-full md:w-1/2 mt-4 md:mt-0">
            <p class="text-xl">
                <b>6. No Hazardous Materials:</b><br>
                Do not dispose of hazardous materials
                such as batteries, electronics, and
                household chemicals in recycling bins.
                These items require special handling
                and should be taken to designated
                hazardous waste collection sites for
                proper disposal.

            </p>
        </div>
    </div>
    </div>
    <div class="body bg-cover bg-center bg-no-repeat min-h-screen flex flex-col items-center justify-center px-6"
    style="background-image: url('assets/images/abou11.jpg');">
    <h1 class="text-5xl text-black">Eco-friendly Alternatives</h1>
    <br>
    <br>
    <p class="text-xl">
    Discover simple and sustainable alternatives to everyday
    products and practices that can help reduce waste and
    minimize environmental impact.
    </p>
    <br>
<div class="flex flex-wrap justify-between p-4">
    <div class="w-full md:w-1/2"> <!-- Changed width to md:w-1/2 -->
        <p class="text-xl">
            <b>Cloth Grocery Bags:</b><br>
            Say goodbye to single-use plastic bags
            and choose cloth grocery bags for your
            shopping trips. Cloth bags are sturdy,
            washable, and reusable, making them
            an eco-friendly alternative to
            disposable plastic bags that contribute
            to litter and harm wildlife.
        </p>
    </div>
    <div class="w-full md:w-1/2 text-right"> <!-- Changed width to md:w-1/2 and added text-right class -->
        <p class="text-xl">
            <b>Reusable Coffe Cups</b><br>
            Bring your own reusable coffee cup to
            your favorite coffee shop instead of
            using disposable cups. Reusable coffee
            cups are typically made from materials
            like ceramic, glass, or stainless steel and
            can be used multiple times, reducing
            waste and saving resources.
        </p>
    </div>
</div>
</div>
<div class="body bg-cover bg-center bg-no-repeat min-h-screen flex flex-col items-center justify-center px-6"
    style="background-image: url('assets/images/abou11.jpg');">
    <h1 class="text-5xl text-black">Eco-friendly Alternatives</h1>
    <br>
    <br>
    <p class="text-xl">
        Discover simple and sustainable alternatives to everyday
        products and practices that can help reduce waste and
        minimize environmental impact.
    </p>
    <br>
    <div class="flex flex-wrap justify-between p-4">
        <div class="w-full md:w-1/2"> <!-- Changed width to md:w-1/2 -->
            <p class="text-xl">
                <b>Reusable Food Containers:</b><br>
            Pack lunches and leftovers in reusable
            food containers instead of disposable
            plastic bags or wrap. Reusable food
            containers are eco-friendly, costeffective, and help reduce plastic waste
            in the kitchen and on the go.
            </p>
        </div>
        <div class="w-full md:w-1/2 text-right"> <!-- Changed width to md:w-1/2 and added text-right class -->
            <p class="text-xl">
                <b>Compostable Utensils:</b><br>
            When hosting events or picnics,
            consider using compostable utensils
            made from materials like bamboo or
            cornstarch instead of plastic utensils.
            Compostable utensils break down
            naturally in composting facilities,
            reducing the amount of plastic waste in
            landfills and oceans.
            </p>
        </div>
    </div>
    </div>
    <div class="body bg-cover bg-center bg-no-repeat min-h-screen flex flex-col items-center justify-center px-6"
        style="background-image: url('assets/images/abou11.jpg');">
        <h1 class="text-5xl text-black">Eco-friendly Alternatives</h1>
        <br>
        <br>
        <p class="text-xl">
            Discover simple and sustainable alternatives to everyday
            products and practices that can help reduce waste and
            minimize environmental impact.
        </p>
        <br>
        <div class="flex flex-wrap justify-between p-4">
            <div class="w-full md:w-1/2"> <!-- Changed width to md:w-1/2 -->
                <p class="text-xl">
                    <b>Reusable Water Bottles:</b><br>
                    Instead of using single-use plastic
                    water bottles, opt for reusable water
                    bottles made from materials like
                    stainless steel, glass, or BPA-free
                    plastic. Reusable water bottles are
                    durable, convenient, and help reduce
                    plastic waste and pollution.
                </p>
            </div>
            <div class="w-full md:w-1/2 text-right"> <!-- Changed width to md:w-1/2 and added text-right class -->
                <p class="text-xl">
                    <b>Biodegradable Cleaning Products:</b><br>
                    Switch to biodegradable cleaning
                    products made from natural and nontoxic ingredients instead of harsh
                    chemical cleaners. Biodegradable
                    cleaning products are safer for your
                    health and the environment, breaking
                    down into harmless substances after
                    use.
                </p>
            </div>
        </div>
    </div>
<div class="body bg-cover bg-center bg-no-repeat min-h-screen flex flex-col items-center justify-center px-6"
    style="background-image: url('assets/images/abou11.jpg');">
    <h1 class="text-5xl text-black">About Us</h1>
    <br>
    <br>
    <p class="text-xl">
Welcome to TRASHCYCLE, your go-to resource for promoting
environmental awareness and sustainability at Lagro High School!

    </p>
    <br>
    <p>At TRASHCYCLE, we're passionate about empowering students like you to
    make a positive impact on the environment through responsible waste
    management and recycling practices. Our mission is to raise awareness
    about the importance of reducing, reusing, and recycling waste to create a
    cleaner and greener future for our school and community.</p>
    <br>
    <p>Through DIY videos that we make for you to follow, and step by step tips to
    recycle and reuse your trash, we aim to educate and inspire Lagro High School
    students to take action in preserving our planet. Whether it's participating in
    recycling drives, organizing clean-up campaigns, or implementing eco-friendly
    practices in our daily lives, every effort counts towards building a more
    sustainable world.</p>
    <br>
    <p>Join us in our journey to make Lagro High School a model for environmental
    stewardship and sustainability. Together, let's TRASHCYCLE for a brighter
    tomorrow!</p>
    <br>
    </div>
    <div class="body bg-cover bg-center bg-no-repeat min-h-screen flex flex-col items-center justify-center px-6">
        <h1 class="text-5xl text-black">Meet the Team</h1>
        <br>
        <br>
        <div class="flex justify-between mt-6">
            <div class="image-container">
                <img src="./assets/images/team1.jpg" alt="Image 1" class="rounded-full border-4 border-white"
                    style="width: 100px; height: 100px;">
                <p class="text-center mt-2">Image 1</p>
            </div>
            <div class="image-container">
                <img src="./assets/images/team2.jpg" alt="Image 2" class="rounded-full border-4 border-white"
                    style="width: 100px; height: 100px;">
                <p class="text-center mt-2">Image 2</p>
            </div>
            <div class="image-container">
                <img src="./assets/images/team3.jpg" alt="Image 3" class="rounded-full border-4 border-white"
                    style="width: 100px; height: 100px;">
                <p class="text-center mt-2">Image 3</p>
            </div>
            <div class="image-container">
                <img src="./assets/images/team4.jpg" alt="Image 4" class="rounded-full border-4 border-white"
                    style="width: 100px; height: 100px;">
                <p class="text-center mt-2">Image 4</p>
            </div>
            <div class="image-container">
                <img src="./assets/images/team5.jpg" alt="Image 5" class="rounded-full border-4 border-white"
                    style="width: 100px; height: 100px;">
                <p class="text-center mt-2">Image 5</p>
            </div>
            <div class="image-container">
                <img src="./assets/images/team6.jpg" alt="Image 6" class="rounded-full border-4 border-white"
                    style="width: 100px; height: 100px;">
                <p class="text-center mt-2">Image 6</p>
            </div>
         
        </div>
        <hr class="my-6 border-t border-black w-full">
        <p class="text-right"><b>©2023 TRASHCYCLE. All Rights Reserved.</b></p>
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