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
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="test.css">
        <link rel="stylesheet" type="text/css" href="test2.css">
        <link rel="shortcut icon" href="building.svg" type="image/x-icon">
        <title>Welcome to colchester</title>
      </head>
    <body>
   

        <ul class="nav nav-tabs bg-dark">
            <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
            </li>
            <a href="index.html"><li id="title2"><span>welcome</span><span1>2</span1><span2>colchester</span2></a>
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
            <div class="dropdown">
                <li><a href="index-holiday.html">holiday-site</a></li>
                <div class="dropdown-content">
                <li><a href="newfile.html">package holidays</a>
                <li><a href="Hotels.html">all hotels</a>
                <li><a href="flights.html">flights</a>
                <li><a href="africa2.html">africa hotels</a>
                <li><a href="newyork2.html">miami hotels</a>
                <li><a href="london2.html">london hotels</a>
                <li><a href="africa2.html">africa hotels</a>
            </div>
        </div>
    <hr>
          
    
    
    <div class="image">
        <div class="container">
            <img src="Img/town.jpg"alt="picture"class="picture">
                <div class="text">welcome to colchester
                    <img src="Img/award-fill.svg"></div>
                </div>
        </div>
    

        <div id="about"> 
        <div class="card">
            <div class="card-header"style="font-size:2.5em;text-align:left">
                Colchester ruins!
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0"style="font-size:0.9em;margin-top:2%;">
                <p> this is the ruins of colchester 
                Welcome to Colchester! An historic Essex town, Britain's first city and former capital of Roman Britain. Its rich history dates back over 2000 years and is ripe for exploring.
                But it's not all about the past. 21st Century Colchester is a thriving, modern town with first class visitor attractions, including the family favourites Colchester Zoo and Colchester Castle, as well as fantastic places to eat, drink and shop.
                Poised at the gateway to East Anglia with picturesque villages on its doorstep, and only minutes away from the coast, the Colchester area is the perfect destination for a well-deserved short break, day trip or family holiday. 
                </p>
              </blockquote>
            </div>
          </div>

          <div class="card-body">
            <h5 class="card-title" id="table" style="font-size:2.5em">Tour times!</h5>

      <table id="table">
          <tr>
              <th>monday</th>
              <th>tuesday</th>
              <th>wednesday</th>
              <th>thursday</th>
              <th>friday</th>
              <th>saturday</th>
              <th>sunday</th>
          </tr>
          <tr>
              <th>08:00</th>
              <td>tour</td>
              <td>tour</td>
              <td>tour</td>
              <td>tour</td>
              <td>tour</td>
              <td>tour</td>
          </tr>               
              <tr>
              <th>10:00</th>
              <td>tour</td>
              <td>tour</td>
              <td>tour</td>
              <td>tour</td>
              <td>tour</td>
              <td>tour</td>
          </tr>
          <tr>
              <th>12:00</th>
              <td>tour</td>
              <td>tour</td>
              <td>tour</td>
              <td>tour</td>
              <td>tour</td>
              <td>tour</td>
          </tr>
          <tr>
              <th>15:00</th>
              <td>tour</td>
              <td>tour</td>
              <td>tour</td>
              <td>tour</td>
              <td>tour</td>
              <td>tour</td>
          </tr>
      </table>  
  </div> 
 </div>
</div>
          <div class="card text-center">
            <div class="card-header">
             <img src="Img/ruins.jpg" class="ruins">

             <div class="card-group"style="position: relative;bottom:300px;opacity: 0.7;">
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

        <div class="card" style="width:80%;margin:10%">
            <img src="Img/highwoods6.jfif" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text"style="font-size:0.9em">
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
    
          <div class="card border m-lg-5" style="max-width: 100%;font-size:1.5em;">
            <div class="card-header bg-transparent">Take a virtual tour of colchester</div>
            <div class="card-body text-success">
              <p class="card-text">
                   <iframe width="100%" height="444" src="https://www.youtube.com/embed/zCvYlwcQQtY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </p>
            </div>
          </div>
         

        <div id="accommodation">
            <div class="banner">
                Places to stay... 
                <img src="Img/building.svg">
            </div>
        </div>


        

        <div class="hotels">
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


    <div class="hotel-1">
        <a href="Hotels.html"><img src="Img/hotel1.jfif"></a>
                <div class="hotel-title">    
                    Wivenhoe House Hotel<hr>               
                    <div class="price">
                        Price
                        £47.50<br>
                        per person per night<br>
                        to £165.00<br>
                        per room per night, for bed & breakfast
                    </div>
                    <div class="hotel-info">
                        <p>
                            Colchester's four-star luxury hotel once painted
                            by Constable. Surrounded by glorious parkland, 
                            Wivenhoe House combines the romance and charm of 
                            an eighteenth century Grade II listed house with 
                            all the comforts of contemporary living.
                        </p>
                    </div>
                  </div>     
                  <div class="hotel-link">
                    <a href="Hotels.html">Take a look</a></div>
            
    </div>



    <div class="hotel-1">
        <a href="Hotels.html"><img src="Img/hotel2.jfif"></a>
            <div class="hotel-title">    
                The North Hill Hotel<hr>               
                    <div class="price">
                        Price
                        £64.50<br>
                        per person per night<br>
                        to £119.50<br>
                        per room per night, for bed & breakfast
                    </div>
                <div class="hotel-info">
                    <p>
                        A modern town centre hotel in a Georgian setting.
                        Rooms have tea & coffee making facilities,
                        free WI-FI, DVD & freeview TV. Our restaurant,
                        The Green Room, offers a traditional British menu with a 
                        twist utilising the best of local produde.
                    </p>
                </div>
            </div>
            <div class="hotel-link">
                <a href="Hotels.html">Take a look</a></div>
        
    </div>
 


    
    <div class="contact">Contact us
        <img src="Img/telephone-fill.svg">
    </div>
    
  

    <div class="address">
        <address>
            <h1>
                Visit us at: www.colchester.co.uk<br>
                colchester@mail.co.uk<br>
                colchester, 1 high street<br>
                U.K.
            </h1>
        </address>

  
        <iframe loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19710.304595081383!2d0.817105466093796!3d51.864825745055576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9033920595745%3A0x38e6d9bc5d6dfdba!2sColchester+Zoo!5e0!3m2!1sen!2suk!4v1549898716311" 
            allowfullscreen="" width="80%" height="450px">
        </iframe>
   

   
<div class="form-title">
    <h1>If you would like to contact us, please leave us an email below!</h1>
         <form action="" method="post">
            first name:<input name="name" type="text" placeholder="enter here"> <br>
            last name:<input name="last name" type="text" placeholder="enter here" > <br>
            your email<input name="email" type="text" placeholder="enter here"><br>
            Message:<br> <textarea rows="5" cols="30" name="message"></textarea> <br>
        <input type="submit" name="submit" value="submit"><br>
        </form>
<footer>
    &copy;colchester-2021
</footer>
     </div>              
    </div>
    

</div>
    </body>
</html>


