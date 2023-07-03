
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
                    <label for="name" class="form-label">Name:<span class ="requird_feild">*</span</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name">
                </div>
            
            
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:<span class ="requird_feild">*</span</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>

                

                <div class="mb-3 mt-3">
                    <label for="number" class="form-label">Mobile No:<span class ="requird_feild">*</span</label>
                    <input type="number" class="form-control" id="number" placeholder="Enter Your Number" name="number">
                </div>

                <div class="mb-3 mt-3">
                    <label for="date" class="form-label">Your Birth Day:<span class ="requird_feild">*</span</label>
                    <input type="date" class="form-control" id="date" placeholder="Enter Your Birth Day" name="date">
                </div>

                <div class="mb-3 mt-3">
                    <label for="file" class="form-label">Your Photo:<span class ="requird_feild">*</span</label>
                    <input type="file" class="form-control" id="file" placeholder="Enter Your image" name="file">
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