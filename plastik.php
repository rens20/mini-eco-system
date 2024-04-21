<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newspaper</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .play-button {
            background-color: #4CAF50; /* Green background */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 8px;
        }

        .play-button:hover {
            background-color: #45a049; /* Darker green */
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8 px-4">
        
        <!-- Additional Section -->
        <div class="flex justify-between items-start mt-8">
            <div class="w-1/3 pr-2">
                <img src="./assets/images/trash7.jpg" alt="Image 7" class="w-full h-auto max-h-64 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mb-2">Organic Waste</h3>
                <p class="text-lg">Composting organic waste helps in reducing methane emissions and enriching soil quality.</p>
                <button class="mt-4 border border-gray-500 text-black px-4 py-2 rounded mx-auto block">play</button>
            </div>
            <div class="w-1/3 px-2">
                <img src="./assets/images/trash8.jpg" alt="Image 8" class="w-full h-auto max-h-64 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mb-2">E-Waste Recycling</h3>
                <p class="text-lg">Recycle electronic waste to recover valuable materials and reduce environmental impact.</p>
                <button class="mt-4 border border-gray-500 text-black px-4 py-2 rounded mx-auto block">play</button>
            </div>
            <div class="w-1/3 pl-2">
                <img src="./assets/images/trash6.jpg" alt="Image 9" class="w-full h-auto max-h-64 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mb-2">Textile Recycling</h3>
                <p class="text-lg">Recycle textiles to conserve resources and reduce waste in landfills.</p>
                <button class="mt-4 border border-gray-500 text-black px-4 py-2 rounded mx-auto block">play</button>
            </div>
        </div>
    </div>
</body>
</html>
