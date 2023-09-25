<?php 
$title = 'King of Prussia Tavern';
include 'header.php';
?>
<!--BANNER-->
<div id="banner">
  <div id="home-slider" class="owl-carousel">
    <div class="item"> <img src="images/kop-banner-1.jpg" alt="banner" class="for-desk"> <img src="images/King-of-Prussia-Tavern.png" alt="banner" class="for-mob">
      <div class="caption">
        <div class="holder">
          <!--<strong class="title">FOUNDED 2022</strong>-->
          <span> King Of Prussia </span>
          <h1>Games, Food, Drinks<b>&amp;</b>Events</h1>
        </div>
      </div>
    </div>
    <div class="item"> <img src="images/kop-banner-2.jpg" alt="banner"  class="for-desk"> <img src="images/King-of-Prussia-Tavern.png" alt="banner" class="for-mob">
      <div class="caption">
        <div class="holder">
          <!--<strong class="title">FOUNDED 2022</strong>-->
          <span>King Of Prussia </span>
          <h1>Games, Food, Drinks<b>&amp;</b>Events</h1>
        </div>
      </div>
    </div>
    <div class="item"> <img src="images/kop-banner-3.jpg" alt="banner"  class="for-desk"> <img src="images/King-of-Prussia-Tavern.png" alt="banner" class="for-mob">
      <div class="caption">
        <div class="holder">
          <!--<strong class="title">FOUNDED 2022</strong>-->
          <span>King Of Prussia </span>
          <h1>Games, Food, Drinks<b>&amp;</b>Events</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<!--BANNER-->
<!--Main-->
<div id="main">
  <!--WELCOME SECTION-->
  <!--WELCOME SECTION-->
  <!--TAB STYLE 1-->
  <section class="tab-style-1">
    <div class="tab-row">
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="tab-style-1">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <div class="box">
                  <div class="img-frame"><a href="#"><img src="images/Poker League-King-of-Prussia-KOP-Tavern.png" alt=""></a></div>
                  <div class="text-area equaHeight">
                    <h2><a href="event-detail.php">MONDAY & WEDNESDAY </a></h2>
                    <p class="text-uppercase fw-bold"> Riverchasers Poker League</p>
                    <p>Try your hand at Poker every Monday & Wednesday night at 7 pm.</p>
                    <p>Players who grab a bite before the game will be rewarded with poker chips.</p>
                    <p>There is no cover to play, and all walk-ins are welcome.</p>
                    <p>Gift cards for KOP Grill & Tavern to top players.</p>
                    <p><a href="https://www.riverchasers.com/" target="_blank">Learn more about Riverchasers. </a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="box">
                  <div class="img-frame"><a href="#"><img src="images/Pool-League-KOP-Tavern.png" alt=""></a></div>
                  <div class="text-area equaHeight">
                    <h2><a href="event-detail.php">MONDAY & THURSDAY </a></h2>
                    <p class="text-uppercase fw-bold">American Poolplayers Association (APA)</p>
                    <p>Every Monday & Thursday nights at 7 pm grab a pool stick.</p>
                    <p>APA is a centrally controlled nationwide amateur pool organization. Join the KOP Grill & Tavern league with other local players.</p>
                    <p>$25 buy in to join the team.</p>
                    <p><a href="https://poolplayers.com/apa-pool-league" target="blank">Learn more about APA. </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="box">
                  <div class="img-frame"><a href="#"><img src="images/Industry-Night-KOP-Tavern-King-of-Prussia.png" alt=""></a></div>
                  <div class="text-area equaHeight">
                    <h2><a href="event-detail.php"> MONDAY - SUNDAY </a></h2>
                    <p class="text-uppercase fw-bold"> INDUSTRY NIGHT </P>
                    <p> Every night of the week, from 10 pm to midnight, KOP Grill & Tavern is the perfect comfortable venue for industry folks to grab a bite and drink. Take 10% off our Bar Menu and drinks with establishment ID, or if you’re wearing your industry garb.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Event Section-->
  <section class="event-section" id="afterBanner">
    <div class="container">
      <div class="holder"> <strong class="title text-uppercase">KOP Grill & Tavern EVENTS</strong>
        <h2>Upcoming Events</h2>
        <p> ​Every night KOP Grill & Tavern not only has your favorite modern comfort food, craft cocktails, craft beers, and boozy shakes, but we have a whole arsenal of games and events to keep your game on. Join our pool and poker leagues, compete, and meet local players for good-time fun and prizes. KOP Grill & Tavern welcomes all industry professionals with a 10% discount every night of the week. </p>
        <div class="center-block"><a href="/event" class="link">View Events</a></div>
      </div>
    </div>
  </section>
  <!--Event Section-->
  <?php include_once 'insta.php'; ?>
  <!--NEWSLETTER SECTION-->
  <section class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-md-6"> <strong class="title">Get Updates </strong>
          <h2>Stay In Touch With Updates</h2>
        </div>
        <div class="col-md-6">
          <form action="subscribe.php" method="post">
            <input type="text" required>
            <input type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </section>
  <!--NEWSLETTER SECTION-->
</div>
<!--Main-->
<?php include 'footer.php'; ?>