  <section class="w-full h-full">
          <div class="container mx-auto py-16">
              <h2 class="text-3xl font-bold mb-6 text-center">Contactez-nous</h2>

              <?php if($succes === " votre message est envoyé "): ?>
                  <div class="max-w-2xl mx-auto mb-8 p-4 bg-green-100 border-l-4 border-green-500 rounded-lg">
                      <p class="text-green-700 font-medium"><?= $succes ?></p>
                  </div>
              <?php endif; ?>

              <form class="max-w-xl mx-auto p-8 shadow-md rounded-lg  h-[500px]  bg-gray-900" method="post" action="../controllers/contact.php">
                  <input type="text" name="nom" placeholder="Votre nom"  class="w-full mb-[20px] border px-4 py-2 rounded-lg">
                  <?php if(!empty($errors['nom'])): ?>
                      <p class="text-red-500"><?= $errors['nom'] ?></p>
                  <?php endif; ?>

                  <input type="email" name="email" placeholder="Votre email"  class="w-full mb-[20px] border px-4 py-2 rounded-lg">
                  <?php if(!empty($errors['email'])): ?>
                      <p class="text-red-500"><?= $errors['email'] ?></p>
                  <?php endif; ?>

                  <textarea name="message" placeholder="Votre message" class="w-full mb-[20px] border px-4 py-2 rounded-lg"></textarea>
                  <?php if(!empty($errors['message'])): ?>
                      <p class="text-red-500"><?= $errors['message'] ?></p>
                  <?php endif; ?>

                  <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Envoyer</button>
              </form>
          </div>
      </section>