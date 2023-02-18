<?php 
    include 'header.php';
?>

<main class="container">
    <div class="row">
        <div class="col-md-12">

            <?php 
                /*
                // associative array (singel daimention array)

                $students_info  =[
                        
                        'id'                => 'ST0045',
                        'name'              => 'Mehenaf',
                        'father_name'       => 'Md. Mustafizur Rahman',
                        'mother_name'       => 'Khairunnesa Siddiqua',
                        'class'             => 'One',
                        'roll'              => '01'

                ];

            // show korar roll
               
            //first method 
                echo '<pre>';
                print_r($students_info);
                echo '</pre>';
            //2nd method 
                echo '<pre>';
                print_r($students_info['id']);
                echo '</pre>';
                
            //3rd method 
                echo ($students_info['name']);
                
               
                echo "Student id: ".$students_info['id']."<br>";
                echo "Student name: ".$students_info['name']."<br>";
                echo "Student Father's name: ".$students_info['father_name']."<br>";
                echo "Student Mother's name: ".$students_info['mother_name']."<br>";
                echo "Student class: ".$students_info['class']."<br>";
                echo "Student roll: ".$students_info['roll']."<br>";

            */
            
                

                
             
                // associative array (multidaimentional array)

                $stu_info  =[
                    [
                        
                        'id'                => 'ST0046',
                        'name'              => 'Maisha',
                        'father_name'       => 'Md. Mustafizur Rahman',
                        'mother_name'       => 'Khairunnesa Siddiqua',
                        'class'             => 'One',
                        'roll'              => '01'

                    ],

                    [
                        
                        'id'                => 'ST0047',
                        'name'              => 'Mahatab',
                        'father_name'       => 'Md. Mustafizur Rahman',
                        'mother_name'       => 'Khairunnesa Siddiqua',
                        'class'             => 'One',
                        'roll'              => '02'

                    ],

                    [
                        
                        'id'                => 'ST0048',
                        'name'              => 'Mehenaf',
                        'father_name'       => 'Md. Mustafizur Rahman',
                        'mother_name'       => 'Khairunnesa Siddiqua',
                        'class'             => 'One',
                        'roll'              => '03'

                    ],

                    [
                        
                        'id'                => 'ST0049',
                        'name'              => 'Raha',
                        'father_name'       => 'Sayeasta khan',
                        'mother_name'       => 'jelly',
                        'class'             => 'One',
                        'roll'              => '04'

                    ],
                    
            ];

            echo '<pre>';
            //print_r($stu_info);
            echo '</pre>';

            echo '<pre>';
            print_r($stu_info['0']['name']);
            print_r($stu_info['1']['name']);
            echo '</pre>';

            ?>

        </div>
    </div>
</main>

<?php 
    include 'footer.php';
?>