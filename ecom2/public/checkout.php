<?php require_once("../resources/config.php"); ?>
<?php require_once("../resources/functions.php"); ?>
<?php require_once("cart.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php")?>


<!-- 
  Bootstrap docs: https://getbootstrap.com/docs
  Get more snippet on https://bootstraptor.com/snippets
-->





<?php 
    
    if(isset($_SESSION['total'])) {
        
        echo $_SESSION['total'];
    }

//    $stocks = display_message();

?>





<!-- 
  Bootstrap docs: https://getbootstrap.com/docs
  Get more snippet on https://bootstraptor.com/snippets
-->


<section class="pt-5 pb-5">
  <div class="container">
    
        <div class="col-lg-12 col-md-12 col-12">
            <h3 class="display-5 mb-2 text-center">Shopping Cart</h3>
            <p class="mb-5 text-center">
                <i class="text-info font-weight-bold"></i> items in your cart</p>
            
            <table id="shoppingCart" class="table table-condensed table-responsive">
            <div class="float-right text-right">
                <h4>Subtotal:</h4>
                <h1>&#36;<?php echo isset($_SESSION['total']) ? $_SESSION['total'] : $_SESSION['total'] = ""; ?></h1>
                <a href=".php" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Checkout</a>
            </div>
                    
        <div class="col-sm-6 order-md-2 text-right">
        </div>
        <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
            <a href="index.php">
                <i class="fas fa-arrow-left mr-2"></i> Continue Shopping</a>
        </div>
    
                <thead>
                    <tr>
                        <th style="width:60%">Your items</th>
                        <th style="width:35%">Price</th>
                        <th style="width:10%">Quantity</th>
                        <th style="width:10%"></th>
                    </tr>
                </thead>
                
                    
                    
                    
                    <?php cart1(); ?>
                    
<!--
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img src="https://via.placeholder.com/250x250/5fa9f8/ffffff" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                    <h4>Product Name</h4>
                                    <p class="font-weight-light">Brand &amp; Name</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">$49.00</td>
                        <td data-th="Quantity">
                            <form type="number" class="text-center" value="1">4</form>
                            <p class="text-center text-danger"><?php display_message(); ?></p>
                        </td>
                        <td class="actions" data-th="">
                            <div class="text-right">
                                <a href="cart.php?add=1"><button class="btn btn-white border-secondary bg-white btn-md mb-2"><i class="fas fa-plus"></i>
                                </button></a>
                                <a href="cart.php?remove=1"><button class="btn btn-white border-secondary bg-white btn-md mb-2"><i class="fas fa-minus"></i>
                                </button></a>
                                <a href="cart.php?delete=1"><button class="btn btn-white border-secondary bg-white btn-md mb-2"><i class="fas fa-trash"></i>
                                </button></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="float-right text-right">
                <h4>Subtotal:</h4>
                <h1>$99.00</h1>
            </div>
        </div>
    </div>
    <div class="row mt-4 d-flex align-items-center">
        <div class="col-sm-6 order-md-2 text-right">
            <a href="catalog.html" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Checkout</a>
        </div>
        <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
            <a href="catalog.html">
                <i class="fas fa-arrow-left mr-2"></i> Continue Shopping</a>
        </div>
    </div>
</div>
</section>
-->






