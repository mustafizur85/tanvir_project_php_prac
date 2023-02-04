<?php 
    include 'header.php';
?>

<main class="container">
   <div class="row">
    <div class="col-md-6">
        <?php


            //Note: single for Loop
            
            for($i = 1; $i<=10; $i++){
                //echo "Loop - ".$i."<br>";
            }



            //Note: Nested for Loop
            for($i = 1; $i<=10; $i++){
                //outside loop
                echo "Outside Loop - ".$i."<br>";
                for($j = 1; $j<=3; $j++){
                    //inner loop
                    echo "Inner Loop - ".$j."<br>"; 
                }
            }
        ?>
    </div>
    
    <!-- For Loop Dynamic Example -->
    <div class="col-md-6">        
        
                <?php                 
                    $month = date('F');
                    $month_day = date('t');                            
                                        
                ?>

            <table class="table table-bordered table-striped">
              

                <thead>
                    <tr>
                        <th colspan="2" style = 'text-align:center';><?php echo $month ?> Report</th>
                    </tr>
                    <tr>
                        <th>Serial No</th>
                        <th>Month Day</th>
                    </tr>
                </thead>
                

                <tbody>

                    <?php 
                        for($day = 1; $day<=$month_day; $day++){
                    ?>

                        <tr>
                            <td><?php echo $day;?></td>
                            <td><?php echo date('Y-m-').$day;?></td>                        
                        </tr> 


                    <?php    
                        }
                    ?>                 
                   
                </tbody>
                
            </table>        
        </div>
   </div> 
   
</main>


<?php 
    include 'footer.php';
?>