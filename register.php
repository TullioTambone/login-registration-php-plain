<!-- 2. Crea una pagina di registrazione (`register.php`) che consenta agli utenti di inserire nome, cognome, email e password. Quando un utente si registra, crea un oggetto `User`, lo memorizza in una variabile di sessione e lo reindirizza alla pagina del profilo. -->

<?php 
//parte la sessione

include __DIR__ . '/classi.php';

// print_r($_SESSION); 

if(isset($_POST['submit'])){
  $nome = $_POST['name'];
  $gannone = new User($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['password']);

  $_SESSION['users'] = $gannone;
 
  header('Location: profile.php?username='.$nome);
}


include __DIR__ . '/layout/top.php';

?>
<div class="container py-5">
    <form method="post" class="w-25 m-auto p-5 border rounded bg-secondary">
        <div class="mb-3">
          <label for="name" class="form-label text-white">Name</label>
          <input type="text" class="form-control" name="name" placeholder="name">
        </div>
        <div class="mb-3">
          <label for="surname" class="form-label text-white">Surname</label>
          <input type="text" class="form-control" name="surname" placeholder="surname">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label text-white">Email</label>
          <input type="email" class="form-control" name="email" placeholder="abc@mail.com">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label text-white">Password</label>
          <input type="password" class="form-control" name="password" placeholder="*******">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">submit</button>
    </form>
</div>

<?php 

include __DIR__ . '/layout/bottom.php';

?>