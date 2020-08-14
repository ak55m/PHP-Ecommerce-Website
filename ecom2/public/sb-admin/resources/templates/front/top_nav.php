
<!-- Navigation -->
  <nav class="navbar navbar-expand navbar-light bg-light fixed-top ">
    <div class="container">
      <a class="navbar-brand" href="index.php">Keem Logo</a>
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
            <a class="nav-link navbar-brand" href="#">Checkout</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link navbar-brand" href="#">Cart</a>
          </li>
            <li class="nav-item active">
            <a class="nav-link navbar-brand" href="logout.php">Logout</a>
          </li>
           <?php topnavzipcode(); ?>
        </ul>
      </div>
    </div>
  </nav>








