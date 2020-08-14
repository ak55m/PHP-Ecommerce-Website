<?php require_once("../resources/config.php"); ?>
<?php require_once("../resources/functions.php"); ?>


<?php include(TEMPLATE_FRONT . DS . "header.php")?>



<?php 
    
    
    $query = query("SELECT * FROM categories WHERE cat_id = " . escape_string($_GET['id']) . " ");
    confirm($query);

    while($row = fetch_array($query)): 
    
    
    
?>

      
      
      
      
        <!-- Page Content -->
  <div class="container-fluid">

       
      
    <div class="row">
        <div class="col-sm-1"></div>
      <!-- Blog Entries Column -->

        <div class = "col-sm-8">
<!--      <div class="col-lg-8">-->

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <a href=""><img class="card-img-top img-fluid" src= "http://placehold.it/300x100" alt=""></a>
         
<!--        <h1><a href="category.php?id=$row['cat_id']"; class="display-3"><?php echo $row['cat_name']; ?></a></h1>-->
        <h1><?php echo $row['cat_name']; ?></h1>
        
        
    </header>
      <br>
      <hr>
            
            
            <h1>More <?php echo $row['cat_name']; ?>! </h1>
            
              <div class="row">
                  
                  
            <?php get_products_in_cat_page(); ?>   
            
          

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

   
        
        
 <?php include(TEMPLATE_FRONT . DS . "side_widget.php")?>
        
        
        
  <!-- /.container -->



  <?php endwhile; ?>


        
<?php include(TEMPLATE_FRONT . DS . "footer.php")?>
      
      
      
      
      