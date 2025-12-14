<header class="bg-white shadow-md w-full">
   <nav class="container mx-auto flex flex-col md:flex-row justify-between items-center py-4">
  <div class="w-full flex justify-between ">
      <h1 class="text-2xl font-bold text-blue-600">DigitalWave</h1>

     
      <div class="menu-brger w-[80px] md:hidden">
         <img src="/img/menu.png">
      </div>
  </div>
    

     
    
        <ul class="MMM  hidden flex flex-col w-full space-y-4 mt-4 md:flex  md:flex-row md:space-x-6 md:space-y-0">


         <li><a href="/" class="<?= urlIs('/') ? 'text-blue-600':'text-gray-500' ?>">Accueil</a></li>
         <li><a href="/services" class="<?= urlIs('/services') ? 'text-blue-600':'text-gray-500' ?>">Services</a></li>
         <li><a href="/about" class="<?= urlIs('/about') ? 'text-blue-600':'text-gray-500' ?>">À propos</a></li>
         <li><a href="/contact" class="<?= urlIs('/contact') ? 'text-blue-600':'text-gray-500' ?>">Contact</a></li>
      </ul>

   </nav>
</header>

<script>
let burger = document.querySelector(".menu-brger");
burger.addEventListener("click", () => {
   document.querySelector(".MMM").classList.toggle("hidden");
});
</script>
