<?php 
include __DIR__ . '/classi.php';

include __DIR__ . '/layout/top.php';
?>

<div class="container text-center py-5">
    <h1>Benvenuto nel sito</h1>
    <div class="d-flex justify-content-center gap-2 pt-4">
        <button class="btn btn-primary"><a class="text-white" href="login.php">Log in</a></button>
        <button class="btn btn-primary"><a class="text-white" href="register.php">Register</a></button>

    </div>
</div>

<?php 
include __DIR__ . '/layout/bottom.php';
?>