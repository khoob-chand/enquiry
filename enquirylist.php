<?php
$chec=false;
echo '<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>';
  include 'nav.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $count=1;
      include 'conn.php';
     
      $showerror=false;
      if (empty($_POST["uname"])) {
        $nameErr = "Name is required";
      } else {
        $uname=$_POST['uname'];
      }
      if (empty($_POST["uemail"])) {
        $emailErr = "Email is required";
      } else {
        $uemail=$_POST['uemail'];
      }
      if (empty($_POST["mobile"])) {
        $mobileErr = "Mobile is required";
      } else {
        $mobile=$_POST['mobile'];
      }
      if (empty($_POST["text"])) {
        $textErr = "Text is required";
      } else {
        $text=$_POST['text'];
      }
      
      
    
      
    
     if((!empty($_POST["uname"]) &&!empty($_POST["uemail"]))&&(!empty($_POST["mobile"])&&!empty($_POST["text"]))){
      // echo "cannot Inserted invalid values";
      $sql = "INSERT INTO `enquirylist` (`name`,`email`,`mobile`,`text`,`datetime`) VALUES ('$uname','$uemail','$mobile','$text', current_timestamp())";
    $chec=true;
      $result=mysqli_query($conn,$sql);
      // $numRows = mysqli_num_rows($result);
      $_SESSION['loggedin'] = true;

     }
      
     echo "<script type='text/javascript'>window.top.location='http://localhost/Enquiry/enquiry.php?msg=true';</script>";
    exit();
}

  
include 'conn.php';
  $query="SELECT *FROM enquirylist order by datetime DESC ";
                    
  $result=mysqli_query($conn,$query);
  $rowcount=mysqli_num_rows($result);
//  echo $check;
 if($rowcount==0){
 $check=true;
 echo $check;
 }
  if($rowcount>0){
    $count=1;
  echo '<table class="table table-striped table-bordered container mt-5">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Enquiry</th>
    </tr>
  </thead>
  <tbody>';
  
    while($row=mysqli_fetch_assoc($result)){
      // echo $row['name'];
      
   
    echo '<tr>
      <th scope="row">'.$count.'</th>
      <td>'.$row['name'].'</td>
      <td>'.$row['email'].'</td>
      <td>'.$row['mobile'].'</td>
      <td>'.$row['text'].'</td>
    </tr>';
  
 $count++;
 
   
      

  }
  
  
 
  echo '</tbody>
  </table>';

  

  }

include "./partials/_footer.php";
    ?>

