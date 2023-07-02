<?php 
    include 'header.php';
?>

<main class="container">
    <div class="row">
        <div class="col-md-12">

            <!----- function with return 
               যদি কোন ডাটা  স্টোর না হয় তাহলে error মেসেজ দেখাবে যদি ডাটা স্টোর হয় তাহলে
               Data successfully মেসেস দেখাবে।  এই কোডগুলো নিচে দেয়া আছে। অর্থ্যাৎ function কিভাবে
               return করে তা  দেখানো হয়েছে।  ----->
            <?php

                //student info succesfully submited function
                function save_student_info(){

                    echo '<div class = "alert alert-success"> Data successfully stroed</div>';
                }

                //student info show data error function
                function show_data_error(){
                    echo '<div class = "alert alert-danger"> Data have error</div>';
                }


                //student info cheak function
                function cheak_student_data($student_data){

                    $status = true;

                    if(empty($student_data['id'])){
                        $status = false;
                    }

                    if(empty($student_data['name'])){
                        $status = false;
                    }

                    if(empty($student_data['email'])){
                        $status = false;
                    }

                    if(empty($student_data['contact'])){
                        $status = false;
                    }

                    return $status;


                };
                //student info array
                $student_info           = [

                        'id'            =>'',
                        'name'          =>'Mustafiz',
                        'email'         =>'mustafiz@gmail.com',
                        'contact'       =>'0170000000'
                ];
                
                //student info response
                $respons    =  cheak_student_data($student_info);

                if($respons){
                    save_student_info($student_info);
                }else{
                    show_data_error();
                }

                


            ?>

        </div>
    </div>
</main>




<?php 
    include 'footer.php';
?>