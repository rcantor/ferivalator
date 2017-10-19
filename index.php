<?php

if(isset($_POST['enter'])) { 
    header( 'Location: https://www.feriva21-7.com/ferivalator/' ) ;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ferivalator Log-in</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
<style>
    body {
        margin:0px !important;
        padding:0px;
        font-family: 'Source Sans Pro', sans-serif;
        background:url('https://www.feriva21-7.com/wp-content/uploads/2017/07/ferivalator_landing_bg.jpg') top center no-repeat;
	background-size: 100%;
    }
    
    .container {
        width:565px;
        margin: 157px auto 0;
        text-align: center;
    }
    
    h1 {
        color:#bb262b;
        font-size: 33px;
    }
    
    input[type="text"] {
        width: 80%;
        height: 42px;
        border-radius: 10px;
        margin: 0px 10px;
        text-align: center;
        font-size:15px;
    }
    
    .submit {
        text-align: center;
    }
    
    input[type='submit'], .button {
        border: none;
        background: #e41a21;
        background-image: -webkit-linear-gradient(top, #e41a21, #91090b);
        background-image: -moz-linear-gradient(top, #e41a21, #91090b);
        background-image: -ms-linear-gradient(top, #e41a21, #91090b);
        background-image: -o-linear-gradient(top, #e41a21, #91090b);
        background-image: linear-gradient(to bottom, #e41a21, #91090b);
        -webkit-border-radius: 6;
        -moz-border-radius: 6;
        border-radius: 6px;
        -webkit-box-shadow: 2px 2px 5px #000;
        -moz-box-shadow: 2px 2px 5px #000;
        box-shadow: 2px 2px 5px #000;
        color: #ffffff;
        padding: 8px 20px !important;
        text-decoration: none;
        font-size: 15px !important;
        width: 100% !important;
        max-width: 140px !important;
        text-align: center;
        cursor: pointer;
        font-weight: 600 !important;
        margin: 0 auto;
    }
    
    input[type='submit']:hover, .button:hover {
        text-decoration: none;
        color:#fcb713;
        -webkit-box-shadow: 0px 0px 5px #666666;
        -moz-box-shadow: 0px 0px 5px #666666;
        box-shadow: 0px 0px 5px #666666;
    }
    </style>
</head>
<body>
   
   <div class="container">
       <img src="https://www.feriva21-7.com/wp-content/uploads/2017/07/ferivalator_logo_transparent.png">
       
       <h1>Enter your license number</h1>
       <form action="" method="post">
           <input type="text" class="license" name="license" required>
           <p>By signing in, I acknowledge and agree to the FeRivalor's <a data-fancybox="modal" data-src="#terms" href="javascript:;">Terms of Use</a>.</p>
           <div class="submit"><input type="submit" class="button" value="ENTER" name="enter"></div>
       </form>
   </div>
   
    <div id="terms" style="display: none; padding: 50px 5vw; max-width: 800px;text-align: center;">
                <h3>Terms of Use</h3>

                <p>Coming Soon</p>

                

            </div>

    
</body>
</html>