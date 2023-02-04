<?php 
    include 'header.php';
?>

<main class="container">
    <div class="row">
        <div class="col-md-12">
            <?php


                //Note: With parameter function
                function is_login_success($check_login){
                    if($check_login){
                        echo '<div class ="alert alert-success">You have successfully login</div>';
                    }else{
                        echo '<div class ="alert alert-warning">login failed</div>';
                    }
                }
                $login_status = true;
                is_login_success($login_status);





                //Note: Without parameter function
                function login_success_message(){
                    echo '<div class ="alert alert-success">You have successfully login</div>';
                }
                
                //login_success_message();
                
            ?>
            

        </div>
    </div>
</main>


<?php 
    include 'footer.php';
?>