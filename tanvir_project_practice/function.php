<?php 
    include 'header.php';
?>

<main class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
                function login_success_message(){
                    echo '<div class ="alert alert-success">You have successfully login</div>';
                }
                
                login_success_message();
            ?>
            

        </div>
    </div>
</main>


<?php 
    include 'footer.php';
?>