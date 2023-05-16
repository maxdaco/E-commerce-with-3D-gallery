<?php


const EMAIL_REQUIRED = 'Please enter your email';
const EMAIL_INVALID = 'Please enter a valid email';


$errors = [];
$inputs = [];

$request_method = strtoupper($_SERVER['REQUEST_METHOD']);



// sanitize & validate email
$email = filter_input(INPUT_POST, 'reg_email', FILTER_SANITIZE_EMAIL);
$inputs['reg_email'] = $email;
if ($email) {
    // validate email
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($email === false) {
        $errors['reg_email'] = EMAIL_INVALID;
    }
} else {
    $errors['reg_email'] = EMAIL_REQUIRED;
}
?>

<?php if (count($errors) === 0) : ?>
   

<?php endif ?>