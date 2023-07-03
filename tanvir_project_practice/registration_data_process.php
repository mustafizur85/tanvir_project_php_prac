
<?php session_start();
  $email = $_POST["email"];
  
  $validation_response = registration_data_validate();

 
  if($validation_response == "success"){

    $database_response =  registration_data_store(); 

    if($database_response){
      $message  = "Your Registration have been successfully completated";
      $status   = "success";
    }else{
      $message  = "Your Registration was not successfull deu to database error!";
      $status   = "error";
    }
  }else{
    $message  = "Please Provide All Required Data";
    $status   = "error";
  }


  $_SESSION["status"] = $status;
  $_SESSION["message"] = $message;


//location redirect function
  header("location:registration.php"); // header একটি buildin function এটি দিয়ে registration.php page এ rederect করা হয়। 

 
  
  function registration_data_validate(){
    
      $email = $_POST["email"];
      $name = $_POST["name"];
      $number = $_POST["number"];
      $date = $_POST["date"];
      $file = $_POST["file"];

      $is_error   = false;
      
      if(empty($email)){
        $is_error = true;
      }

      if(empty($name)){
        $is_error = true;
      }

      if(empty($number)){
        $is_error = true;
      }

      if(empty($date)){
        $is_error = true;
      }

      if(empty($file)){
        $is_error = true;
      }

      if($is_error){
        $status   = "error";
      }else{
        $status   = "success";
      }

      return $status;    

  }


  function registration_data_store(){
        return true;
  }
 

?>