<?php require_once("../resources/config.php"); ?>
<?php require_once("../resources/functions.php"); ?>




<?php   


    case "add":
	if(!empty($_POST["quantity"])) {
		$productByCode = $db_handle->runQuery("SELECT * FROM products WHERE code='" . $_GET["code"] . "'");
		$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
		
		if(!empty($_SESSION["cart_item"])) {
			if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
				foreach($_SESSION["cart_item"] as $k => $v) {
						if($productByCode[0]["code"] == $k) {
							if(empty($_SESSION["cart_item"][$k]["quantity"])) {
								$_SESSION["cart_item"][$k]["quantity"] = 0;
							}
							$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
						}
				}
			} else {
				$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
			}
		} else {
			$_SESSION["cart_item"] = $itemArray;
		}
	}
	break;


        
//    if(isset($_GET['add'])) {
//    
//        $query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['add']). " ");
//        confirm($query);
//    
//
//    while($row = fetch_array($query)) {
//        
//        if($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]) {
//            $_SESSION['product_' . $_GET['add']] ++;
//            redirect("checkout.php"); 
//            
//            
//            }else {
//                   
//            
//                set_message("Out of stock");
//                redirect("checkout.php"); 
//            
//            
//            }
//        
//        
//        }
//        
//    }
        
    
if(isset($_GET['remove'])) {
    
    $_SESSION['product_' . $_GET['remove']] --;
    
    if($_SESSION['product_' . $_GET['remove']] < 1) {
        header("Location: checkout.php"); exit;
            
    }else {
        header("Location: checkout.php"); exit;
    }
    
    
   
    
    
}
    



 
if(isset($_GET['delete'])) {
        
    $_SESSION['product_' . $_GET['delete']] = '0';
    header("Location: checkout.php"); exit;
        
    
    
}





function cart1() {
    
    $total = 0;
    $item_quantity = 0;
    
    foreach ($_SESSION as $name => $value) {
        
        
        
        if($value > 0) {
            
            
            if(substr($name, 0, 8) == "product_") {
                
                $length = strlen($name) - 8;
                
                $id = substr($name, 8, $length);
                
            
            $query = query("SELECT * FROM products WHERE product_id = " . escape_string($id). " ");
            confirm($query);
                
//            $stocks = display_message();
    
    
            while($row = fetch_array($query)) {
                
            $sub = $row['product_price']*$value;
            $item_quantity+=$value;
                
        
            $cart = <<<DELIMETER
                <tbody>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img src="https://via.placeholder.com/250x250/5fa9f8/ffffff" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                    <h4>{$row['product_title']}</h4>
                                    <p class="font-weight-light text-success">In stock</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price"><b>&#36;{$row['product_price']}</b><br>
                        Subtotal: <b>&#36;{$sub}</b>
                        </td>
                        <td data-th="Quantity">
                            <form type="number" class="text-center" value="">{$value}</form>
                            <p class="text-center text-danger"></p>
                        </td>
                        <td class="actions" data-th="">
                            <div class="text-right">
                                <a href="cart.php?add={$row['product_id']}"><button class="btn btn-white border-secondary bg-white btn-md mb-2"><i class="fas fa-plus"></i>
                                </button></a>
                                <a href="cart.php?remove={$row['product_id']}"><button class="btn btn-white border-secondary bg-white btn-md mb-2"><i class="fas fa-minus"></i>
                                </button></a>
                                <a href="cart.php?delete={$row['product_id']}"><button class="btn btn-white border-secondary bg-white btn-md mb-2"><i class="fas fa-trash"></i>
                                </button></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
     DELIMETER;
        
        echo $cart;
                
        $_SESSION['total'] = $total += $row['product_price']*$value;
        $_SESSION['item_quantity'] = $item_quantity;
                  
        
    }
                
                
                
}

          
            
            
       
        }
            
            
        }
        
        
    }
    
    

function cart() {
    
 
    
    // Function without argument  
function writeMessage() { 
    echo "Welcome to GeeksforGeeks!"; 
} 
  
// Declare variable and store 
// function name

$functionName = "writeMessage();";


  
// Function call using eval 
eval($functionName); 
//eval($var1); 

    $query = query("SELECT * FROM products");
    confirm($query);
                
//    $stocks = display_message();
//    echo $stocks;

    
    
    
    while($row = fetch_array($query)) {
        
                 $str .= "<tbody>
                    <tr>
                        <td data-th='Product'>
                            <div class='row'>
                                <div class='col-md-3 text-left'>
                                    <img src='https://via.placeholder.com/250x250/5fa9f8/ffffff' alt='' class='img-fluid d-none d-md-block rounded mb-2 shadow'>
                                </div>
                                <div class='col-md-9 text-left mt-sm-2'>
                                    <h4>{$row['product_title']}</h4>
                                    <p class='font-weight-light text-success'>In stock</p>
                                </div>
                            </div>
                        </td>
                        <td data-th='Price'$49.00</td>
                        <td data-th='Quantity'>
                            <form type='number' class='text-center' value='1'>1</form>
                            <p class='text-center text-danger'><?php echo display_message(); ?> </p>
                        </td>
                        <td class='actions' data-th=''>
                            <div class='text-right'>
                                <a href='cart.php?add={$row['product_id']}'><button class='btn btn-white border-secondary bg-white btn-md mb-2'><i class='as fa-plus'></i>
                                </button></a>
                            
                            <a href='cart.php?remove={$row['product_id']}'><button class='btn btn-white border-secondary bg-white btn-md mb-2'><i class='fas fa-minus'></i></button></a><a href='cart.php?delete{$row['product_id']}'><button class='btn btn-white border-secondary bg-white btn-md mb-2'<i class='fas fa-trash'></i></button></a>
                            </div>
                        </td>
                    </tr>
                </tbody> ";        
            }
        
            
           
   
            
            
        echo $str;
    }
            


    
   


    
?>



