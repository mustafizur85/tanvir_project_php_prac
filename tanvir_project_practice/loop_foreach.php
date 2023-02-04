<?php 
    include 'header.php';
?>

<main class="container">

    <div class="row">

        <div class="col-md-6">

            <?php
            // One daimentional Array
                $color = ['#00FFFF','#FF0000','#0000FF','#00008B','#800080','#800080'];//color code url   https://www.computerhope.com/htmcolor.htm
                    
                    echo "<pre>";
                        print_r($color); // Array stucture for use mustbe print_r function  
                    echo "</pre>";

                foreach($color as $key=>$v){
                    
                   echo "Color Element: Key -". $key ." Value - ".$v."<br>";
                  
                }
            ?>

        </div>

        <div class="col-md-6">
                <!-- Dainamic Example foreach(array) -->
            <div id="accordion">

                <?php
                    $color_collps_code = ['#00FFFF','#FF0000','#0000FF','#00008B','#800080'];
                    $sl = 1;
                    foreach($color_collps_code as $key=>$value){
                        

                ?>

                <div class="card">
                    <div class="card-header" style = "background-color:<?php echo $value;?>">
                        <a class="btn" data-bs-toggle="collapse" href="#collapse<?php echo $key?>">
                            Collapsible Group Item# <?php echo $sl++; ?>
                        </a>
                    </div>
                    <div id="collapse<?php echo $key?>" class="collapse<?php echo ($key==0 ? 'show' : '')?>" data-bs-parent="#accordion">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur animi ad totam exercitationem obcaecati molestiae sint ipsam impedit velit! Recusandae et neque ea repellat itaque, laborum omnis ducimus quas hic!
                        </div>
                    </div>
                </div> 



                <?php
                    }
                ?>

                

            </div>
        </div>
    </div>
</main>

<?php 
    include 'footer.php';
?>