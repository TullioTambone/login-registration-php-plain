<?php 
include __DIR__ . '/classi.php';

include __DIR__ . '/layout/top.php';
?>

<div class="container">
    <h1 class="mx-auto py-5 text-center">
        <?php 
            if (isset($_SESSION['users'])){
                echo ' Benvenuto nel tuo profilo '; 
                echo $_SESSION['users']->getName();
            }else{
                echo "Non sei registrato";
            }
            
        ?>    
    </h1>
    
</div>


<?php 
include __DIR__ . '/layout/bottom.php';
?>