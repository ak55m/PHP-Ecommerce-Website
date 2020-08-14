<?php

// helper functions


function redirect($location) {

    header("Location: $location");
    
}

function query($sql) {
    
    global $connection;
    
    return mysqli_query($connection, $sql);
    
}


function confirm($result) {
    global $connection;
    
    if(!$result) {
        die("QUERY FAILED ". mysqli_error($connection));
    }
}


function escape_string($string) {
    global $connection;
    
    return mysqli_real_escape_string($connection, $string);
}


function fetch_array($result) {
    return mysqli_fetch_array($result);
}


/******** FRONT END FUNCTIONS*********/



function sellerusername() {
    if (isset($_SESSION['username'])) {
	$userLoggedIn = $_SESSION['username'];
    $query = query("SELECT * FROM users WHERE username='$userLoggedIn'");
    confirm($query);
        
        
    while($user = fetch_array($query)) {
        
       $sellername = <<<DELIMETER
        
             <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                         {$user['username']} 
                    </div>
                
                
        DELIMETER;
        

        
        echo $sellername;

    }
    
}else {
        $noseller = <<<DELIMETER
        
             <div class="sb-sidenav-footer">
                        <div class="small">Not Logged in</div>
                    </div>
        DELIMETER;
        
        
        echo $noseller;
    }
    
 
}





function topnavusername() {
    if (isset($_SESSION['username'])) {
	$userLoggedIn = $_SESSION['username'];
    $query = query("SELECT * FROM users WHERE username='$userLoggedIn'");
    confirm($query);
        
        
    while($user = fetch_array($query)) {
        
       $page = <<<DELIMETER
        
                 <li class="nav-item active ">
            <a class="nav-link navbar-brand" href="index.php">{$user['username']} 
              <span class="sr-only">(current)</span>
            </a>
                </li>
                
                
        DELIMETER;
        

        
        echo $page;

    }
    
}else {
        $nologger = <<<DELIMETER
        
                 <li class="nav-item active ">
            <a class="nav-link navbar-brand" href="login.php">Login
              <span class="sr-only">(current)</span>
            </a>
                </li>
        DELIMETER;
        
        
        echo $nologger;
    }
    
 
}



function topnavzipcode() {
    if (isset($_SESSION['username'])) {
	$userLoggedIn = $_SESSION['username'];
    $query = query("SELECT * FROM users WHERE username='$userLoggedIn'");
    confirm($query);
        
        
    while($user = fetch_array($query)) {
        
       $zipcode = <<<DELIMETER
        
                 <li class="nav-item active ">
            <a class="nav-link navbar-brand" href="">{$user['zipcode']} {$user['town']}
              <span class="sr-only">(current)</span>
            </a>
                </li>
                
                
        DELIMETER;
        

        
        echo $zipcode;

    }
    
}else {
        $nozipcode = <<<DELIMETER
        
                 <li class="nav-item active ">
            <a class="nav-link navbar-brand" href="">
              <span class="sr-only">(current)</span>
            </a>
                </li>
        DELIMETER;
        
        
        echo $nozipcode;
    }
    
 
}





// get products 

function get_products() {
//    $query = query("SELECT * FROM products");
    $query = query("SELECT * FROM products");
    confirm($query);
    
    while($row = fetch_array($query)) {
        
        $product = <<<DELIMETER
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="item.php?id={$row['product_id']}"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
                </h4>
                <p class="card-text">{$row['short_desc']}</p>
                <h5>&#36;{$row['product_price']}</h5>
                
                <a class="btn btn-primary" target="_blank" href="item.php?id={$row['product_id']}">Add to cart</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
        DELIMETER;
        
        echo $product;

    }
    
}




function get_1500x500_products() {
    $query = query("SELECT * FROM products WHERE product_id = 4");
    confirm($query);
    
    while($row = fetch_array($query)) {
        
        $product = <<<DELIMETER
        
        
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    
                        <div class="carousel-inner">
                        <div class="">
                        <a href="item.php?id={$row['product_id']}"><img src="{$row['home_pic']}" alt=""></a>
                        </div>
                        </div>
   
                    </div>
        
        DELIMETER;
        
        echo $product;

    }
    
}





function get_rest_products() {
    $query = query("SELECT * FROM products WHERE product_id >= 5 ORDER BY product_id ASC");
    confirm($query);
    
    while($row = fetch_array($query)) {
        
        $product = <<<DELIMETER
        
        
                <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="item.php?id={$row['product_id']}"><img src="{$row['product_img']}" alt=""></a>
                            <div class="caption">
                                <h5 class="pull-right">&#36;{$row['product_price']}</h5>
                                <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                                <a class="btn btn-primary" target="_blank" href="item.php?id={$row['product_id']}">Add to cart</a>
                            </div>
                            
                        </div>
                    </div>
        
        DELIMETER;
        
        echo $product;

    }
    
}






function get_categories() {
    
    $query = query("SELECT * FROM categories");
    confirm($query);
        
    while($row = fetch_array($query)) {
        
        $category_links = <<<DELIMETER
        
               <li> <a href='category.php?id={$row['cat_id']}'>{$row['cat_name']}</a> </li>
               
        
        DELIMETER;
        
        echo $category_links;
            
        }

    
    
    
}





function get_products_in_cat_page() {
    $query = query("SELECT * FROM products WHERE product_category_id = " . escape_string($_GET['id']) . " ");
    confirm($query);
    
    while($row = fetch_array($query)) {
        
    $categories_page = <<<DELIMETER
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="item.php?id={$row['product_id']}"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
                </h4>
                <p class="card-text">{$row['short_desc']}</p>
                <h5>&#36;{$row['product_price']}</h5>
                <a class="btn btn-primary" target="_blank" href="item.php?id={$row['product_id']}">Add to cart</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
        DELIMETER;
        
        echo $categories_page;

    }
    
}






function get_products_in_shop_page() {
    $query = query("SELECT * FROM products");
    confirm($query);
    
    while($row = fetch_array($query)) {
        
       $shop_page = <<<DELIMETER
        
        <div class="col-lg-3 col-sm-2 mb-4">
            <div class="card h-100">
              <a href="item.php?id={$row['product_id']}"><img class="card-img-top" src="http://placehold.it/100x100" alt=""></a>
              <div class="card-body">
                <h3 class="card-title">
                  <h5><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
                </h3>
                <p class="card-text">{$row['short_desc']}</p>
                <h6><a> &#36;{$row['product_price']}</a></h6>
                <a class="btn btn-primary" target="_blank" href="item.php?id={$row['product_id']}">Add to cart</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
        DELIMETER;
        
        
        echo $shop_page;

    }
    
}





function login_user() {
    if(isset($_POST['submit'])) {
        
        $username = escape_string($_POST['username']);
        $password = escape_string($_POST['password']);
        
        
        $query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'");
        confirm($query);
        
        if(mysqli_num_rows($query) == 0) {
            redirect("login2.php");
         
            
            
        }else {
            redirect("sb-admin");
        }
        
        
        
    }
    
    
}









?>