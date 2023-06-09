<?php 
session_start();
include './partials/_signup.php';
include './partials/_login.php';
include './partials/_header.php';


// echo '<!doctype html>
// <html lang="en">
//   <head>
//   <meta http-equiv="refresh" content="900;url=logout.php" />
//     <meta charset="utf-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1">
//     <title>Bootstrap demo</title>
//     <link rel="stylesheet" href="style.css">
//     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
//   </head>
//   <body>
//   <nav class="navbar navbar-expand-lg navbar-dark  bg-dark mb-1 p-2">
//   <div class="container-fluid">
//     <a class="navbar-brand" href="#">Navbar</a>
//     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
//       <span class="navbar-toggler-icon"></span>
//     </button>
//     <div class="collapse navbar-collapse headerstyle" id="navbarSupportedContent">
//       <ul class="navbar-nav  mb-2 mb-lg-0 px-3">';

//       // mb-2 mb-lg-0 px-3
    
//     if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
//      echo '<li class="nav-item ">
//           <a class="nav-link active " aria-current="page" href="enquirylist.php">Enquiry List</a>
//         </li>
//         <li class="nav-item ">
      
//         <a class="nav-link active p-0 " aria-current="page" href="#">  <small>Welcome</small><br>'. substr($_SESSION['useremail'],0,10) .'</a>
//       </li>
      
//       <li class="nav-item ">
       
//       <a class="nav-link active"  aria-current="page" href="./index.php">Home</a>
//     </li
     
//         <li class="nav-item ">
       
//       <a class="nav-link active"  aria-current="page" href="enquiry.php">Enquiry</a>
//     </li>;
//     <li class="nav-item ">
       
//     <a class="nav-link active"  aria-current="page" href="logout.php">Signout</a>
//   </li>';
//     }
//     else{
//       echo '<li class="nav-item ">
//       <a class="nav-link active " aria-current="page" href="#">Home</a>
//     </li>
   
//     <li class="nav-item ">
//     <a class="nav-link active " data-bs-toggle="modal" data-bs-target="#loginpage"  aria-current="page" href="#">login</a>
//   </li>
//   <li class="nav-item ">
//   <a class="nav-link active" data-bs-toggle="modal" data-bs-target="#exampleModal"  aria-current="page" href="#">Signup</a>
// </li>';
//     }
     

     
//        echo  '</ul>
      
//     </div>
//   </div>';
// echo '</nav>
//     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
//     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
//   </body>

// </html>';
?>
<?php 
// session_start();

//    echo '<nav class="  navbar navbar-expand-lg navbar-dark bg-dark mb-1 p-0">
//    <a class="navbar-brand" href="#">Navbar</a>
//    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
//      <span class="navbar-toggler-icon"></span>
//    </button>
 
//    <div class="collapse navbar-collapse mx-4" " id="navbarSupportedContent">
//      <ul class="navbar-nav mr-auto">
//        <li class="nav-item active">
//          <a class="nav-link active" href="index.php">Home</a>
//        </li>
//        <li class="nav-item">
//          <a class="nav-link" href="#">Link</a>
//        </li>
//        <li class="nav-item dropdown">
//          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
//            Dropdown
//          </a>
//          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
//            <a class="dropdown-item" href="#">Action</a>
//            <a class="dropdown-item" href="#">Another action</a>
//            <div class="dropdown-divider"></div>
//            <a class="dropdown-item" href="#">Something else here</a>
//          </div>
//        </li>
//        <li class="nav-item">
//          <a class="nav-link disabled" href="#">Disabled</a>
//        </li>
//      </ul>';
//      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
//         echo '<form class="d-flex" role="search">
//           <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
//           <button class="btn btn-outline-success" type="submit">Search</button>
//         </form>
//         <div class="flex mx-2 mt-3 mb-2 text-light  my-1">
//         Welcome <br>'.$_SESSION['useremail'].'</div>
//         <div> <a href="logout.php" class="btn btn-primary  ">Logout </a> </div>';
    
//        } 
//        else{
//         echo '<form class="d-flex" role="search">
//           <input class="form-control me-2 my-2" style="height:2.5rem!important;" type="search" placeholder="Search" aria-label="Search">
//           <button class="btn btn-outline-success my-2 "style="height:2.5rem!important;" type="submit">Search</button>
//         </form>
//         <div class="d-block">
//            <div class="btn btn-primary  mx-1 " data-toggle="modal" data-target="#login">Login</div>
//            <div class="btn btn-primary mr-2 " data-toggle="modal" data-target="#signup">Signup</div>;
//            </div>';
//        }    
       
//  echo '</div></nav>'; -->
  
?>


