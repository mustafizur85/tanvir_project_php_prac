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
               


               //array_push(): (bild in function) এই ফাংশনের মাধ্যমে (শেষে  Element) যুক্ত করা যায়।
                $stu_id = [1,2,3];
                $array_push = array_push($stu_id, 4,5,6);

                echo "<pre>";
                print_r($stu_id);
                echo "</pre>";

               
                //array_unshift(): (এই ফাংশনের মাধ্যমে (প্রথমে Element) যুক্ত করা যায়।)
                $color = ["white", "red"];
                $array_unshift = array_unshift($color, "Blue", "Yeollow");
           
                echo "<pre>";
                print_r($color);
                echo "</pre>";



               //array_keys():,array_values():  (এই ফাংশন এর মাধ্যমে key & value Database থেকে  তুলে আনা যায়।)
               
                $students_info  =[
                        
                    'id'                => 'ST0045',
                    'name'              => 'Mehenaf',
                    'father_name'       => 'Md. Mustafizur Rahman',
                    'mother_name'       => 'Khairunnesa Siddiqua',
                    'class'             => 'One',
                    'roll'              => '01'
                    
            ];
            
            $array_keys = array_keys($students_info);
            $array_value = array_values($students_info);

            echo "<pre>";
            print_r( $array_keys);
            print_r( $array_value);            
            echo "</pre>";


            //array_pop(): (এই ফাংশনের মাধ্যমে  (Last element delete) করা যায়।)

            array_pop($students_id);
            
            echo "<pre>";
            print_r ($students_id);
            echo "</pre>";

             //array_shift(): (এই ফাংশনের মাধ্যমে (First element delete) করা যায়।)

            array_shift($students_id);

            echo "<pre>";
            print_r ($students_id);
            echo "</pre>";

            ?>

        </div>
    </div>
</main>

<?php 
    include 'footer.php';
?>