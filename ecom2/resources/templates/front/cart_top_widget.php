<style>
.fixed {position: fixed !important; top: 100px; left: 400px; bottom: 0px;}
</style>

<div class="pt-5 pb-5 fixed">
  <div class="container fixed">
    
        <div class="col-lg-12 col-md-12 col-12">
            <h3 class="display-5 mb-2 text-center">Shopping Cart</h3>
            <p class="mb-5 text-center">
                <i class="text-info font-weight-bold">5</i> items in your cart</p>
            
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
    
                
    </div>
      </div>
    </div>
            