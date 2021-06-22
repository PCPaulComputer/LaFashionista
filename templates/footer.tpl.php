<?php
/**
 * Author: Paul Madduma
 * Code for Footer Template
 */
require_once './classes/subscribe.php';
 $subscribe = new Subscribe;
?>
<div class="clear">
        <p id="goToTop"><a href="#top" class="btn btn-warning">Back To Top</a></p></div>
<!-- FOOTER BEGINS -->
<footer class="bg bg-warning text-dark py-4">
  <div class="container">
    <div class="row">

      <div class="col-lg-6 col-md-6">
          <h5 id="subscribeAndSave">Subscribe and SAVE 30%</h5>
          <p>Sign up for our monthly newsletter and weekly email and receive discounts on your next online or in-store purchase. Loyalty points can be applied.</p>
          <!-- FORM BEGINS -->
          <form action="index.php#subscribeAndSave" method="post">
              <?php 
              $subscribe->subscribe_email();
            ?>
          </form>
          <!-- FORM ENDS -->
      </div>
      <div class="col-lg-3 col-md-3">
        <h5>About us</h5>
          <ul class="font-weight-bold">
            <li class="nav-list-item">
              <a class="nav-link-item" href="#">Careers</a>
            </li>
            <li class="nav-list-item">
              <a class="nav-link-item" href="#">Sustainability</a>
            </li>
            <li class="nav-list-item">
              <a class="nav-link-item" href="#">Giving back</a>
            </li>
            <li class="nav-list-item">
              <a class="nav-link-item" href="#">Founding</a>
            </li>
          </ul>
      </div>
      <div class="col-lg-3 col-md-3">
        <h5>Customer support</h5>
          <ul class="font-weight-bold">
            <li class="nav-list-item">
              <a class="nav-link-item" href="#">Store locator</a>
            </li>
            <li class="nav-list-item">
              <a class="nav-link-item" href="#">Customer service</a>
            </li>
            <li class="nav-list-item">
              <a class="nav-link-item" href="#">Shipping</a>
            </li>
            <li class="nav-list-item">
              <a class="nav-link-item" href="#">Returns</a>
            </li>
            <li class="nav-list-item">
              <a class="nav-link-item" href="#">Gift cards</a>
            </li>
          </ul>
      </div>

    </div>
    <div class="row">
      <div class="col">
        <hr />
        <p class="text-center">
            <small>Copyright &copy; 2000&#8211;<?php echo $subscribe->date_update(); ?> La Fashionista. All rights reserved.</small>
        </p>
      </div>
    </div>
  </div>
</footer>

  <!-- FOOTER ENDS -->

</body>

</html>