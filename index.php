<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['name'])) {
        if (isset($_POST['email'])) {
            if (isset($_POST['message'])) {


                $name = $_POST['name'];
                $visitor_email = $_POST['email'];
                $message = $_POST['message'];

                $email_from = "dans website";
                $email_subject = "new form submission";
                
                $to = 'dan1luck@msn.com';

                $headers = 'from: $email_from \r\n';

                $messagefinal = " name entered: '.$name.' email entered: '.$visitor_email.' and they said '.$message.'";

                if (mail($to, $email_subject, $messagefinal, $headers)) {
                    echo " EMAIL SENT $to";
                } else {
                    echo "failure";
                }
            }
        }
    }
}
?>



<!doctype html>
<html lang="en">
    <head>       
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="main.js" defer></script>
        <link rel="stylesheet" type="text/css" href="main.css">
        <title>Welcome to Colchester</title>
      </head>
    <body>


    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"> <a class="nav-link text-light" href="things-to-do.php">things to-do</a></li>
        <li class="nav-item"> <a class="nav-link text-light" href="colchester-zoo.php">colchester zoo</a></li>
        <li class="nav-item"> <a class="nav-link text-light" href="newsletter.php">News</a></li>
        <li class="nav-item"> <a class="nav-link text-light" href="academy_cinema.php">colchester cinema</a></li>
        <li class="nav-item"> <a class="nav-link text-light"  href="article.php">reviews</a></li>

        <li class="nav-item dropdown">
          <a class="nav-link text-light dropdown-toggle" href="accommodation.php" id="navbarDropdown" 
          role="button" data-bs-toggle="dropdown" aria-expanded="false">
            accommodation
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
  <li><a class="dropdown-item" href="accommodation.php">Greyfriars</a></li><hr>
                    <li><a class="dropdown-item" href="accommodation.php">Best Western Marks Tey Hotel</a></li><hr>
                    <li><a class="dropdown-item" href="accommodation.php">Dragonfly Hotel Colchester</a></li><hr>
                    <li><a class="dropdown-item" href="accommodation.php">Five Lakes Resort</a></li><hr>
                    <li><a class="dropdown-item" href="accommodation.php">Best Western The Rose </a></li><hr>
                    <li><a class="dropdown-item" href="accommodation.php">Brook Red Lion Hotel</a></li><hr>
                    <li><a class="dropdown-item" href="accommodation.php">Maison Talbooth, Colchester</a></li><hr>
                    <li><a class="dropdown-item" href="accommodation.php">Milsoms, Colchester</a></li><hr>
                    <li><a class="dropdown-item" href="accommodation.php">Hotel Wivenhoe House, Colchester</a></li><hr>
                    <li><a class="dropdown-item" href="accommodation.php">Hotel white heart, Colchester</a></li><hr>
                    <li><a class="dropdown-item" href="accommodation.php">Old Thatch Bambers Green.</a></li><hr>
                    <li><a class="dropdown-item" href="accommodation.php">Chudleigh Hotel.</a></li><hr>
                    <li><a class="dropdown-item" href="accommodation.php">Downham Hall.</a></li><hr>
                    <li><a class="dropdown-item" href="accommodation.php">Pages Hotel & Guesthouse.</a></li><hr>
                </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


    <div class="image">
            <div class="text"">Welcome To Colchester<br/>
            <hr id="hr-title">
            <img src="Img/award-fill.svg">
            Award winning town
            <img src="Img/award-fill.svg">
            <img src="Img/town.jpg"alt="picture" class="image-pic">
    </div>
    



    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h3 class="display-12">Colchester Ruins!</h3>
    <p> this is the ruins of colchester 
    Welcome to Colchester! An historic Essex town, Britain's first city and former capital of Roman Britain. Its rich history dates back over 2000 years and is ripe for exploring.
    But it's not all about the past. 21st Century Colchester is a thriving, modern town with first class visitor attractions, including the family favourites Colchester Zoo and Colchester Castle, as well as fantastic places to eat, drink and shop.
    Poised at the gateway to East Anglia with picturesque villages on its doorstep, and only minutes away from the coast, the Colchester area is the perfect destination for a well-deserved short break, day trip or family holiday. 
    </p>
  </div>
</div>  
     
      
      <div class="group">
            <div class="card-header">
             <img src="Img/ruins.jpg" class="ruins">

             <div class="card-group">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Roman Church</h5>
                    <p class="card-text">Dating from the 4th century AD the foundations of this church 
                        near the Police Station just off the Maldon Road roundabout is
                         probably the earliest known Christian church in Britain.</p>
                  </div>
            
                </div>
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Colchester Castle Museum</h5>
                    <p class="card-text">The first St Botolph's Church was built where the ruins of
                    St Botolph's Priory Church now stand. It was a Saxon Church with a tower
                    construction similar to that of nearby Holy Trinity, 
                    and stood just outside the town's Roman wall.</p>
                  </div>
            
                </div>
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">St Botolph's Church, Colchester</h5>
                    <p class="card-text">Colchester Castle is the largest 
                        Norman Keep in Europe and houses the town's main museum</p>
                  </div>
              
                </div>
              </div>
            </div>
      </div>
      
     

        <div class="card">
            <img src="Img/highwoods6.jfif" class="card-img-top ruins" alt="...">
            <div class="card-body">
              <p class="card-text">
                Colchester and its surrounding area offers a wide variety of things to do, places to see,  and fantastic attractions to explore.
                In the town centre you'll discover a number of museums and galleries sitting amongst the numerous historic buildings and heritage sites - combine this with the great entertainment and the fantastic shopping experiences on offer in the town and you may want to consider extending your trip!
                Further afield there's more to explore. Colchester Zoo is one of the country's top attractions and you can also discover the area's natural beauty via a great selection of scenic walks and cycling routes throughout the local area. 
                <br><br>Colchester is full of fantastic visitor attractions waiting
                to be discovered. History buffs can explore Roman ruins,
                    Medieval buildings, and Civil War destruction by taking
                    advantage of the town's fantastic local heritage and a 
                    unique history, and Colchester's great arts venues provide 
                    a thriving programme of events, exhibitions and nightlife.
                Head out of the town centre to reconnect with the coast and 
                countryside. From Constable Country to Mersea Island there
                are fantastic wild sites just a short distance from the town
                    centre. Don't forget a trip to Colchester Zoo either to get 
                    up close with the animals and discover it's conservation 
                    programme.</p> </div>
          </div>
    
          <div class="card border m-lg-5">
            <div class="card-header bg-transparent"><h3>Take a virtual tour of colchester</h3></div>
            <div class="card-body text-success">
            <p class="card-text">
                   <iframe width="100%" height="444" src="https://www.youtube.com/embed/zCvYlwcQQtY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </p>
            </div>
          </div>
         


        <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h3 class="display-12">Places to stay...</h3>
            <p class="lead">
            <div class="title">find a place to stay here at colchester!<hr></div>
                <div class="sub-title">
                    Find the best hotels in Colchester,
                    <br>
                    Catering for family holidays,
                    short trips or business stays in and around the town. Stay in a hotel near the town centre within walking distance of the shopping areas, historic sites and attractions. Book a hotel with a spa for the perfect relaxing holiday, or pop out to Aqua Springs for a special spa treatment. Find a family room near the Zoo and fun attractions for the perfect family holiday or plan a few nights in the Dedham Vale, where you will be ideally located to explore Constable Country and the Essex/Suffolk border
                    <br><br>
                    Hotels near the Town centre
                    <br>
                    Colchester town centre hotels offer you the benefits of easy access to all the main shops, 
                    restaurants and attractions for a hassle-free stay.
                </div>
                </div>
                </p>
            </div>
            </div>  


            <div class="card-group">
  <div class="card">
    <img src="Img/hotel1.jfif" class="card-img-top" alt="card1">
    <div class="card-body">
      <h5 class="card-title">Wivenhoe House Hotel</h5><hr>
      <p class="card-text">Price £47.50 PP 1 night.</p><hr>
      <p class="card-text"> Colchester's four-star luxury hotel once painted
                            by Constable. Surrounded by glorious parkland, 
                            Wivenhoe House combines the romance and charm of 
                            an eighteenth century Grade II listed house with 
                            all the comforts of contemporary living.</p><hr>
    <p class="card-text">Bed & breakfast</p><hr>
    <a href="accommodation.php" class="card-link">Take a look </a>
    </div>
  </div>


  <div class="card">
    <img src="Img/hotel2.jfif" class="card-img-top" alt="card2">
    <div class="card-body">
      <h5 class="card-title">Best Western Marks Tey Hotel</h5><hr>
      <p class="card-text">Price £97.50 PP 1 night.</p><hr>
      <p class="card-text">Colchester's four-star luxury hotel once painted
                            by Constable. Surrounded by glorious parkland, 
                            Wivenhoe House combines the romance and charm of 
                            an eighteenth century Grade II listed house with 
                            all the comforts of contemporary living.</p><hr>
                            <p class="card-text">Bed & breakfast</p><hr>
    <a href="accommodation.php" class="card-link">Take a look </a>
    </div>
  </div>
  
  
  <div class="card">
    <img src="Img/hotel1.jfif" class="card-img-top" alt="card3">
    <div class="card-body">
      <h5 class="card-title">The North Hill Hotel</h5><hr>
      <p class="card-text">Price £64.50 PP 1 night.</p><hr>
      <p class="card-text">    A modern town centre hotel in a Georgian setting.
                        Rooms have tea & coffee making facilities,
                        free WI-FI, DVD & freeview TV. Our restaurant,
                        The Green Room, offers a traditional British menu with a 
                        twist utilizing the best of local produce.</p><hr>
                        <p class="card-text">Bed & breakfast</p><hr>
    <a href="accommodation.php" class="card-link">Take a look </a>
    </div>
  </div>
</div>
</div>





    <div class="address">
    <div class="contact">Contact us
        <img src="Img/telephone-fill.svg">
 

        <address>
            <h6>
                Visit us at: www.colchester.co.uk<br>
                colchester@mail.co.uk<br>
                colchester, 1 high street<br>
                U.K.
            </h6>
        </address>
   </div>
  
        <iframe loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19710.304595081383!2d0.817105466093796!3d51.864825745055576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9033920595745%3A0x38e6d9bc5d6dfdba!2sColchester+Zoo!5e0!3m2!1sen!2suk!4v1549898716311" 
            allowfullscreen="" width="50%" height="450px" id="map">
        </iframe>
<hr>
   
<div class="form">
    <h6>If you would like to contact us, please leave us an email below!</h6>
         <form action="" method="post">
            First Name:<input name="name" type="text" placeholder="enter here"> <br>
            Last Name:<input name="last name" type="text" placeholder="enter here" > <br>
            Your Email<input name="email" type="text" placeholder="enter here"><br>
            Message:<br> <textarea rows="5" cols="30" name="message"></textarea> <br>
        <input type="submit" name="submit" value="Submit"><br>
        </form>
     </div>              
    </div>
</div>

<footer>
    &copy;Colchester-2021-Dan.L
</footer>

    </body>
</html>


