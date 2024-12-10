<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Travel Paths</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="md:flex md:justify-around md:items-center bg-opacity-80 md:h-[4rem] w-full bg-black">
        <a href="index.php" class="md:h-[14rem] md:w-[14rem] md:ml-[-5.8rem] md:mt-3">
            <img src="Travel Paths.png" alt="Logo">
        </a>
        <ul class="flex justify-around items-center gap-[15rem] text-lg font-serif">
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg">
                <a href="index.php">HOME</a>
            </li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg">
                <a href="tours.php">TOURS</a>
            </li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg">
                <a href="#">ABOUT US</a>
            </li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg">
                <a href="login.php">LOGIN</a>
            </li>
        </ul>
    </nav>

    <div class="w-full h-[100vh] flex items-start justify-end mb-12">
        <button class="py-4  px-8 bg-blue-600 rounded-xl text-white"
          onclick="document.getElementById('addActivitiesform').classList.toggle('hidden')">
          Add Activity
        </button>
 
        <!-- Add Activities Form -->
        <div id="addActivitiesform" class="w-[50rem] mx-auto mt-10 p-8 bg-blue-400 rounded-md shadow-lg border border-purple-300 hidden">
            <h2 class="text-xl font-bold text-blue-800 mb-6 text-center">Ajouter une Activité</h2>
            <form action="/submit" method="POST" class="space-y-5">
                <div>
                    <label class="block text-sm font-semibold text-black">Titre</label>
                    <input type="text"  name="titre" placeholder="Entrez le titre"
                      class="mt-1 w-full rounded border border-blue-800 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 p-2 bg-white" required>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-black">Description</label>
                    <textarea  name="description" rows="3" placeholder="Entrez la description"
                      class="mt-1 w-full rounded border border-blue-800 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 p-2 bg-white" required></textarea>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-black">Destination</label>
                    <input type="text"  name="destination" placeholder="Entrez la destination"
                      class="mt-1 w-full rounded border border-blue-800 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 p-2 bg-white" required>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-black">Prix</label>
                    <input type="number"  name="prix" step="0.01" placeholder="Entrez le prix"
                      class="mt-1 w-full rounded border border-blue-800 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 p-2 bg-white" required>
                </div>
                <div class="flex justify-between gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-black">Date de Début</label>
                        <input type="date"  name="date_debut"
                          class="mt-1 w-full rounded border border-blue-800 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 p-2 bg-white" required>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-black">Date de Fin</label>
                        <input type="date" name="date_fin"
                          class="mt-1 w-full rounded border border-blue-800 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 p-2 bg-white" required>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-black">Places Disponibles</label>
                    <input type="number"  name="places_disponibles" placeholder="Nombre de places"
                      class="mt-1 w-full rounded border border-blue-800 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 p-2 bg-white" required>
                </div>
                <div>
                    <button type="submit"
                      class="w-full py-2 px-4 bg-green-600 text-white font-semibold rounded shadow-md hover:bg-green-700 focus:ring focus:ring-green-400">
                      Soumettre
                    </button>
                </div>
            </form>
        </div>
    </div>

    <footer class="bg-gray-900 text-gray-400">
        <div class=" flex flex-col md:flex-row justify-between items-center">
            <img src="Travel Paths.png" class="h-[4rem] w-[4rem]" alt="Logo">
            <div class="mb-4 md:mb-0 flex gap-10">
                <a href="#" class="hover:text-white transition duration-300">Privacy Policy</a>
                <a href="#" class="hover:text-white transition duration-300">Terms of Service</a>
                <a href="#" class="hover:text-white transition duration-300">Help Center</a>
            </div>
            <p class="text-sm">© 2024 Fut Champion. All rights reserved.</p>
        </div>
    </footer>


    <?php include '/xampp/htdocs/voyage/conect.php'; ?>
</body>
</html>
