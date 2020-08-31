<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYJUMIA</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../newstyles.css">

    <?php
    // require functions.php file
    require ('../functions.php');
    ?>

</head>
<body>

<!-- start #header -->
<header id="header">
    <div class="col-lg-12 justify-content-center m-0">
        <img src="pro.gif" alt="Promo advert" class="img-fluid" style="width:150%;height:50px;" >
    </div>

    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="index.php"><span class="myjumia">MYJUMIA<i class="fas fa-shopping-cart"></i></span></a>
        <form class="form-inline">
            <input class="form-control"  type="search" placeholder="Search" aria-label="Search" >
            
            &nbsp;<button class="myBtn  my-2 my-sm-0" type="submit">SEARCH</button>
        </form>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav m-auto font-rubik"> 
                <li class="nav-item dropdown active ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <span class="headerColor"><b>CATEGORY</b></span> <i class="fas fa-chevron-down" ></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Computers</a>
                    <a class="dropdown-item" href="#">Electronics</a>
                    <a class="dropdown-item" href="#">Fashion</a>
                    </div>
                </li>    
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>&nbsp;<span class="headerColor"><b>MY ACCOUNT</b></span> <i class="fas fa-chevron-down"></i> 
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#"><button class=LoginBtn>LOGIN</button></a>
                    <hr>
                    <a class="dropdown-item" href="#"><button class="mySuccessBtn">REGISTER</button></a>
                    <a class="dropdown-item" href="#"><i class="fas fa-wallet"></i>&nbsp;Orders</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-archive"></i>&nbsp;Wish List</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-question-circle"></i> <span class="headerColor"><b>HELP</b></span> <i class="fas fa-chevron-down"></i>  
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Contact Us</a>
                    <a class="dropdown-item" href="#">Track My Order</a>
                    <a class="dropdown-item" href="#">Return My Order</a>
                    <a class="dropdown-item" href="#">How to Shop on Myjumia?</a>
                    <a class="dropdown-item" href="#">How to pay on Myjumia?</a>
                    <a class="dropdown-item" href="#">Delivery timelines and fees</a>
                    <a class="dropdown-item" href="#">Myjumia Express</a>
                    <a class="dropdown-item" href="#">Join J-Force</a>
                    <hr>
                    <a class="dropdown-item" href="#"><button class=myBtn2><i class="far fa-comment-alt"></i>&nbsp;&nbsp;LIVE CHAT</button></a>
                    </div>
                </li>  
                
            </ul>
            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg border border-dark">
                    <span class="font-size-20 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="font-size-18 px-3 py-2 rounded-pill text-danger color-primary-bg2"><b><?php echo count($product->getData('cart')); ?></b></span>
                </a>
            </form>
        </div>
    </nav>
    <!-- !Primary Navigation -->

</header>
<!-- !start #header -->

<!-- start #main-site -->
<main id="main-site">