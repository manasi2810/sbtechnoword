<?php
include('database.php');
if(isset($_POST['create'])){
      $msg=insert_data($connection);
}
// insert query
function insert_data($connection){
    
    $name= ($_POST['name']);
    $email=($_POST['email']);
    $subject =($_POST['subject']);
    $message = ($_POST['message']);
    
      $query="INSERT INTO contact (name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
      $exec= mysqli_query($connection,$query);
     
      if($exec){
        $msg="Thanks!Message has been sent successfully.";
        return $msg;
      }
      else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
    }
}
// convert illegal input to legal input
// function legal_input($value) {
//   $value = trim($value);
//   $value = stripslashes($value);
//   $value = htmlspecialchars($value);
//   return $value;
// }

?>