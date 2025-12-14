
<?php session_start();
$errors=[];
$succes="";

if(isset($_SESSION["succes"])){
  $succes=$_SESSION["succes"];
}
if(isset($_SESSION["errors"])){
  $errors=$_SESSION["errors"];
}
unset($_SESSION["errors"]);
unset($_SESSION["succes"]);
?>






<section class="container mx-auto py-16">
    <h2 class="text-3xl font-bold mb-6 text-center">Contactez-nous</h2>
    
  <?php if(!empty($succes)): ?>
    <p class="bg-green-100 text-green-700 p-4 rounded-lg mb-4 text-center">
      <?php echo $succes ?>
    </p>
  <?php endif; ?>
    <form class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4" method="post" action="/../controllers/contact.php">
      <input type="text" placeholder="Votre nom"  name="nom" class="w-full border px-4 py-2 rounded-lg">
      <?php if(!empty($errors["nom"])):?>
         <p class="text-red-500"><?php echo $errors["nom"]?></p>
        
      <?php endif;?>
     
      <input type="email" placeholder="Votre email" name="email" class="w-full border px-4 py-2 rounded-lg">
      <?php if(!empty($errors["email"])):?>
         <p class="text-red-500"><?php echo $errors["email"]?></p>
        
      <?php endif;?>
      <textarea placeholder="Votre message" name="message" class="w-full border px-4 py-2 rounded-lg"></textarea>
      <?php if(!empty($errors["message"])):?>
         <p class="text-red-500"><?php echo $errors["message"]?></p>
        
      <?php endif;?>
      <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Envoyer</button>
    </form>
  </section>