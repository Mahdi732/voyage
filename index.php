<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body >
    <nav class="md:flex md:justify-around md:gap-[10rem] md:items-center bg-opacity-80 md:h-[4rem] fixed top-0 left-0 z-50 w-full bg-transparent">
        <a class="md:h-[14rem] md:w-[14rem] md:ml-[-5.8rem] md:mt-3" href="#"><img src="Travel Paths.png" alt="loogo"></a>
        <ul class="flex justify-around items-center gap-[15rem] text-lg font-serif">
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="#">HOME</a></li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="#">TRAVEL</a></li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="#"></a>ABOUT US</li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="#">CONTACT</a></li>
        </ul>
    </nav>

    <div class="bg-[url('tr2.jpg')] bg-no-repeat bg-cover w-full h-[120vh] relative">
        <div class="text-white flex flex-col h-full ml-12 justify-center gap-4 animate-fadeinleft px-4 md:px-16">
            <h1 class="font-mono drop-shadow-[2px_2px_11px_black] text-[3rem] md:text-[5rem] leading-tight">
                WELCOME TO
                <br>
                TRAVEL PATHS
            </h1>
            <p class="text-xl drop-shadow-[2px_2px_10px_black] font-thin md:text-2xl">
                Your guide to discovering new destinations,
                <br>
                unforgettable experiences, and adventures around the world!
            </p>
            <a class="bg-[#c2daf5] bg-opacity-40 w-[8rem] text-center h-10 text-[1rem] font-semibold pt-2 rounded-lg mt-4 hover:bg-[#5e6976] transition duration-300 hover:scale-110 hover:ease-in animate-bounce" href="#">Find Your Path</a>
        </div>
    </div>
    

    <footer class="bg-gray-900 mb-0 text-gray-400 p-3.5">
        <div class=" mx-auto flex flex-col md:flex-row justify-between items-center">
            <img src="Travel Paths.png" class="h-[14rem] w-[14rem] m-[-5.25rem]" alt="loogo">
          <div class="mb-4 md:mb-0 flex gap-10 ">
            <a href="#" class="hover:text-white transition duration-300">Privacy Policy</a>
            <a href="#" class="hover:text-white transition duration-300">Terms of Service</a>
            <a href="#" class="hover:text-white transition duration-300">Help Center</a>
          </div>
          <p class="text-sm">© 2024 Fut Champion. All rights reserved.</p>
        </div>
      </footer>
</body>
</html>