<?php 
    include 'header.php';
?>


<main class="container">  
    <div class="row">
        <div class="col-md-12">
            <?php
            /*
                //comparision oparator (== or === use)
                //(==) data type  ধরতে পারে না।
                $password           = 123456;
                $confirm_password   = "123456";

                if($password == $confirm_password){
                    echo "password and confirmpassword matched"."<br>";
                }
                else{
                    echo "password and confirm password not matched"."<br>";
                }
                

                //(===) data type  ধরতে পারে।
                $password           = 123456;
                $confirm_password   = "123456";

                if($password === $confirm_password){
                    echo "password and confirmpassword matched"."<br>";
                }
                else{
                    echo "password and confirm password not matched"."<br>";
                    
                }

              */  

                //date format
                /*
                $date = date('d');
                echo "Month of day: ".$date."<br>";
                $date = date('D');
                echo "Month of day: ".$date."<br>";
                $date = date('F');
                echo "Day of Month: ".$date."<br>";
                $date = date('Y');
                echo "Month of Year: ".$date."<br>";
                $date = date('a');
                echo "AM or PM: ".$date."<br>";
                $date = date('e');
                echo "Time Zone: ".$date."<br>";
                $date = date('r');
                echo "Full Time: ".$date."<br>";
                $date = date('Y-m-d');
                echo "Today is Date: ".$date."<br>";
                
                */

                // Date of condition 
                
               /*  $check_day = date('D');
                $message = "";
              

                if($check_day == 'Sun'){
                    $message = "Today is Sunday and we have web development class.";
                }
                elseif($check_day == 'Mon'){
                    $message = "Today is Monday and we have web development class.";
                }
                elseif($check_day == 'Thu'){
                    $message = "Today is Thursday and we have web development class";
                }
                else{
                    $today = date('l');
                    $message = "Today is $today and we have no web development class.";
                }

                echo $message; */


                //ids Array 

                $ids = ['1','2','3','4','5'];
                $total_element = count($ids);
                echo "Total Element ids array: ".$total_element."<br>";
                echo "This array element is: ".$ids[2]."<br>";  
                echo "This array element is: ".$ids[5]."<br>"; // যেহেতু 5 out fo arrary so browser এ warnning show করবে।browser যেন warnning show না করে এ জন্য isset ব্যবহার করতে হয়। 
                
              if(isset($ids[5])){
                echo "This array element is: ".$ids[5]."<br>";
              }else{
               echo "No value found for this arrary";
              }

                



            ?>


        </div>
    </div>
</main>





<?php 
    include 'footer.php';
?>