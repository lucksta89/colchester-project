<?php
include "db.php";

 if(isset($_POST['submit'])){
$firstname = $_POST['first-name']; // so this is where the $firstname variable is declared and look
$lastname = $_POST['last-name'];
$email = $_POST['email'];
$location = $_POST['location']; 
$message = $_POST['message']; 

echo $firstname, $lastname, $email, $location, $message;
 
$query = "INSERT INTO form (id, firstname, lastname, email, location, message) VALUES ('', '$firstname', '$lastname', '$email', '$location', '$message')";
      $result = mysqli_query($connection, $query);

 }
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="test.css">
    <link rel="shortcut icon" href="building.svg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="test2.css">
    <title>article</title>
</head>
<body>

<ul class="nav nav-tabs bg-dark">
    <li class="nav-item">
        <a class="nav-link active" href="index.php">Home</a>
    </li>
    <a href="index.php"><li id="title2"><span>welcome</span><span1>2</span1><span2>colchester</span2></a>
    </li></a>
    <li div class="input-group">
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
            aria-describedby="search-addon" />
        <button type="button" class="btn btn-outline-light">search</button>
        </div></li>
</ul>
        <hr>
        <div class="sub-menu">
            <li><a href="things-to-do.html">things to-do</a></li>
            <li><a href="colchester-zoo.html">colchester zoo</a></li>
            <li><a href="newsletter.html">News</a></li>
            <li><a href="academy_cinema.html">colchester cinema</a></li>
            <li><a href="article.php">reviews</a>

            <div class="dropdown">
            <li><a href="accommodation.html">Accommodation</a></li>
                <div class="dropdown-content">
                <li><a href="">#</a>
                <li><a href="">#</a>
                <li><a href="">#<a>
                <li><a href="">#</a>
                <li><a href="">#</a>
                <li><a href="">#</a>
                <li><a href="">#</a>
            </div>
        </div>
    <hr>
          

    
<div class="jumbotron jumbotron-fluid">
<div class="container">
<h1 class="display-4">Enter you information here!.    
<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' fill='currentColor' class='bi bi-info-square-fill' viewBox='0 0 16 16'>
<path d='M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z'/>
</svg>
</h1>
<hr>
    <p class="lead">Feel free to let us know how your visit at colchester was and you have any recommendations
        or idea's </p>
</div>
</div>



<div class="form" style="width:50%;margin-left:25%;">
         <form action="article.php" method="post">
      
     
      

         <label id="first-name">First name:</label>
         <input type="text" name="first-name" placeholder="Enter name here!"><br>

         <label id="last-name">Last name:</label>
         <input type="text" name="last-name" placeholder="Enter name here!"><br>

         <label id="email">Email:</label>
         <input type="text" name="email" placeholder="Enter name here!"><br>

         <label id="location">Where did you stay?</label>
         <select name="location">
             <option value="england">England</option>
             <option value="america">America</option>
             <option value="france">France</option>
             <option value="germany">Germany</option>
             <option value="poland">Poland</option>
         </select>

        <br> <label id="message">Message:</label> <br>
         <textarea rows="5" cols="30" name="message" placeholder="Enter message here!"></textarea><br>
        
         <input type="submit" value="submit" name="submit">
        </form><br>
    
     </div>

     <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Review and comment section.</h1>

  </div>
</div>



<!------------ articles----------->

   <?php
   $query = "SELECT * FROM form";
$result = mysqli_query($connection, $query);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$email = $row['email'];
$location = $row['location'];
$message = $row['message'];






echo "

    <div class='article1'> 
    <p style='font-size:1.5em;'>Review/Comment 
    </p><br>

    <p style='color:black;border:1px lightgrey solid;
    height:60px;width:50%;
    font-size:1.2em;padding:10px;'>
    <strong>Your name: </strong>$firstname
    $lastname<br></p>

    <p style='color:black;border:1px lightgrey solid;height:60px;
    width:50%;font-size:1.2em;padding:10px;'>
    <strong>Your email: </strong>$email <br></p>

    <p style='color:black;border:1px lightgrey solid;height:60px;width:50%;font-size:1.2em;padding:10px'>
    <strong>Your location: </strong>$location<br> </p>

    <p style='color:black;border:1px lightgrey solid;height:255px;
    width:50%;
    font-size:1.2em;padding:10px;float:right;margin-top:-250px;
    word-wrap: break-word;'>
    <strong>Your message:</strong><br>$message</div></p>

";

}}

?>
 <!------------end articles----------->




         <!------------ FORM ----------->

    
     <footer> &copy;colchester-2021</footer> 
     
  <!------------ END FORM ----------->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  

    </body>
    </html>
  

