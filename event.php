<?php $title = 'King of Prussia Tavern Pool - Poker - Events'; include 'header.php'; ?>
<!--Inner BANNER-->
<div id="inner-banner" class="inner-banner-bg-9">
  <div class="container">
    <h1>KOP Grill & Tavern Events </h1>
  </div>
</div>
<!--Inner BANNER-->
<!--Main-->
<div id="main">
  <section class="event-section">
    <div class="event-row">
      <div class="container">
        <div class="row">
          <?php
            $day = date("d");
            $month = date("m");
            $year = date("Y");
         //  echo $day, $month, $year;
            ?>            

          <div class="col-md-12 col-sm-6">
            <div class="event-col s-flex">
              <div class="thumb"><a href="#"><img src="images/Industry-Night.jpg" alt=""></a></div>
              <div class="text-col  bg-color"> <strong class="date"> <span>Every Night of the Week </span> <span>10:00 pm - 12:00 pm</span></strong>
                <h2>Industry Night </h2>
                <p>KOP Grill & Tavern is the perfect comfortable venue for industry folks to grab a bite and drink.
                  Take 10% off our Bar Menu and drinks with establishment ID, or if you’re wearing your industry garb.</p>
                <p>
                <p> <strong>Cost</strong>:Free</p>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-sm-6">
            <div class="event-col s-flex">
              <div class="thumb"><a href="#"><img src="images/pocker.jpg" alt=""></a></div>
              <div class="text-col"> <strong class="date"><span> Monday & Wednesday through October </span> <span>7:00 pm</span></strong>
                <h2>Poker League -Riverchasers </h2>
                <p>Try your hand at Poker every Monday & Wednesday night at 7 pm.
                  Players who grab a bite before the game will be rewarded with poker chips.
                  There is no cover to play, and all walk-ins are welcome.
                  Gift cards for KOP Grill & Tavern to top players. </p>
                <p> <strong> <a href="https://www.riverchasers.com/" class="link"> Learn more about Riverchasers. </a> </strong></p>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-sm-6">
            <div class="event-col s-flex">
              <div class="thumb"><a href="#"><img src="images/pool.jpg" alt=""></a></div>
              <div class="text-col  bg-color"> <strong class="date"> <span> Every Monday & Thursday </span> <span>7:00 pm </span></strong>
                <h2>APA Pool League</h2>
                <p> American Poolplayers Association (APA)
                  Every Monday & Thursday night at 7 pm, grab a pool stick.
                  APA is a centrally controlled nationwide amateur pool organization. Join the KOP Grill & Tavern
                  league with other local players.</p>
                <p>
                <p> <strong>Cost</strong>:$25 buy in to join the team. </p>
                <p> <strong><a href="https://poolplayers.com/apa-pool-league/" class="link">Learn more about APA.</a></strong> </p>
              </div>
            </div>
            <?php if($date == 23 && $month <= '07' && $year == 2022 ) { ?>
            <div class="col-md-12 col-sm-6">
              <div class="event-col s-flex">
                <div class="thumb"><a href="#"><img src="images/riverchasers.png" alt=""></a></div>
                <div class="text-col"> <strong class="date"><span> Every Monday & Thursday </span> <span>7:00 pm</span></strong>
                  <h2><a href="#">APA Pool League </a></h2>
                  <p>American Poolplayers Association (APA)
                    Every Monday & Thursday night at 7 pm, grab a pool stick.
                    APA is a centrally controlled nationwide amateur pool organization. Join the KOP Grill & Tavern
                    league with other local players. </p>
                  <p> <strong>Cost</strong>:<br>
                    <strong> Organization: </strong> <a href="https://www.riverchasers.com"> www.riverchasers.com </a> <br>
                    <strong> Tickets: </strong>Contact 1 — Riverchasers </p>
                  <div class="share"> <strong class="title">SHARE</strong>
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                  <a href="#" class="btn-book">details</a> <a href="#" class="btn-book">Book event</a> </div>
              </div>
            </div>
            <?php } ?>
            <?php if($day < 27 && $month == 'Jul' && $year == 2022 ) { ?>
            <div class="col-md-12 col-sm-6">
              <div class="event-col s-flex">
                <div class="thumb"><a href="#"><img src="images/riverchasers.png" alt=""></a></div>
                <div class="text-col  bg-color"> <strong class="date">27 <span>July 2022 </span> <span>7:00 pm</span></strong>
                  <h2><a href="#">Live Poker with Riverchasers<br>
                    Poker Tour </a></h2>
                  <p>All customers must follow venue health and safety protocols to participate. 
                    Free to play.  Win Prizes.  Diners may be seated first to assist the venue with limited seating and staffing. 
                    Part of the Bar Poker Open National Championship Network, hosting the World's Largest Social Poker Championships.</p>
                  <p> <strong>Cost</strong>:Free<br>
                    <strong> Organization: </strong> <a href="https://www.riverchasers.com"> www.riverchasers.com</a> <br>
                    <strong> Tickets: </strong>Contact 1 — Riverchasers </p>
                  <div class="share"> <strong class="title">SHARE</strong>
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                  <a href="#" class="btn-book">details</a> <a href="#" class="btn-book">Book event</a> </div>
              </div>
            </div>
            <?php } ?>
            <?php if($day < 30 && $month == 'Jul' && $year == 2022 ) { ?>
            <div class="col-md-12 col-sm-6">
              <div class="event-col s-flex">
                <div class="thumb"><a href="#"><img src="images/fundraiser-jesaniel-marrero.png" alt=""></a></div>
                <div class="text-col"> <strong class="date"> 30 <span>July 2022 </span> <span> 6:00-10:00 pm</span></strong>
                  <h2><a href="#">Beef and Beer to support Jesaniel Marrero </a></h2>
                  <p> An unexpected visit to the ER led to a rapid diagnosis of B-cell acute lymphoblastic leukemia and the start of a long chemotherapy/treatment regimen (2-3 years) with potential lifelong maintenance.Our family (Marrero, Nieves, Newell, Banas, Bereda, Kim) would truly appreciate your support to help Jes with living expenses and medical bills during his battle.</p>
                  <p> <strong>Cost</strong>:$30.00 pp<br>
                    <strong> Organization: </strong> <a href="#"> local family </a> <br>
                    <strong> Tickets: </strong>Contact (2) Beef & Beer to Support Jesaniel's Leukemia Battle | Facebook </p>
                  <div class="share"> <strong class="title">SHARE</strong>
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                  <a href="#" class="btn-book">details</a> <a href="#" class="btn-book">Book event</a> </div>
              </div>
            </div>
            <?php } ?>


              






          
          </div>
        </div>
      </div>
    </div>
    <?php include_once 'insta.php'; ?>
    <!--NEWSLETTER SECTION-->
    <section class="newsletter">
      <div class="container">
        <div class="row">
          <div class="col-md-6"> <strong class="title">Get Updates </strong>
            <h2>Stay In Touch With Updates</h2>
          </div>
          <div class="col-md-6">
            <form action="#">
              <input type="text" required>
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--NEWSLETTER SECTION-->
  </section>
</div>
<!--Main-->
<?php include 'footer.php'; ?>