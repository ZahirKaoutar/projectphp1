<header class="bg-gray-900 text-white shadow-md">
    <nav class="container mx-auto flex justify-between items-center py-4">
    <h1 class="text-2xl font-bold text-blue-600">DigitalWave</h1>
    <ul class="flex space-x-6">
            
            <li>
                <a href="/" class="<?= urlIs('/') ? 'text-blue-600 font-semibold' : 'text-white' ?>">
                    Accueil
                </a>
            </li>
            <li>
                <a href="/services" class="<?= urlIs('/services') ? 'text-blue-600 font-semibold' : 'text-white' ?>">
                    Services
                </a>
            </li>
            <li>
                <a href="/about" class="<?= urlIs('/about') ? 'text-blue-600 font-semibold' : 'text-white' ?>">
                    À propos
                </a>
            </li>
            <li>
                <a href="/contact" class="<?= urlIs('/contact') ? 'text-blue-600 font-semibold' : 'text-white' ?>">
                    Contact
                </a>
            </li>
    </ul>
    </nav>
</header>