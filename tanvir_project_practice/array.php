<?php 
    include 'header.php';
?>

<main class="container">
    <div class="row">
        <div class="col-md-12">


        <style>
            .student_info{
                padding: 10px;
                margin:5px;
                border:2px solid black;
                float: left;
                background: red;
            }
        </style>

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
            
                

                



             /*
                // associative array (multidaimentional array)

                $stu_info  =[
                    [
                        
                        'id'                => 'ST0046',
                        'name'              => 'Maisha',
                        'father_name'       => 'Md. Mustafizur Rahman',
                        'mother_name'       => 'Khairunnesa Siddiqua',
                        'class'             => 'One',
                        'roll'              => '01',
                        'addres'            => [
                            'present_addr' => 'Abdullahpur',
                            'permanent_addr' => 'Fulbaria',
                        ]

                    ],

                    [
                        
                        'id'                => 'ST0047',
                        'name'              => 'Mahatab',
                        'father_name'       => 'Md. Mustafizur Rahman',
                        'mother_name'       => 'Khairunnesa Siddiqua',
                        'class'             => 'One',
                        'roll'              => '02',
                        'addres'            => [
                            'present_addr' => 'Haldia',
                            'permanent_addr' => 'Mymensingh',
                        ]


                    ],

                    [
                        
                        'id'                => 'ST0048',
                        'name'              => 'Mehenaf',
                        'father_name'       => 'Md. Mustafizur Rahman',
                        'mother_name'       => 'Khairunnesa Siddiqua',
                        'class'             => 'One',
                        'roll'              => '03',
                        'addres'            => [
                            'present_addr' => 'Keranigonj',
                            'permanent_addr' => 'Dhaka',
                        ]

                    ],

                   

                   
                    
            ];

            echo '<pre>';
           // print_r($stu_info);
            echo '</pre>';

           
            print_r($stu_info['0']['name']."<br>");
            print_r($stu_info['1']['name']."<br>");
            print_r($stu_info['3']['mother_name']."<br>");
            
            echo $stu_info['3']['mother_name']."<br>";
            


            foreach($stu_info as $key=>$value){
                
                echo $key;
                echo "<pre>";
                print_r($value);
                echo "</pre>";
                exit;
                

                echo '<div class = "student_info">';
              
                echo "Student id: ".$value['id']."<br>";
                echo "Student name: ".$value['name']."<br>";
                echo "Student Father's name: ".$value['father_name']."<br>";
                echo "Student Mother's name: ".$value['mother_name']."<br>";
                echo "Student class: ".$value['class']."<br>";
                echo "Student roll: ".$value['roll']."<br>";
                //Three Daimention
                echo "Present Address: ".$value['addres']['present_addr']."<br>";
                echo "Permanent Address: ".$value['addres']['permanent_addr']."<br>";
               
                echo '</div>';

                             
               

            }

        */



            
            // associative array (multidaimentional array) 
            //Conversation array of  object 
            // array কে object করার Example:

            $stu_info  =(object)[
                (object)[
                    
                    'id'                => 'ST0046',
                    'name'              => 'Maisha',
                    'father_name'       => 'Md. Mustafizur Rahman',
                    'mother_name'       => 'Khairunnesa Siddiqua',
                    'class'             => 'One',
                    'roll'              => '01',
                    'addres'            => [
                        'present_addr' => 'Abdullahpur',
                        'permanent_addr' => 'Fulbaria',
                    ]

                ],

                (object)[
                    
                    'id'                => 'ST0047',
                    'name'              => 'Mahatab',
                    'father_name'       => 'Md. Mustafizur Rahman',
                    'mother_name'       => 'Khairunnesa Siddiqua',
                    'class'             => 'One',
                    'roll'              => '02',
                    'addres'            => [
                        'present_addr' => 'Haldia',
                        'permanent_addr' => 'Mymensingh',
                    ]


                ],

               (object) [
                    
                    'id'                => 'ST0048',
                    'name'              => 'Mehenaf',
                    'father_name'       => 'Md. Mustafizur Rahman',
                    'mother_name'       => 'Khairunnesa Siddiqua',
                    'class'             => 'One',
                    'roll'              => '03',
                    'addres'            => [
                        'present_addr' => 'Keranigonj',
                        'permanent_addr' => 'Dhaka',
                    ]

                ],

                
               
                
        ];



        
        foreach($stu_info as $key=>$value){
            /*
            echo $key;
            echo "<pre>";
            print_r($value);
            echo "</pre>";
            exit;
            */

            echo '<div class = "student_info">';
          
            echo "Student id: ".$value->id."<br>";
            echo "Student name: ".$value->name."<br>";
            echo "Student Father's name: ".$value->father_name."<br>";
            echo "Student Mother's name: ".$value->mother_name."<br>";
            echo "Student class: ".$value->class."<br>";
            echo "Student roll: ".$value->roll."<br>";
            //Three Daimention
            echo "Present Address: ".$value->addres['present_addr']."<br>";
            echo "Permanent Address: ".$value->addres['permanent_addr']."<br>";
           
            echo '</div>';

                         
           

        }

           

            ?>

        </div>
    </div>
</main>

<?php 
    include 'footer.php';
?>