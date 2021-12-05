
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
          <a class="nav-link text-light dropdown-toggle"href="accommodation.php" id="navbarDropdown" 
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


                
    <!-- header -->
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Colchester zoo</h1>
          <p class="lead">come and see all the great shows we have on!</p>
        </div>
      </div>



    <!-- slideshow -->

<div class="zoo-slideshow">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./Img/zoo1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./Img/zooo2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./Img/zoo3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
</div>


    
    <div class="zoo-text-box">
        <div class="card">
            <div class="card-header">
              <h5>Feeding the animal's</h5> 
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-5 mg" >
                <p>We offer a chance to feed the animal's during your time here (including tigers, birds, seals wolfs
                    and many more!)</p><br>
                <footer class="blockquote-footer">Zoo staff <cite title="Source Title">Colchester zoo</cite></footer>
              </blockquote>
            </div>
          </div>


        
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Bird feeding times</h5>
                  <p class="card-text">bird seed will be made available in the show.

                  </p>
                  <span class="badge badge-secondary bg-danger">10:00</span></h1>
                  <span class="badge badge-secondary bg-danger">15:00</span></h1>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Seal feeding times</h5>
                  <p class="card-text">food will be made available in the show..</p>
                  <span class="badge badge-secondary bg-danger">12:00</span></h1>
                  <span class="badge badge-secondary bg-danger">17:00</span></h1>
                </div>
              </div>
            </div>
          </div>




<!-- map and address-->
<div class="address">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Colchester map!</h5>
          <p class="card-text">take a look to see you route!.</p>
      
          <iframe loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19710.304595081383!2d0.817105466093796!3d51.864825745055576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9033920595745%3A0x38e6d9bc5d6dfdba!2sColchester+Zoo!5e0!3m2!1sen!2suk!4v1549898716311" 
          allowfullscreen="" width="100%" height="450"></iframe>
      </div>
</div>  </div>

      <footer>
        &copy;Colchester-2021 
    </footer>



          <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

