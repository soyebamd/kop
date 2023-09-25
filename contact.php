
<?php
$title = 'King of Prussia Tavern Directions';
include 'header.php'; ?>
<!--Inner BANNER-->
<div id="inner-banner" class="inner-banner-bg-4">
  <div class="container">
    <h1>contact us</h1>
  </div>
</div>
<!--Inner BANNER-->
<!--Main-->
<div id="main">
  <!--ABOUT SECTION-->
  <section class="contact-section">
    <div class="map-row">
      <div class="container-fluid">
        <div class="col-md-6 col-sm-6">
          <div class="map-box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3052.1412494931938!2d-75.37049098437318!3d40.094563583093326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c695c310e9da67%3A0x68e1537605d63602!2s128%20Town%20Center%20Rd%2C%20King%20of%20Prussia%2C%20PA%2019406%2C%20USA!5e0!3m2!1sen!2sin!4v1658748086734!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"  loading="lazy" class="equaHeight">
            </iframe>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 equaHeight">
          <div class="contact-info ">
            <div class="contact-info-box ">
              <h2>CONTACT INFO</h2>
              <address>
              <ul>
                <li> Monday to Friday: 11 am to midnight<br>
                  Saturday & Sunday: Boozy Brunch 9 am to 2 pm<br>
                  Saturday & Sunday: 9 am to midnight </li>
                <li>
                  <p> 
                    <a target="_blank" href="https://www.google.com/maps/place/128+Town+Center+Rd,+King+of+Prussia,+PA+19406,+USA/@40.0945636,-75.370491,17z/data=!3m1!4b1!4m5!3m4!1s0x89c695c310e9da67:0x68e1537605d63602!8m2!3d40.0945595!4d-75.3683023"> 128 Town Center Road <br>
                    King of Prussia, PA 19406</a> </p>
                </li>
                <li> <strong class="title">Email: <span><a href="mailto:KOPTavern@gmail.com">KOPTavern@gmail.com</a></span></strong> </li>
                <li> <strong class="title">Phone: <span>(610) 337-7800</span> </strong> </li>
              </ul>
              </address>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="bartender-detail">
        <form action="form.php" method="post">
          <strong class="title">get in touch with us</strong>
          <div class="row">
            <div class="col-md-12 col-sm-4">
              <input required pattern="[a-zA-Z ]+" name="name" type="text" placeholder="Name">
            </div>
            <div class="col-md-12 col-sm-4">
              <input required name="email" type="email" placeholder="Email">
            </div>
            <div class="col-md-12 col-sm-4">
              <input required name="subject" type="text" placeholder="Subject">
            </div>
            <div class="col-md-12">
              <textarea required name="message" cols="10" rows="10" placeholder="Message"></textarea>
            </div>
            <div class="col-md-12">
              <div class="btn-row">
                <input value="SEND MESSAGE" type="submit">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!--ABOUT SECTION-->
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
</div>
<!--Main-->
<?php include 'footer.php'; ?>