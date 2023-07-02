
<?php 
    include 'header.php'
?>
    
    
    <main class="container">
      <div class="row">

        <div class="col-md-6">
            <h2>Registration Form</h2>

            <form method = "POST" action = "">

                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                
                <input type="submit"  class="btn btn-primary" name = "registration_form_submit"value ="Registration">
            </form>
        </div>

        <div class="col-md-6">
            <?php

            if(isset($_POST["registration_form_submit"]) && !empty($_POST["registration_form_submit"])){
                $email= $_POST["email"];
                echo "Your Email is : ".$email;
            }
                
            ?>
        </div>


      </div>  

    </main>


<?php 
    include 'footer.php'
?>