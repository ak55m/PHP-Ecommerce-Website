
<?php require_once("../resources/config.php"); ?>
<?php require_once("../resources/functions.php"); ?>



 <?php include(TEMPLATE_FRONT . DS . "header.php")?>



  <!-- Page Content -->
  <div class="container-fluid">

       
      
    <div class="row">
<!--        <div class="col-sm-1"></div>-->
      <!-- Blog Entries Column -->
<div style="margin-left: 100px; margin-right: 700px;" > 
        
<!--      <div class="col-lg-8">-->
            
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
                  
<!--                 <?php echo $_SESSION['product_1']; ?>-->
                  
                  <br>
                  <br>
                  
            <?php get_products(); ?>   

            
          

            </div>
                  
        <!-- Pagination -->
<!--
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>
-->
      </div>

      </div>
        

   
        
        
 <?php include(TEMPLATE_FRONT . DS . "side_widget.php")?>
        
        
        
  <!-- /.container -->

<?php include(TEMPLATE_FRONT . DS . "footer.php")?>

