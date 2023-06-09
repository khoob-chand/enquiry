<?php 

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
  <form action="login.php" method="POST" class="container enquiry mt-4 mb-4 p-3">
        <div class="mb-3">
        <h4>Login </h4>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address:</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="mobilex" class="form-label">Password</label>
          <input type="password" name="pass" class="form-control" id="mobilex">
        </div>
    
       
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>';

?>