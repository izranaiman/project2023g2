<?php 
 
// Product Details  
// Minimum amount is $0.50   
$productName = "Codex Demo Product";  
$productID = "DP12345";  
$productPrice = 10; 
$currency = "RM"; 
  
/* 
 * Stripe API configuration 
 * Remember to switch to your live publishable and secret key in production! 
 * See your keys here: https://dashboard.stripe.com/account/apikeys 
 */ 
define('STRIPE_API_KEY', 'sk_test_51N3bR9DCUlGD30Rj8LnJpS3tkZu8VFfBFmpdt76c8SNs8TYCA56dG0tnMcOtN8khPn8YpaNF2cMoTTgO8bg5xPjL00QO0z3DPJ'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51N3bR9DCUlGD30Rj8O1WlpkQ42cdupVmr1GEqnWhar0fifxGDpH5M9EtyDpY0G2rUxQwEeIlGbnAeCB8So6FbIsk00n1b7ahoa'); 
define('STRIPE_SUCCESS_URL', 'https://localhost/MASTERMEDIVIRON CLINIC APOINTMENT SYSTEM/Main/patient/payment-success.php'); //Payment success URL 
define('STRIPE_CANCEL_URL', 'https://localhost/MASTERMEDIVIRON CLINIC APOINTMENT SYSTEM/Main/patient/payment-cancel.php'); //Payment cancel URL 
    
// Database configuration    
define('DB_HOST', 'localhost');   
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', 'root');   
define('DB_NAME', 'edoc'); 
 
?>

