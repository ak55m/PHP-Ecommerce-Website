
<!-- Navigation -->

  <nav class="navbar navbar-icon-top navbar-expand navbar-light fixed-top bg-white ">
    <div class="container">
      <a class="navbar-brand" href="index.php">Utopia Logo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
   
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav m-auto">
            
          <li class="nav-item active ">
            <a class="nav-link navbar-brand" href="shop.php">Shop
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link navbar-brand" href="sb-admin/dist/index.php">Seller
              <span class="sr-only">(current)</span></a>
          </li>
          <?php topnavusername(); ?> 
          <li class="nav-item active">
            <a class="nav-link navbar-brand" href="checkout.php">Checkout</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link navbar-brand" href="cart.php">Cart
          <i class="fa fa-shopping-cart"></i>
          <span class="badge badge-primary"><?php echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = ""; ?></span>
                
          </a>
          </li>
            <li class="nav-item active">
            <a class="nav-link navbar-brand" href="contact.php">Contact Us</a>
          </li>
               <li class="nav-item active">
            <a class="nav-link navbar-brand" href="logout.php">Logout</a>
          </li>
           <?php topnavzipcode(); ?>
        </ul>
      </div>
    </div>
  </nav>








