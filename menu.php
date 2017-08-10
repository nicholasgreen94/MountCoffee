<?php require('inc/header.php'); ?>
<main id="menu">
  <div class="hero menu-hero">
    <h1 class="container">Our Menu<hr><span>We'll make it anyway you want</span></h1>
  </div>
  <div id="menu_description" class="row">
    <div id="menu-wrap" class="col s12 m6">
      <ul class="food-topic center">
        <li><a href="#espresso" class="active-item">Espresso</a></li>
        <li><a href="#iced">Iced Drinks</a></li>
        <li><a href="#sweets">Sweets</a></li>
        <li><a href="#sandwich">Sandwich</a></li>
      </ul>
      <div id="food-type-wrap">
        <div id="espresso" class="food-type active-type">
          <ul>
            <li><span data-item="americano" class="active">Americano</span></li>
            <li><span data-item="mocha">Cafe Mocha</span></li>
            <li><span data-item="latte">Cafe Latte</span></li>
            <li><span data-item="cappuccino">Cappuccino</span></li>
            <li><span data-item="espresso">Espresso</span></li>
          </ul>
        </div>
        <div id="iced" class="food-type">
          <ul>
            <li><span data-item="iced-latte">Iced Latte</span></li>
            <li><span data-item="iced-mocha">Iced Mocha</span></li>
            <li><span data-item="iced-tea">Iced Tea</span></li>
          </ul>
        </div>
        <div id="sweets" class="food-type">
          <ul>
            <li><span data-item="macaron">Macaron</span></li>
            <li><span data-item="cupcake">Cupcake</span></li>
            <li><span data-item="chocolate-cake">Chocolate Cake</span></li>
            <li><span data-item="croissant">Croissant</span></li>
          </ul>
        </div>
        <div id="sandwich" class="food-type">
          <ul>
            <li><span data-item="egg-cheese">Egg and Cheese</span></li>
            <li><span data-item="egg-cheese-ham">Egg, Cheese, and Ham</span></li>
            <li><span data-item="omelette">Omelette</span></li>
            <li><span data-item="bagel">Bagel</span></li>
          </ul>
        </div>
      </div>
    </div>
    <div id="description" class="hide-on-small-only col m6">
      <img src="images/drinks.jpg" alt="Two cups of coffee with foam.'" class="circle description-img">
      <div class="item active-description" data-description="americano">
        <h2>Americano</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <span class="price">$3.00</span>
      </div>
      <div class="item" data-description="mocha">
        <h2>Cafe Mocha</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <span class="price">$3.50</span>
      </div>
      <div class="item" data-description="latte">
        <h2>Cafe Latte</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <span class="price">$4.00</span>
      </div>
      <div class="item" data-description="cappuccino">
        <h2>Cappuccino</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <span class="price">$3.75</span>
      </div>
      <div class="item" data-description="espresso">
        <h2>Espresso</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <span class="price">$1.00</span>
      </div>
      <div class="item" data-description="iced-latte">
        <h2>Iced Latte</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <span class="price">$4.25</span>
      </div>
      <div class="item" data-description="iced-mocha">
        <h2>Iced Mocha</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <span class="price">$3.50</span>
      </div>
      <div class="item" data-description="iced-tea">
        <h2>Iced Tea</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <span class="price">$3.00</span>
      </div>
      <div class="item" data-description="macaron">
        <h2>Macaron</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <span class="price">$0.75</span>
      </div>
      <div class="item" data-description="cupcake">
        <h2>Cupcake</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <span class="price">$2.00</span>
      </div>
      <div class="item" data-description="chocolate-cake">
        <h2>Chocolate Cake</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <span class="price">$5.00</span>
      </div>
      <div class="item" data-description="croissant">
        <h2>Croissant</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <span class="price">$2.25</span>
      </div>
      <div class="item" data-description="egg-cheese">
        <h2>Egg and Cheese Sandwich</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <span class="price">$6.25</span>
      </div>
      <div class="item" data-description="egg-cheese-ham">
        <h2>Egg, Cheese, and Ham Sandwich</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <span class="price">$7.00</span>
      </div>
      <div class="item" data-description="omelette">
        <h2>Omelette</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <span class="price">$6.75</span>
      </div>
      <div class="item" data-description="bagel">
        <h2>Bagel</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <span class="price">$3.50</span>
      </div>
    </div>
  </div>
</main>

<?php require('inc/footer.php'); ?>
