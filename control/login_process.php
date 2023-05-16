<?php
session_start();
require_once '../model/data_model.php';
if(isset($_POST['login'])){

// User Account validation 

if(empty($_POST['email'] || $_POST['password'])){
   
    $err_empty="<span class='error'>All fields are required</span>";
    $has_error =true;
 }    
/* filters a variable with the specified filter. Returns the filtered data on success or FALSE on failure.*/
elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $err_email ="<span class='error'>Enter valid email</span>";
    $has_error=true;
} 
/* This function searches string for pattern, returns true if pattern exists, otherwise returns false.*/  
else if( !preg_match("#\d+#", user_input($_POST['password']))){
    $err_password= "<span class='error' >Password must include at least one digit!</span>";
    $has_error = true;
}
else if (!preg_match("#[a-z]+#", user_input($_POST['password']))) {
$err_password = "<span class='error' >Password must contain at least one letter!</span>";
    $has_error = true;
    
}

else{

  
  
   $email= $_POST['email'];
   $password= $_POST['password'];

   echo($_POST['email']);
   echo($_POST['password']);
   
    if($user_details=user_login($email, $password)){ 
        $_SESSION['firstName'] =$user_details['firstName'];
        
        $_SESSION['email']= $user_details['email'];

        $_SESSION['customerID']= $user_details['customerID'];
   
    header('Location: ../view/shop.php ');
    }
    else{

        $error_login="Incorrect login details!";
    }

}

}

function user_input($data) {
    $data = trim($data);//removes space
    $data = stripslashes($data);//removes backslashes 
    $data = htmlspecialchars($data);//converts some predefined characters to HTML entities,> (greater than) becomes &gt;
    return $data;
 }