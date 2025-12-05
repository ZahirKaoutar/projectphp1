
      <section class="container mx-auto py-16">
        <h2 class="text-3xl  text-blue-600 font-bold mb-8 text-center">Nos Services</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <?php foreach($services as $service): ?>
              <div class="bg-white border border-blue-500 p-6 shadow-md rounded-lg">
                <h3 class="text-xl font-bold mb-2"><?= htmlspecialchars($service["title"]) ?></h3>
                <p class="text-gray-600"><?= htmlspecialchars($service["description"]) ?></p>
              </div>
            <?php endforeach; ?>
        </div>

      </section>