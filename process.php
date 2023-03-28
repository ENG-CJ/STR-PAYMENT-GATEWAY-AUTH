<?php 

include "./config.php";
// require("./stripe-php-master/init.php");
\Stripe\Stripe::setVerifySslCerts(false);
$token=$_POST['stripeToken'];

$data=\Stripe\Charge::create(array(
   
    "description"=>"No Descr",
    "currency"=>"USD",
    "amount"=>2000*100,
    "source"=>$token,
))




// // checkout

// $data=\Stripe\Checkout\Session::create(array(
// "success_url"=>"http://localhost/payment/index.html?state=success",
// "cancel_url"=>"http://localhost/payment/index.html?state=cancelled",
// "mode"=>"payment",
// "submit_type"=>"pay",
// "payment_method_types"=>[
//     "card"
// ],
// "line_items"=>[
//     [
//         "quantity"=>1,
//         "price_data"=>[
//             "currency"=>"USD",
//             "unit_amount"=>900,
//             "product_data"=>[
//                 "name"=>"ONLINE PROJECT",
//                 "description"=>"This is Amount online projecrs"
//             ]
//         ]
//             ],
//     [
//         "quantity"=>2,
//         "price_data"=>[
//             "currency"=>"USD",
//             "unit_amount"=>900,
//             "product_data"=>[
//                 "name"=>"ONLINE PROJECT",
//                 "description"=>"This is Amount online projecrs"
//             ]
//         ]
//             ],
// ]
// ));

// echo $data->id;


?>