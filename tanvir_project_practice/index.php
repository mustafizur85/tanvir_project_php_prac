<?php 
    include 'header.php';
?>
 <!-- Setion 1 -->
<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
  </div>
</main>

<!-- Setion 2  -->

<main class="container">
  <!-- PHP Code  -->
  <div class="row">
    <div class="col-md-12">
      <?php 
        $name = "Md. Mustafizur Rahman"; //string data type
        $profission = "Teacher";
        $age =152; //intiger data type   
        $martial_status = true; //bolian data type
        $_1254= "Good's"; 
        $aple_prize = 145.50; //flot data type
        $language = [];
        $language[1] ="Php";//array data type
        $language[0] = "C++";
        $language[] = "Python";
        $frameworks = ["Cakephp","Laravel","Codigniter"];//multiple array data type
        $empty = "";
        $null = NULL;
        $database_data = "resource type data";
        
        
        echo "Name: ".$name."<br>"; // concating first way
        echo "Profission: ".$profission."<br>";
        echo "Age: $age <br>";// concating another way
        echo "Language: ".$language[2]."<br>";
        echo "Framework: $frameworks[1] <br>";

        echo "Support Mail: ".SUPPORTEMAIL."<br>";




        
        
        
       
        
      ?>
    </div>
  </div>


</main>


<?php 
    include 'footer.php';
?>

    
  </body>
</html>
