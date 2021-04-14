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
if(!$result) {
    
    die("QUERY FAILED". mysqli_error($connection));
}

}
 


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>article</title>
</head>
<body>
    

	<div class="navbar">
    <a href="index-holiday.html">Home</a>
		<a href="newfile.html">Holidays</a>

		<div class="dropdown">
			<button class="dropbtn">Hotels</a>
				<i class="fa fa-caret-down"></i>
			</button>


			<div class="dropdown-content">
				<a href="Hotels.html">All Hotels</a>
				<a href="africa2.html">All Africa hotels</a>
				<a href="newyork2.html">All Miami hotels</a>
				<a href="london2.html">All london hotels</a>
				<a href="paris2.html">All Paris hotels</a>

			</div>
		</div>


		<div class="dropdown">
			<button class="dropbtn">Flights</a>
				<i class="fa fa-caret-down"></i>
			</button>


			<div class="dropdown-content">
				<a href="flights.html">All flights</a>

			</div>
		</div>

		<div class="contact">
			<a href="contact form.html">Contact us</a>
		</div>

	</div>





      <!------------ articles----------->
   
      <main>
    <div class="article1">
        <h1 id="title">welcome</h1>
        <p id="text">on todays article we will be discussing<br> how every day take 24 hours
            and not 23 hours
        </p>
        <img src="images/beach.jpg" alt="beach" width="50%" height="50%">
        <footer>&copy dluck</footer>
     </div>


     <div class="article2">
         <h1 id="title2">good morning</h1>
         <p id="text2">in todays article we are going to discuss<br> why the sun sets and the
             moon rises yet the stars are always visible!
        </p>
        <img src="images/beach1.jpg" alt="beach2" width="50%" height="50%" > 
        <footer>&copy daniel luck</footer>
     </div>


     <div class="article3">
         <h1 id="title3">good afternoon</h1>
         <p id="text3">in this afternoons article we are going to discuss the effects of not<br>
        leaving the house on a regular basis
    </p>
        <img src="images/beach2.jpg" alt="beach3" width="50%" height="50%">
        <footer>&copy mr luck</footer>
     </div>


     <div class="article4">
         <h1 id="title4">good evening</h1>
         <p id="text4">now lets discuss what the problem between the rich and poor are,<br> 
            well every one need money ...(we all got to eat!)
    </p>
    <img src="images/beach3.jpg" alt="beach4" width="50%" height="50%">
    <footer>&copy master luck</footer>
     </div>


     <div class="article5">
         <h1 id="title5">good night</h1>
         <p id="text5">on tonights articles we will discuss the reason conspiracy behind <br>
        ufo's and alaska's mystery's</p>
         <img src="images/beachpana.jpg" alt="beachpana" width="50%" height="50%">
         <footer>&copy luck</footer>
     </div>


     <div class="article6">
         <h1 id="title6">good bye</h1>
         <p id="text6">to end the night we are going to discuss the event in world war one<br>
            and world war two and the death count in each country!
         </p>
         <img src="images/beachpana2.jpg" alt="beachpana2" width="50%" height="50%">
         <footer>&copy luck family</footer>
     </div>


     <div class="article7">
         <h1 id="title7">hello again!</h1>
         <p id="text7">once again we are here to talk about the events of the ongoing<br>
        battle between us and corona </p>
        <img src="images/africapic2.jpg" alt="afrciapic" width="50%" height="50%">
        <footer>&copy the lucky group</footer>
     </div>

       <!------------end articles----------->

         <!------------ FORM ----------->

     <div class="review">
         <form action="article.php" method="post">
         <h1 id="contactform">write a review here!</h1>

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
        <footer>&copy lucky corps!</footer>
     </div>

     </main>
     
  <!------------ END FORM ----------->





    </body>
    </html>
  

