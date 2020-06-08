<!DOCTYPE html>
<html>
<head>
    <title></title>
    <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
</head>
<body>
 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Sartha's Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/image1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Mumbai1</h3>
        <p>SEASHORE</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/image2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Mumbai2</h3>
        <p>CST</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/image3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Mumbai3</h3>
        <p>GATEWAY</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5"> 
    <div class="py-5">
        <h3 class="text-center">About Us</h3>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12" class="px-3">
                <img src="images/image5.jpg" class="img-fluid" aboutimage>
                <img src="images/image6.jpg" class="img-fluid" aboutimage>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
            <h3>MUMBAI.</h3>
            <p>Mumbai (formerly called Bombay) is a densely populated city on India’s west coast. A financial center, it's India's largest city. On the Mumbai Harbour waterfront stands the iconic Gateway of India stone arch, built by the British Raj in 1924.</p>
            <a href="about.php" class="btn btn-success">Know more.</a>
            </div>
         </div>
    </div>
</section>
<section class="my-5"> 
    <div class="py-5">
        <h3 class="text-center">Services</h3>
    </div>
    <div class="Container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
                <img class="card-img-top" src="images/image4.jpg" alt="Card image">
                  <div class="card-body">
                  <h4 class="card-title">Beautiful Mumbai</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                  </div>
            </div>      
            </div>

            <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
                <img class="card-img-top" src="images/image4.jpg" alt="Card image">
                  <div class="card-body">
                  <h4 class="card-title">Beautiful Mumbai</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                  </div>
            </div>      
            </div>

            <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
                <img class="card-img-top" src="images/image4.jpg" alt="Card image">
                  <div class="card-body">
                  <h4 class="card-title">Beautiful Mumbai</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                  </div>
            </div>      
            </div>
            
        </div>    
    </div>
</section> 

<section class="my-5"> 
    <div class="py-5">
        <h3 class="text-center">Gallery</h3>
    </div>

    <div class="Container-fluid ">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <img src="images/image1.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <img src="images/image1.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <img src="images/image1.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <img src="images/image1.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <img src="images/image1.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <img src="images/image1.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <img src="images/image1.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <img src="images/image1.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <img src="images/image1.jpg" class="img-fluid pb-3">
            </div>
            
        </div>
    </div>
</section>

<section class="my-5"> 
    <div class="py-5">
        <h3 class="text-center">Contact</h3>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>username</label>
                <input  type="text" name="user" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>email-id</label>
                <input  type="text" name="email" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>mobile no</label>
                <input  type="text" name="mobno" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>comment</label>
                <textarea class="form-control" name="comment"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>
<footer>
    <p class="p-3 bg-dark text-white text-center">@Sartha's-website</p>
</footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>