<?php require_once("../resources/config.php"); ?>
<?php require_once("../resources/functions.php"); ?>


 <?php include(TEMPLATE_FRONT . DS . "header.php")?>
    







<!-- Page Content -->
<!--<div class="container-fluid">-->

  <!-- Page Heading -->
<!--
  <h1 class="my-4">Page Heading
    <small>Secondary Text</small>
  </h1>
    
<div class="col-sm-4"></div>
    

    
<!--
    <div class = "col-sm-8">
    
<hr>
  <div class="row">
    <div class="col-lg-3 col-sm-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Project One</a>
          </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
            <a class="btn btn-primary" target="_blank" href="item.php?id={$row['product_id']}">Add to cart</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Project Two</a>
          </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Project Three</a>
          </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 mb-3">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Project Four</a>
          </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
        </div>
      </div>
    </div>

  </div>
    </div>
-->

  <!-- /.row -->
      
        
     


<!--
   Pagination 
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
    </li>
  </ul>
-->

<!--</div>-->
<!-- /.container -->





<?php require_once("../resources/config.php"); ?>
<?php require_once("../resources/functions.php"); ?>



 <?php include(TEMPLATE_FRONT . DS . "header.php")?>


<?php include(TEMPLATE_FRONT . DS . "shop_top_widget.php")?> 


  <!-- Page Content -->
  <div class="container-fluid">
      

     
      
    <div class="row">
        
        
        <div style="margin-top: 5px; margin-left: 100px; margin-right: 70px;" > 
<br>
     
    
    
  
           
      <h1>Shop All Products
<!--    <small>Secondary Text</small>-->
  </h1>
            
    <hr>
                  
     <div class="row">
          <?php get_products_in_shop_page(); ?> 
 
     </div>

            </div>
            
            
            <div class="col-sm-1"></div>
                  
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

   
        
        

        
        
        
  <!-- /.container -->

<?php include(TEMPLATE_FRONT . DS . "footer.php")?>