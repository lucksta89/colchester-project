<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    

<!-- Simulate a smartphone / tablet -->
<div class="mobile-container">


   <!-- Top Navigation Menu -->
   <div class="topnav dropdown-content">
      <div id="myLinks">
      <ul>
         <li>   <a href="things-to-do.php">things to-do</a><br></li><hr>
         <li> <a href="colchester-zoo.php">colchester zoo</a><br></li><hr>
         <li> <a href="newsletter.php">News</a><br></li><hr>
                  <li> <a href="academy_cinema.php">colchester cinema</a><br></li><hr>
         <li> <a href="article.php">reviews</a></br></li><hr>
            


   <div class="dropdown">   
        <li><button><a href="accommodation.php">Accommodation</a></button></li>
          <div class="dropdown-content">
          <ul>
            <li><a href="accommodation.php">Greyfriars</a></li><hr>
            <li><a href="accommodation.php">Best Western Marks Tey Hotel</a></li><hr>
            <li><a href="accommodation.php">Dragonfly Hotel Colchester</a></li><hr>
            <li><a href="accommodation.php">Five Lakes Resort</a></li><hr>
            <li><a href="accommodation.php">Best Western The Rose </a></li><hr>
            <li><a href="accommodation.php">Brook Red Lion Hotel</a></li><hr>
            <li><a href="accommodation.php">Maison Talbooth, Colchester</a></li><hr>
            <li><a href="accommodation.php">Milsoms, Colchester</a></li><hr>
            <li><a href="accommodation.php">Hotel Wivenhoe House, Colchester</a></li><hr>
            <li><a href="accommodation.php">Hotel white heart, Colchester</a></li><hr>
            <li><a href="accommodation.php">Old Thatch Bambers Green.</a></li><hr>
            <li><a href="accommodation.php">Chudleigh Hotel.</a></li><hr>
            <li><a href="accommodation.php">Downham Hall.</a></li><hr>
            <li><a href="accommodation.php">Pages Hotel & Guesthouse.</a></li><hr>
          </ul>  
        </div>
    </div>
        </ul>
      </div>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
    </div>

    
    <style>@media only screen and (max-width: 600px){


        .dropdown-content{

          position: relative;
          z-index: 99;
          color:black;
        text-align: left;
  
   
        }
        .mobile-container{
        display:unset;
        text-align: center;
        position: relative;
        text-transform: uppercase;

        

        }
        #myLinks a{
            color:black;
            margin: 2%;
            margin-left: 5%;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
          }
          
          .mobile-container {
            max-width: 480px;
            margin: auto;
            background-color: #555;
            height: 500px;
            color: black;
            border-radius: 10px;
            margin: 5%;
          }
          
    
          .topnav {
            overflow: hidden;
            background-color: whitesmoke;
        
            position: relative;
          
          }
          
          .topnav #myLinks {
            display: none;
            margin-left: -15%;
          }
          
          .topnav{
            background-color: whitesmoke;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            display: block;
           box-shadow: none;
          }
     
          .topnav a.icon {
            background-color: whitesmoke;
            display: block;
            width:100px;
            position: absolute;
            right: 4%;
            top: -25%;
            margin:1.5%;
            padding:0%;
            padding-left:2%;
            border:black 1px solid;
          
          }
          
          .topnav a:hover {
            background-color: #ddd;
            color: #333;
          }
          
          .active {
            color: black;
          }
        
        #hrr{
            display: none;
        }
        
        #hr{
            display: none;
        }
        
        .modal-body{
            color:black;
        }
        hr{
          color:#555;
          margin: 0 0;
          padding:0 0;
        }
        }
        </style>


</body>
</html>