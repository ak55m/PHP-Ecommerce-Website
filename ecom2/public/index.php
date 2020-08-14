
<?php require_once("../resources/config.php"); ?>
<?php require_once("../resources/functions.php"); ?>



 <?php include(TEMPLATE_FRONT . DS . "header.php")?>



  <!-- Page Content -->
  <div class="container-fluid"> 
   <div class="row">
   <div style="margin-left: 100px; margin-right: 700px;" > 
   <br>

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/1500x500" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/1500x500" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/1500x500" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
         </div>
              <div class="row">
                  <br>
                  <br>
            <?php get_products(); ?>   
            </div>
      </div>
      </div>
   
   
 <?php include(TEMPLATE_FRONT . DS . "side_widget.php")?>
        
        
        
  <!-- /.container -->

<?php include(TEMPLATE_FRONT . DS . "footer.php")?>

