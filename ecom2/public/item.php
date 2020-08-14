<?php require_once("../resources/config.php"); ?>
<?php require_once("../resources/functions.php"); ?>



 <?php include(TEMPLATE_FRONT . DS . "header.php")?>




<?php 
    
    
    $query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . " ");
    confirm($query);

    while($row = fetch_array($query)): 
    
    
    
?>




  <!-- Page Content -->
    <div class="container-fluid">

    <div class="row">
        <div class="col-sm-1"></div>
        
        
      <!-- /.col-lg-3 -->

      <div class="col-sm-8">

        <div class="card mt-4">
            <a href=""><img class="card-img-top img-fluid" src= "<?php echo $row['info_img'];?>" alt=""></a>
          <img class="card-img-top img-fluid" src="<?php echo $row['product_title']?>" alt="">
          <div class="card-body">
              
            <h3 class="card-title"><?php echo $row['product_title']?></h3>
            <h4><?php echo "&#36;" . $row['product_price']?></h4>
            <p class="card-text"><?php echo $row['product_description']?></p>
            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars
          </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Product Reviews
          </div>
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <a href="#" class="btn btn-success">Leave a Review</a>
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->
        
        
         <?php include(TEMPLATE_FRONT . DS . "side_widget.php")?>

   

  </div>
  <!-- /.container -->
    
    
    <?php endwhile; ?>

  <!-- Footer -->
 <?php include(TEMPLATE_FRONT . DS . "footer.php")?>