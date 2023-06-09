<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $cpass=$_POST['cpass'];
  include 'conn.php';
  $existsql="SELECT *FROM signup WHERE email='$email'";
  $result=mysqli_query($conn,$existsql);
  $numRows = mysqli_num_rows($result);

  if($numRows>0){
    echo '<div class=" alert alert-danger" role="alert">
    incorrect Password Please Login In with Correct password!
    
  </div>
  <h5 ><br><a href="./index.php">Click Here to Login Again </a></h5>';
  }
  
  else if($pass==$cpass){
         
    $hash = password_hash($pass,PASSWORD_DEFAULT);
      $sql = "INSERT INTO `signup` (`name`,`email`,`password`,`date`) VALUES ('$name','$email','$hash', current_timestamp())";
      $success=mysqli_query($conn,$sql);
      
     
      if($success){
      
        echo "inserted ";
        $showAlert = true;
        header("Location:./index.php?signupsuccess=true");
        
    }
}
else{
    header("Location:./index.php?signupsuccess=false");
}

}

?>