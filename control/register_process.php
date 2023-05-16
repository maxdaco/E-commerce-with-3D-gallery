<?php
require_once '../model/data_model.php';



if(isset($_POST['submit'])){

    if(empty($_POST['firstname'] ||$_POST['lastname'] ||$_POST['email'] || $_POST['password'] || $_POST['repassword'])){
   
        $err_empty="<span class='error'>All fields are required</span>";
        $has_error =true;
     }
     elseif (!preg_match("/^[a-zA-Z ]+$/",user_input($_POST['firstname']))){
        $err_firstName ="<span class='error'>First Name must contain only alphabets and space</span>";
        $has_error=true;
     
     }

     elseif (!preg_match("/^[a-zA-Z ]+$/",user_input($_POST['lastname']))){
        $err_lastName ="<span class='error'>Last Name must contain only alphabets and space</span>";
        $has_error=true;
     
     }
     
     elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
             $err_email ="<span class='error'>Enter valid email</span>";
             $has_error=true;
         } 
         
     else if( !preg_match("#\d+#", user_input($_POST['password']))){
             $err_password= "<span class='error' >Password must include at least one digit!</span>";
             $has_error = true;
         }
    else if (!preg_match("#[a-z]+#", user_input($_POST['password']))) {
             $err_password = "<span class='error' >Password must contain at least one letter!</span>";
             $has_error = true;
             
         }
    else if(strlen($_POST['password']) < 8) {
            $err_password = "Password must be minimum of 6 characters";
            $has_error = true;
        }      
    else if($_POST['password'] != $_POST['repassword']){
             $err_repassword = '<span class="error">Password does not match</span>';
             $has_error = true;  
         }
      
    else{
       

             register_user($_POST['firstname'],$_POST['lastname'], $_POST['email'], $_POST['password'], $_POST['repassword']); 
             
                  
             header('Location: ../view/login.php');
     
         }
     
}

function user_input($data) {
    $data = trim($data);//removes space
    $data = stripslashes($data);//removes backslashes 
    $data = htmlspecialchars($data);//converts some predefined characters to HTML entities,> (greater than) becomes &gt;
    return $data;
 }