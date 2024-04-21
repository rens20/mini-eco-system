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
        <!-- First Section -->
        <div class="flex gap-4">
            <div class="w-full sm:w-1/3">
                <img src="./assets/images/trash4.jpg" alt="Image 4" class="w-full h-auto max-h-64 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mt-4 mb-2">Glass Recycling</h3>
                <p class="text-lg mb-4">Recycle glass bottles and containers to reduce waste and conserve resources.</p>
                <button class="mt-4 border border-gray-500 text-black px-4 py-2 rounded mx-auto block">PLAY</button>
            </div>
            <div class="w-full sm:w-1/3">
                <img src="./assets/images/trash3.jpg" alt="Image 5" class="w-full h-auto max-h-64 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mt-4 mb-2">Metal Recycling</h3>
                <p class="text-lg mb-4">Recycling metal products helps in saving energy and preserving natural resources.</p>
                <button class="mt-4 border border-gray-500 text-black px-4 py-2 rounded mx-auto block">PLAY</button>
            </div>
            <div class="w-full sm:w-1/3">
                <img src="./assets/images/trash5.jpg" alt="Image 6" class="w-full h-auto max-h-64 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold mt-4 mb-2">Plastic Bottles</h3>
                <p class="text-lg mb-4">Recycle plastic bottles to reduce pollution and protect marine life.</p>
                <button class="mt-4 border border-gray-500 text-black px-4 py-2 rounded mx-auto block">PLAY</button>
            </div>
        </div>
    
        </div>
    </div>
</body>
</html>
