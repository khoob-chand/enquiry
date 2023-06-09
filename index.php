
<?php 
// session_start();
$count=1;
$check=false;
$nameErr="" ;
$emailErr="";
$mobileErr="";
$textErr="";
include 'nav.php';

include 'conn.php';

 if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
    echo '<div class="alert alert-success" role="alert">
    Sign up Successfully ! you can  login in now 
  </div>';
}
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
 include 'partials/_admin.php';
 
  
      
      
  


  // echo '<div class="alert alert-success container mt-4 " role="alert">
  //   Now you Are Logged In Sucessfully !!!
  // </div>'; 

 
  // action="'.$_SERVER["REQUEST_URI"].
//   if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
//   echo '<form  action="enquirylist.php"  method="POST" class="container enquiry mt-4 mb-4 p-3">
//         <div class="mb-3">
//           <label for="exampleInputname" class="form-label">Your Name</label>
//           <input type="text" name="uname" class="form-control" id="exampleInputname" aria-describedby="emailHelp">
//           <small class="small">'.$nameErr.'</small>
//         </div>
//         <div class="mb-3">
//         <label for="exampleInputEmail1" class="form-label">Email address</label>
//         <input type="email" name="uemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
//         <small class="small">'.$emailErr.'</small>
//       </div>
//         <div class="mb-3">
//           <label for="exampleInputPassword" class="form-label">Mobile No:</label>
//           <input type="text" class="form-control" name="mobile" id="exampleInputPassword">
//           <small class="small">'.$mobileErr.'</small>
//         </div>
//         <div class="mb-3">
//         <div class="form-floating">
//         <textarea name ="text" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
//         <label for="floatingTextarea">Post Your Enquiry</label>
//         <small class="small">'.$textErr.'</small>
//       </div>
//         </div>

//         <button type="submit" class="btn btn-primary">Submit</button>
//       </form>';


//   }

include "./partials/_footer.php";
// ?>

 

<?php echo '<style>';  include 'style.css';echo '</style>';?>



