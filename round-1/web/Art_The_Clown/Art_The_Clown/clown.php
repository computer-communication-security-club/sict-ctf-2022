<html>

<style>
img{
width:100%;
  object-fit:contain;
}
#jumbo{
  padding:0;
}
.row{
  display:flex;
  Justify-content:center;
    
}
</style>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>R U DEAD YET ???</title>
</head>
<body>
<!--   nav -->
  <nav class="navbar navbar-expand-lg navbar-light bg-secondary navbar-dark">
  <a class="navbar-brand" href="#"><img src="https://img.icons8.com/doodle/48/000000/netflix-desktop-app.png"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!--   end nav -->
<!--   main section jumbotron -->
  <div class="jumbotron" id="jumbo">
  <h1 class="display-4"></h1>
 <img src="https://mlmillerwritesdotcom.files.wordpress.com/2018/10/terrifier.jpg"class="img-responsive" alt="">
  <a class="btn btn-primary btn-lg" href="#" role="button">learn more</a>
</div>
<!--   end min sectionm -->
<!--   row of cards setion -->
<div class="row">
  <div class="card" style="width: 18rem;">
  <img src="https://bloody-disgusting.com/wp-content/uploads/2020/07/terrifier-2-trailer.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">A maniacal clown terrorises three young women and anyone else in his way on Hallow'een night.</p>
    <a href="https://www.imdb.com/title/tt4281724/" class="btn btn-primary">See The Trailer</a>
  </div>
</div>
  <div class="card" style="width: 18rem;">
  <img src="https://bloody-disgusting.com/wp-content/uploads/2020/07/terrifier-2-trailer.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">A maniacal clown terrorises three young women and anyone else in his way on Hallow'een night.</p>
    <a href="https://www.imdb.com/title/tt4281724/" class="btn btn-primary">See The Trailer</a>
  </div>
  </div>
   <div class="card" style="width: 18rem;">
  <img src="https://bloody-disgusting.com/wp-content/uploads/2020/07/terrifier-2-trailer.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">A maniacal clown terrorises three young women and anyone else in his way on Hallow'een night.</p>
    <a href="https://www.imdb.com/title/tt4281724/" class="btn btn-primary">See The Trailer</a>
  </div>
<!--      row2 -->
     <div class="class row2">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i.insider.com/59bc143059d82e89358b480f?width=1100&format=jpeg&auto=webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ytimg.com/vi/sSOt0Ks97_E/maxresdefault.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://awesomestuff365.com/wp-content/uploads/2016/10/scary-clown-masks.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
     </div>
<!--   end row section -->
  
  
  
</body>
</html>

<?php
$R_y0u_Afraid = $_GET['terrifier'];
$R_y0u_Afraid = escapeshellcmd($R_y0u_Afraid);
echo ("What is your last word? ");
echo "<br>";
$clown = system('echo '.$R_y0u_Afraid.'| tr abcdefghijklmnopqrstuvwxyz zyxwvutsrqponmlkjihgfedcba');
$R_y0u_Dead_Yet = system('echo '.$clown.'| tr "php" "wtf"');
?>



</html>
