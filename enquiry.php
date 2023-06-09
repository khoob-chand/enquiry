
<?php
include 'nav.php';

$count=1;
$check=false;
$nameErr="" ;
$emailErr="";
$mobileErr="";
$textErr=""; 

// echo '<!doctype html>
// <html lang="en">
//   <head>
//     <meta charset="utf-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1">
//     <title>Bootstrap demo</title>
//     <link rel="stylesheet" href="style.css">
//     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
//   </head>
//   <body>';
  

// session_start();

// include 'nav.php';

include 'conn.php';

 if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
    echo '<div class="alert alert-success" role="alert">
    Sign up Successfully ! you can  login in now 
  </div>';
}
// echo '<!doctype html>
// <html lang="en">
//   <head>
//     <meta charset="utf-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1">
//     <title>Bootstrap demo</title>
//     <link rel="stylesheet" href="style.css">
//     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
//   </head>
//   <body>';
  
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==false){
    echo '<h4 class="container mt-3 mb-3"><a data-bs-toggle="modal" data-bs-target="#loginpage"  href="">Kindly Login To Post Your EnQuiry</a></h4>';
  }
      
      
    
      
    


 if  (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  echo '<div class="alert alert-success container mt-4 " role="alert">
    Now you Are Logged In Sucessfully !!!
  </div>'; 
  }
  if  (isset($_GET['msg']) && $_GET['msg']==true){
    echo '<div class="alert alert-success container mt-4 " role="alert">
      Inserted   Sucessfully in the Database !!!
    </div>'; 
    }
 

  echo '<div class="end"><form  action="enquirylist.php" method="POST" class="container enquiry mt-4 mb-4 p-3">
        <div class="mb-3">
          <label for="exampleInputname" class="form-label">Your Name</label>
          <input type="text" name="uname" class="form-control" id="exampleInputname" aria-describedby="emailHelp" required >
          <small class="small">'.$nameErr.'</small>
        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="uemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
        <small class="small">'.$emailErr.'</small>
      </div>
        <div class="mb-3">
          <label for="exampleInputPassword" class="form-label">Mobile No:</label>
          <input type="text" class="form-control" name="mobile" id="exampleInputPassword" value="" pattern="[0-9]{10}" title="Please match the required format." required>
          <small class="small">'.$mobileErr.'</small>
        </div>
        <div class="mb-3">
        <div class="form-floating">
        <textarea rows="30" name ="text" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" required></textarea>
        <label for="floatingTextarea">Post Your Enquiry</label>
        <small class="small">'.$textErr.'</small>
      </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form></div>';

// }

include "./partials/_footer.php";

// ?>

 <?php echo '<style>';  include 'style.css';echo '</style>';?>



