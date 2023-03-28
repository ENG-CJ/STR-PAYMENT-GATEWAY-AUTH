<?php include("./config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .stripe-button{
            width: 120px;
            color: white;
            background-color: green;
            padding: 10px;
            font-size: 19px; 
            cursor: pointer;
            border: none;
            outline: none;
        }
    </style>
</head>
<body>
    <!-- <button class="stripe-button">Pay 192.00</button> -->
    <form action="process.php" method="POST">
        <script
        src="https://checkout.stripe.com/checkout.js"
        class="stripe-button"
        data-key="<?php echo $publishableKey?>"
        data-name="Project - Online REsults"
        data-description="From hir app Pr"
        data-amount=91200
        data-image="./t-1.jpg"
        
        >

        </script>
    </form>

<!-- 
    <script src="https://js.stripe.com/v3/" difer></script>
    <script>
document.querySelector(".stripe-button").addEventListener("click",function(){
   var stripe= Stripe("<?php echo $publishableKey?>");
   document.querySelector(".stripe-button").innerHTML="Redirecting...."
   fetch("process.php",{
    method:"POST",
    body:{
        "name": "ali",
        "amount": 1999,
        "description": "jshajshajhsa",
        "email": "abdulrahman"
    }
   }).then((res)=>res.text())
   .then((id)=>{
    stripe.redirectToCheckout({
            sessionId: id
    })
   })
}) -->

    <!-- </script> -->
</body>
</html>