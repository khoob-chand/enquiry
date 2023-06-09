<?php 


// echo '<!doctype html>
// <html lang="en">
//   <head>
//     <meta charset="utf-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1">
//     <title>Bootstrap demo</title>
//     <link rel="stylesheet" href="style.css">
//     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
//   </head>
//   <body>
//   <!-- Button trigger modal -->
  
  
//   <!-- Modal -->
//   <div class="modal fade" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
//     <div class="modal-dialog">
//       <div class="modal-content">
//         <div class="modal-header">
//           <h1 class="modal-title fs-5" id="exampleModalLabel">Signup </h1>
//           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
//         </div>
//         <div class="modal-body">
//         <form action="./signup.php" method="post">
//          <div class="mb-3">
//           <label for="examplename" class="form-label">Your Name:</label>
//           <input type="text" name ="name" class="form-control" id="examplename" aria-describedby="emailHelp">
//         </div>
//         <div class="mb-3">
//           <label for="exampleInputEmail1" class="form-label">Email address:</label>
//           <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
//         </div>
//         <div class="mb-3">
//           <label for="mobilex" class="form-label">Password</label>
//           <input type="password" name="pass" class="form-control" id="mobilex">
//         </div>
//         <div class="mb-3">
//         <div class="mb-3">
//           <label for="mobilex" class="form-label"> Confirm Password</label>
//           <input type="password" name="cpass" class="form-control" id="mobilex">
//         </div>
        
//       </div>
       
//         <button type="submit" name="submit" class="btn btn-primary">Submit</button>
//       </form>
//         </div>
       
//       </div>
//     </div>
//   </div>
// </body>
// <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

// </html>'
echo '<!doctype html>
 <html lang="en">
   <head>
   <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   </head>
   <body>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="./signup.php" method="post">
                <div class="mb-3">
                 <label for="examplename" class="form-label">Your Name:</label>
                 <input type="text" name ="name" class="form-control" id="examplename" aria-describedby="emailHelp">
               </div>
               <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Email address:</label>
                 <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               </div>
               <div class="mb-3">
                 <label for="mobilex" class="form-label">Password</label>
                 <input type="password" name="pass" class="form-control" id="mobilex">
               </div>
               <div class="mb-3">
               <div class="mb-3">
                 <label for="mobilex" class="form-label"> Confirm Password</label>
                 <input type="password" name="cpass" class="form-control" id="mobilex">
               </div>
            
             </div>
           
               <button type="submit" name="submit" class="btn btn-primary">Submit</button>
             </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>'
?>