<footer class="bg-gray-900 text-white py-6">
  <div class="flex flex-col md:flex-row justify-evenly items-start max-w-6xl mx-auto">

   
    <div class="flex flex-col text-left">
      <h1 class="text-2xl font-bold text-blue-600">DigitalWave</h1>
      <p class="mt-2 text-gray-300">
        Lorem ipsum dolor sit amet,<br>
        consectetur adipisicing elit.
      </p>
    </div>

   
    <ul class="flex flex-col space-y-3 mt-6 md:mt-0 md:space-y-4">
      <li><a href="/" class="<?= urlIs('/') ? 'text-blue-600' : 'text-gray-400' ?>">Accueil</a></li>
      <li><a href="/services" class="<?= urlIs('/services') ? 'text-blue-600' : 'text-gray-400' ?>">Services</a></li>
      <li><a href="/about" class="<?= urlIs('/about') ? 'text-blue-600' : 'text-gray-400' ?>">À propos</a></li>
      <li><a href="/contact" class="<?= urlIs('/contact') ? 'text-blue-600' : 'text-gray-400' ?>">Contact</a></li>
    </ul>

   
    <div class="flex flex-col mt-6 md:mt-0">
      <h1 class="text-blue-600">Subscribe to our newsletter</h1>
      <p class="mt-2 text-gray-300 text-sm">
        Lorem ipsum dolor sit amet,<br>
        consectetur adipisicing elit.
      </p>
      <div class="flex space-x-2 mt-3">
        <input class="border rounded-lg px-2 py-1" type="text" placeholder="Email..." />
        <button class="bg-blue-500 px-3 py-1 rounded-lg">Subscribe</button>
      </div>
    </div>

  </div>

  <p class="py-4 text-center border-t mt-6 border-gray-700">
    Copyright 2025 © DigitalWave All Right Reserved.
  </p>
</footer>
