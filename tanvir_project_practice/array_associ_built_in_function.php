<?php 
    include 'header.php';
?>

<main class="container">
    <div class="row">
        <div class="col-md-12">
            
            <?php

                //Manuallay Element Add

                $students_id = [1,2,3];
                $students_id[] = 4;

                echo "<pre>";
                print_r($students_id);
                echo "</pre>";
               

               //array push (bild in function) এই ফাংশনের মাধ্যমে শেষে  Element যুক্ত করা যায়।
                $stu_id = [1,2,3];
                $array_push = array_push($stu_id, 4,5,6);

                echo "<pre>";
                print_r($stu_id);
                echo "</pre>";

               
                //array unshift (এই ফাংশনের মাধ্যমে প্রথমে Element যুক্ত করা যায়।)
                $color = ["white", "red"];
                $array_unshift = array_unshift($color, "Blue", "Yeollow");
           
                echo "<pre>";
                print_r($color);
                echo "</pre>";

                

            ?>

        </div>
    </div>
</main>

<?php 
    include 'footer.php';
?>