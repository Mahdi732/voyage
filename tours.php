<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Travel Paths</title>
</head>
<body class="bg-slate-200">
    <nav class="md:flex md:justify-around md:gap-[10rem] md:items-center bg-opacity-80 md:h-[4rem] w-full bg-black">
        <ul class="md:flex hidden md:justify-around md:items-center md:gap-[10rem] text-lg font-serif">
            <li><a class="md:h-[14rem] md:w-[14rem] md:ml-[-5.8rem] md:mt[-1rem]" href="#"><img src="Travel Paths.png" alt="loogo"></a></li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="index.php">HOME</a></li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="tours.php">TOURS</a></li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="dashbord.php">CLIENT</a></li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="login.php">LOGIN</a></li>
        </ul>
        <div class="flex justify-between">
            <li><a href="#" class="text-white text-sm md:text-lg font-semibold md:hidden">TRAVEL PATHS</a></li>
            <button  id="menu-toggle" class="text-white focus:outline-none md:hidden">
                <i class="fa fa-bars fa-2x"></i>
            </button>
        </div>
    </nav>

    <div id="mobile-menu" class="md:hidden bg-[#5018dfad] text-white p-4 h-screen flex justify-center hidden items-center absolute w-full">
        <ul class="flex flex-col items-center gap-8 text-2xl text-center mt-[16rem]">
        <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="index.php">HOME</a></li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="tours.php">TOURS</a></li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="dashbord.php">CLIENT</a></li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="login.php">LOGIN</a></li>
        </ul>
    </div>  
    
<script>
    const menuToggle = document.getElementById('menu-toggle');
const menu = document.getElementById('mobile-menu');

menuToggle.addEventListener('click', () => {
  menu.classList.toggle('hidden');
  menu.classList.toggle('flex');
});
</script>

      <span class="h-[3rem] flex w-full justify-between  items-center mb-[-1rem]  bg-slate-600">Les Activité :    <button class="py-2 px-4 bg-blue-600 flex justify-end rounded-xl"
      onclick="document.getElementById('addActivitiesform').classList.toggle('hidden')">Add
      activite</button></span>
      <div class=" flex  flex-row-reverse justify-center mr-6 md:m-3 gap-[3rem]">
    <div class="w-full h-[100vh] mb-12">
        <div id="addActivitiesform" class="w-[30rem] absolute z-50 left-[40%] right-[60%] h-[100vh] hidden mt-4 mr-4 p-8 bg-blue-400 rounded-md shadow-lg border border-purple-300 ">
            <h2 class="text-xl font-bold text-blue-800 mb-6 text-center">Ajouter une Activité</h2>
            <form method="POST" class="space-y-5">
                <div>
                    <label class="block text-sm font-semibold text-black">Titre</label>
                    <input type="text"  name="titre" placeholder="Entrez le titre"
                      class="mt-1 w-full rounded border border-blue-800 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 p-2 bg-white" required>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-black">Description</label>
                    <textarea  name="description" placeholder="Entrez la description"
                      class="mt-1 w-full rounded border border-blue-800 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 p-2 bg-white" required></textarea>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-black">Destination</label>
                    <input type="text"  name="destination" placeholder="Entrez la destination"
                      class="mt-1 w-full rounded border border-blue-800 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-800 p-2 bg-white" required>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-black">Prix</label>
                    <input type="number"  name="prix" placeholder="Entrez le prix"
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
    <?php
include '/xampp/htdocs/voyage/conect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete_id'])) {
        $delete_id = $_POST['delete_id'];
        $delete_sql = "DELETE FROM activite WHERE id_activite = $delete_id";
        $result = mysqli_query($connect, $delete_sql);
        
    } else {
        $titre = $_POST['titre'];
        $description = $_POST['description'];
        $destination = $_POST['destination'];
        $prix = $_POST['prix'];
        $date_debut = $_POST['date_debut'];
        $date_fin = $_POST['date_fin'];
        $places_disponibles = $_POST['places_disponibles'];

        $sql = "INSERT INTO activite (titre, description, destination, prix, date_debut, date_fin, places_desponsibles) 
                VALUES ('$titre', '$description', '$destination', '$prix', '$date_debut', '$date_fin', '$places_disponibles')";
        $result = mysqli_query($connect, $sql);

        if ($result) {
            echo '<script type="text/javascript">
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                }
            </script>';
        }
    }
}

$selectall = "SELECT * FROM activite";
$data = mysqli_query($connect, $selectall);
if ($data) {
    echo '<div class="md:grid md:grid-cols-4 md:gap-x-[21rem] ml-[5rem] md:justify-center mt-4">';
    while ($fetch = mysqli_fetch_assoc($data)) {
        echo '<div class="max-w-sm bg-white rounded-lg shadow-lg h-[22rem] w-[20rem] p-6 mb-6 overflow-auto">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Tour Details</h2>
            <div class="space-y-1">
                <p class="text-lg font-medium text-gray-600"><strong>Titre:</strong> ' . $fetch['titre'] . '</p>
                <p class="text-lg font-medium text-gray-600"><strong>Description:</strong> ' . $fetch['description'] . '</p>
                <p class="text-lg font-medium text-gray-600"><strong>Destination:</strong> ' . $fetch['destination'] . '</p>
                <p class="text-lg font-medium text-gray-600"><strong>Prix:</strong> ' . $fetch['prix'] . ' DH</p>
                <p class="text-lg font-medium text-gray-600"><strong>Date de Début:</strong> ' . $fetch['date_debut'] . '</p>
                <p class="text-lg font-medium text-gray-600"><strong>Date de Fin:</strong> ' . $fetch['date_fin'] . '</p>
                <p class="text-lg font-medium text-gray-600"><strong>Places Disponibles:</strong> ' . $fetch['places_desponsibles'] . '</p>
            </div>
            <form method="POST" action="">
                <button type="submit" class="bg-red-700 p-1 rounded-lg text-center text-[12px] w-[16rem] text-white transition-all duration-300">
                    Delete
                <input type="hidden" name="delete_id" value="' . $fetch['id_activite'] . '">
                </button>
            </form>
        </div>';
    }
    echo '</div>';
}
?>

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
</body>
</html>
