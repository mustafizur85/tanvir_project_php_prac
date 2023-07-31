
<?php 
    include 'header.php'
?>
    
    
    <main class="container">
      <div class="row">

        <div class="col-md-6">
            <h2>Registration Form</h2>

            <?php

                if(isset($_SESSION["status"]) && $_SESSION["status"] == "success"){
            ?>


                    <div class="alert alert-success">
                        <?php
                           echo $_SESSION["message"];
                           unset($_SESSION["status"]);
                           unset($_SESSION["message"]);
                        ?>

                    </div>

            <?php

                }
            ?>


            <?php
                if(isset($_SESSION["status"]) && $_SESSION["status"] == "error"){
            ?>


                    <div class="alert alert-danger">
                        <?php
                           echo $_SESSION["message"];
                           unset($_SESSION["status"]);
                           unset($_SESSION["message"]);
                        ?>

                    </div>

            <?php

                }
            ?>



            <form method = "POST" action = "registration_data_process.php">

                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:<span class ="requird_feild">*</span</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value = "<?php if(isset($_SESSION["form_data"]["user_email"]) && !empty ($_SESSION["form_data"]["user_email"])) {echo $_SESSION["form_data"]["user_email"];}?>">
                </div>  
                
                
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name:<span class ="requird_feild">*</span</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" value = "<?php if(isset($_SESSION["form_data"]["user_name"]) && !empty ($_SESSION["form_data"]["user_name"])) {echo $_SESSION["form_data"]["user_name"];}?>">
                </div>
                
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Gender:<span class ="requird_feild">*</span</label>

                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio1" name="gender" value="Male" <?php if(isset($_SESSION["form_data"]["gender"]) && $_SESSION["form_data"]["gender"] == "Male"){echo "checked";}?>>Male
                        <label class="form-check-label" for="radio1"></label>
                    </div>
                    
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio2" name="gender" value="Female" <?php if(isset($_SESSION["form_data"]["gender"]) && $_SESSION["form_data"]["gender"] == "Female"){echo "checked";}?>>Female
                        <label class="form-check-label" for="radio2"></label>
                    </div>                    
                </div>


                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">How do you know us?:<span class ="requird_feild">*</span</label>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1" name="how_do_know[]" value="Facebook">
                        <label class="form-check-label">Facebook</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check2" name="how_do_know[]" value="Website_adds">
                        <label class="form-check-label">Website add</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check3" name="how_do_know[]" value="Friend">
                        <label class="form-check-label">Facebook</label>
                    </div>

                </div>
                
                <input type="submit"  class="btn btn-primary" name = "registration_form_submit"value ="Registration">
            </form>
        </div>

        <div class="col-md-6">
            <?php

            // if(isset($_POST["registration_form_submit"]) && !empty($_POST["registration_form_submit"])){
            //     $email= $_POST["email"];
            //     echo "Your Email is : ".$email;
            // }
                
            ?>
        </div>


      </div>  

    </main>


<?php 
    include 'footer.php'
?>