<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include_once 'meta.php'; ?>
<title>
<?php if($title){ echo $title; } else { echo ""; } ?>
</title>
<!--THEME STYLE CSS-->
<link href="css/style.css" rel="stylesheet" type="text/css">
<!--BOOTSTRAP CSS-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!--THEME COLOR CSS-->

<link href="css/theme_color.css" rel="stylesheet" type="text/css">
<!---Responsive CSS-->
<link href="css/responsive_query.css" rel="stylesheet">
<!---Owl Carousel CSS-->
<link href="css/owl.carousel.css" rel="stylesheet">
<!--FONTAWESOME CSS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!---PrettyPhoto CSS-->
<link href="css/prettyPhoto.css" rel="stylesheet">
<link rel="icon" type="image/png" href="favicon.png" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-242782945-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-242782945-1');
</script>

</head>
<body>
<div id="wrapper">

<header id="header">
  <!-- Navigation Row Start -->
  <div class="container container-md container-menu">
    <div class="top-bar">
      <!--<strong class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>Monday to Sunday: 10 am to 2 am </strong>-->
      <div class="top-social d-flex align-items-center"> <strong class="title">Follow us</strong>
        <ul>
          <li><a href="https://www.facebook.com/KOPGrillAndTavern" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="https://www.instagram.com/kopgrillandtavern/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="https://twitter.com/kopgrilltavern" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="https://www.tiktok.com/@kopgrillandtavern" target="_blank"><i class="fa fa-tiktok" aria-hidden="true"></i></a></li>

          

        </ul>
      </div>
    </div>
    <div class="navigation"> <strong class="logo"><a href="/"><img src="images/logo.png" alt="logo"></a></strong>
      <nav class="navbar navbar-inverse navbar-expand-xl">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav" id="nav">
            <li class="active"><a href="https://kopgrillandtavern.com/">HOME</a></li>
            <!--   <li><a href="about">About</a></li> -->
            <li><a href="#">Menus</a>
              <ul>
                 
              <li><a href="pizza">Pizza</a></li>
                <li><a href="tavern-menu">Tavern Menu </a></li>
                <li><a href="food-menu">Food Menu </a></li>
                <li><a href="brunch-menu">Breakfast </a></li>
                <li><a href="late-night-menu">Late Night Menu</a></li>
                <li><a href="kids-menu">Kids Menu</a></li>
                <li><a href="drinks">Drinks</a></li>
                 <!--  <li><a href="food-menu">Food Menu</a></li>            
                               <li><a href="dessert-menu">Dessert Menu</a></li>
                               <li><a href="beverages-menu">Beverages Menu</a></li>
                               -->
              </ul>
            </li>
            <li><a href="https://koptavern.getbento.com/online-ordering/" target="_blank" class="heighlight">ORDER</a></li>
            <li><a href="/#footer" class="heighlight">RESERVE</a></li>
            <li class="logo-col"></li>
            <li><a href="event">Events</a></li>
            <li><a href="gallery">Gallery</a> </li>
            <li><a href="about">About</a> </li>
            <li><a href="contact">contact</a></li>
          </ul>
        </div>
      </nav>
      <div class="top-right-box">
        <div class="burger-nav">
          <div class="tl-burger-nav">
            <div id="tl_side-menu-btn" class="cp_side-menu"><a href="#" class="wow"><i class="fa fa-align-justify" aria-hidden="true"></i></a></div>
            <!--SIDEBAR MENU START-->
            <div id="tl_side-menu"> <a href="#" id="tl-close-btn" class="crose"><i class="fa fa-close"></i></a>
              <div class="content mCustomScrollbar">
                <div id="content-1" class="content">
                  <div class="tl_side-navigation">
                    <nav>
                      <ul class="navbar-nav text-uppercase">
                        <li class="active"><a href="https://kopgrillandtavern.com/">Home</a></li>
                        <!--    <li><a href="about">About</a></li> -->
                        <li class="dropdown open"><a href="menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">menus<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            
                          <li><a href="pizza">Pizza</a></li>

                <li><a href="tavern-menu">Tavern Menu </a></li>
                
                <li><a href="food-menu">Food Menu </a></li>
                <li><a href="brunch-menu">Breakfast </a></li>
                <li><a href="late-night-menu">Late Night Menu</a></li>
                <li><a href="kids-menu">Kids Menu</a></li>
                <li><a href="drinks">Drinks</a></li>
              <!--  <li><a href="food-menu">Food Menu</a></li>            
                               <li><a href="dessert-menu">Dessert Menu</a></li>
                               <li><a href="beverages-menu">Beverages Menu</a></li>
                               -->
                          </ul>
                        </li>
                           <li><a href="https://koptavern.getbento.com/online-ordering/" target="_blank">ORDER</a></li>
                            <li><a href="/#footer">RESERVE</a></li>

                        <li><a href="event">Events</a></li>
                        <li class="logo-col"></li>
                        <li><a href="gallery">Gallery</a> </li>
                        <li><a href="contact">contact</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="sidebar-social">
                <ul>
                  <li><a href="https://www.facebook.com/KOPTavern"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="https://www.instagram.com/KOPTavern/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  <li><a href="https://twitter.com/kopgrilltavern" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.tiktok.com/@kopgrillandtavern" target="_blank"><i class="fa fa-tiktok" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
            <!--SIDEBAR MENU END-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Navigation Row End-->
  <!--Search Bar Holder Start-->
  <div class="overlay overlay-contentscale">
    <button type="button" class="overlay-close">Close</button>
    <div class="tl_search_inner">
      <form method="get">
        <input type="text" placeholder="Enter your search" required>
        <button class="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>
  <!--Search Bar Holder End-->
</header>
<!--HEADER-->