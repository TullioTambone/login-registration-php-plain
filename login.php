<?php 
include __DIR__ . '/classi.php';
if(isset($_POST['submit'])){
    foreach($users as $elem){
        if($_POST['email'] == $elem->getMail()){
            $_SESSION['users'] = $elem;
            header('Location: profile.php?username='.$elem->getName());
        }
    }
}


include __DIR__ . '/layout/top.php';
?>

<div class="container text-center py-5">
    <h1>Accedi</h1>
    <form method="post" class="w-25 m-auto p-5 border rounded bg-secondary">
        
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