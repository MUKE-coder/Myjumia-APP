<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shopee</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="../slider.css">
    <link rel="stylesheet" href="../styles.css">
</head>
<body>


<!--Primary Navigation begins--->
<div class="col-lg-12 justify-content-center m-0">
        <a href="../index.php"><img src="../top.gif" alt="Promo advert" class="img-fluid" style="width:150%;height:70px;" ></a>
</div>
<!--Primary Navigation Ends Here--->


<!--Secondary Navigation begins--->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php"><span class="myjumia">MYJUMIA<i class="fas fa-shopping-cart"></i></span></a>
  <form class="form-inline my-2 my-lg-0">
  <div class="input-group input-group-lg">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa fa-search"></i></span>
        </div>
        <input type="text" class="form-control" aria-label="Large" placeholder="Search" aria-describedby="inputGroup-sizing-sm">
  </div> &nbsp;&nbsp;
      
      <button class="myBtn my-2 my-sm-0" type="submit">SEARCH</button>
    </form>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <h5 class="nav-headings"><i class="fas fa-user"></i>&nbsp;<b>Login&nbsp;</b><i class="fas fa-chevron-down"></i></h5>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="register.php"><button class="btn btn-warning text-white btn-lg btn-block logbtn">LOGIN</button></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="register.php"><button class="btn btn-dark text-white btn-lg btn-block">REGISTER</button></a>
        </div>
      </li>
      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <h5 class="nav-headings"><i class="fas fa-question-circle"></i>&nbsp;<b>Help&nbsp;</b><i class="fas fa-chevron-down"></i></h5>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Contact Us</a>
          <a class="dropdown-item" href="#">Track My Order</a>
          <a class="dropdown-item" href="#">How to Shop on MYJUMIA</a>
          <a class="dropdown-item" href="#">Delivery Timelines and fees</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><button class=myBtn><i class="far fa-comment-alt"></i>&nbsp;&nbsp;LIVE CHAT</button></a>
        </div>
      </li>
    </ul>
    

    <form action="#" class="form-inline my-2 my-lg-0">
    <a href="cart.php" class="py-2 rounded-pill bg-dark border border-dark">
        <span class="font-size-20 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
        <span class="font-size-18 px-3 py-2 rounded-pill text-danger mybg"><b>0</b></span>
    </a>
    </form>
  </div>
</nav>









