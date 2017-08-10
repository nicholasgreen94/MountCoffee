<?php require('inc/header.php'); ?>
  <main id="contact">
    <div class="hero contact-hero">
      <h1 class="container">Contact Us<hr><span>We'd Love to Hear from You</span></h1>
    </div>
    <div class="container">
      <div id="contact-headline" class="center">
        <h3>Have any question, comments, or concerns, feel free to let us know by filling out the form below.</h3>
        <ul class="row">
          <li class="col s4">
            <img src="images/contact_1.jpg" alt="A lady talking on the phone looking to her left." class="responsive-img circle">
          </li>
          <li class="col s4">
            <img src="images/contact_2.jpg" alt="A pay phones number keypad." class="responsive-img circle">
          </li>
          <li class="col s4">
            <img src="images/contact_3.jpg" alt="A woman who is about to make a phone call." class="responsive-img circle">
          </li>
        </ul>
      </div>
      <form id="contact-form" action="index.html" method="post">
        <div class="row">
          <div class="input-field col s12 m6">
            <input id="first_name" type="text" class="validate">
            <label for="first_name">First Name*</label>
          </div>
          <div class="input-field col s12 m6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Last Name*</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6">
            <input id="email" type="text" class="validate">
            <label for="email">Email*</label>
          </div>
          <div class="input-field col s12 m6">
            <input id="phone" type="text" class="validate">
            <label for="phone">Phone</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="comments" type="text" class="materialize-textarea"></textarea>
            <label for="comments">Comments*</label>
          </div>
        </div>
        <div class="row">
          <div class="col s6 m3">
            <input type="submit" name="submit" value="Submit">
          </div>
        </div>
      </form>
    </div>
  </main>
<?php require('inc/footer.php'); ?>
