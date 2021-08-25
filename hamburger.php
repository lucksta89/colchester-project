<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="test.css">
    <link rel="stylesheet" type="text/css" href="test2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    

<!-- Simulate a smartphone / tablet -->
<div class="mobile-container">

 
  
 <!-- Button trigger modal -->
<a data-bs-toggle="modal" data-bs-target="#staticBackdrop" 
style="cursor:pointer;font-weight:900;background-color:whitesmoke;float:right;margin-right:5%;margin-top:1%;font-size:8px;">
Check Corona Advice
</a>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Colchester has restrictions due to corona</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
   
      DISRUPTED<br>
Animal services<br>
Our Pest Control service is operating; however, bedbug treatments are currently unavailable. Advice can be given on the self-treatment if required.
<br>
Bereavement services<br>
The crematorium and cemetery can hold funerals with up to 60 mourners in the chapel and any reasonable amount at a graveside, providing social distancing measures can be followed.
<br>
A maximum of 6 people may attend an ashes burial or wake.<br>
<br>
The cemetery and Garden of Remembrance will be closed to visitors, except for those who are attending a funeral, attending the scattering or burial of ashes, or visiting the grave or memorial of a loved one.
<br>
The Book of Remembrance, Prayer Room and the crematorium office remain closed to visitors. <br>
<br>
Visitors must follow current guidelines.<br>
Events<br>
Open air events, such as funfairs and markets, can take place and Colchester Amphora Trading Ltd (CATL) is working with operators to facilitate this at various venues. The Colchester Events team is working to enable events at indoor venues, including Charter Hall and Town Hall, to take place from 21 June in line with the Government’s roadmap.
Environmental<br>
You can continue to report environmental and noise concerns. However, the Weekend Noise Service is suspended.
<br>
Aqua Springs<br>
Aqua Springs Spa and a selection of beauty therapy treatments have re-opened, but the saunas, steam room, aromatherapy room and salt inhalation room remain closed. Visitors must book before visiting the spa. 
<br>
Weddings<br>
Weddings can take place at the Town Hall with maximum attendance limited to 15 people. From 17 May, weddings will recommence at Colchester Castle with a maximum attendance of 30 people; the Town Hall will also be working to these numbers, subject to social distancing guidelines.
<br> </div>



      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

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
        <li><a href="accommodation.php">Accommodation</a></li>
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
            right: 0;
            top: -25%;
            margin:0%;
          
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