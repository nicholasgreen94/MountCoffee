<?php require('inc/header.php'); ?>
<main id="index">
  <div class="hero index-hero">
    <h1 class="container">Seattle's premier coffee<hr><span>That's Us</span></h1>
  </div>
  <div id="story">
    <div class="row">
      <div class="col s12 m6 story-text">
        <h2>OUR STORY</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col s12 m6 story-picture"></div>
    </div>
  </div>
  <div id="motto">
    <div class="row">
      <div class="col s12">
        <h2>OUR MOTTO:</h2>
      </div>
      <div class="col s12 offset-m1 m10 offset-l2 l8">
        <p><b>&ldquo;</b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<b>&rdquo;</b></p>
      </div>
    </div>
  </div>
  <div id="origins">
    <div class="row">
      <div class="col s12 m6 origin-text">
        <h2>OUR COFFEE</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col s12 m6 promise">
        <h2>OUR PROMISES</h2>
        <img src="images/origins.jpg" alt="A hand holding unripened coffee beans, some are green and some red" class="responsive-img circle">
        <ul class="center">
          <li>100% Organic</li>
          <li>Free Wifi</li>
          <li>Free Trade Coffee</li>
          <li>Helps Those in Need</li>
        </ul>
      </div>
    </div>
  </div>
  <div id="subscribe">
    <div class="row">
      <div class="col s12">
        <h2>SUBSCRIBE</h2>
        <div class="row">
          <h3 class="col s12 offset-m2 m8">We soon will offer a subscription service. If you would like to notified when that service is available sign up for our newsletter below.</h3>
        </div>
        <div class="row center">
          <form id="newsletter" action="index.html" method="post">
            <div class="input-field col s12 offset-m3 m5">
              <input id="email" type="text" class="validate">
              <label for="email">Email*</label>
            </div>
            <div class="col s6 m2">
              <input type="submit" name="submit" value="Submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="location">
    <div class="row">
      <div class="col s12 m6">
        <h2>OUR LOCATION</h2>
        <div class="location">
          <h3>01.</h3>
          <p>123 Fake Street<br>Seattle, WA 98121</p>
          <h4>Phone:</h4>
          <a href="tel:1234567890">(123) 456-7890</a>
          <h4>Hours:</h4>
          <div class="hours">
            <p>Monday - Friday: 5:00am - 10:00pm<br>Saturday - Sunday: 5:00am - 7:00pm</p>
          </div>
        </div>
      </div>
      <div class="col hide-on-med-and-down l5 location-picture">
        <img src="images/location.jpg" alt="Empty tables and chairs, the tabletops are white and the chairs range from black, white, dark grey and a light grey.">
      </div>
    </div>
  </div>
</main>
<?php require('inc/footer.php'); ?>
