<?php 

$error_array = array(); //for any emails or email already used

if(isset($_POST['submit'])) {
    
    $username = escape_string($_POST['username'], FILTER_SANITIZE_EMAIL); //sanitize email
    
//    $_SESSION['username'] = $username; //store email into session variable
    $password = escape_string($_POST['password']); //get password 
        
    $query = mysqli_query($connection, "SELECT * FROM users WHERE username='$username' AND password='$password'"); 
    confirm($query);
    
 //   $check_query = mysqli_num_rows($query);
    
//       if(mysqli_num_rows($query) == 0) {
//            redirect("login2.php");
//       }
            
    
    if(mysqli_num_rows($query) == 1) {
        $row = mysqli_fetch_array($query);
        $username = $row['username'];
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    }

    else {
        array_push($error_array, "Email or password is incorrect<br>");
    }
    
    

        
    
        if(empty($error_array)) {
        $_SESSION['username'] = "";
        $_SESSION['password'] = "";
        }
}


?>