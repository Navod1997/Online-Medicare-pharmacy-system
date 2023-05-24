<?php
//Database connection 
include 'db_connection.php';
session_start();

if(isset($_SESSION["email"])){
    
    
}
else{
    header("location:home_page.php");
}
?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>online pharmacy</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Header Section Begin -->
    <div class="navb1">
        <div class="header-top ">
         <nav class="navbar navbar-custom navbar-expand-md ">
            <div class="container">
                <div class="ht-left">
                </div>
                <?php
                if(isset($_SESSION["first_name"]) && $_SESSION["first_name"]!=""){
                    $name= $_SESSION["first_name"];

                    echo '<div class="ht-right">
                    <a href="my_account.php" class="login-panel">'.$name.'</a>
                    <a href="logout.php" class="login-panel"><i class="fa fa-sign-out"></i></a>
                    <div class="lan-selector">
                    </div>
                    </div>';
                    
                }else
                {
                echo'<div class="ht-right">
                <a href="login.php" class="login-panel"><i class="fa fa-user"></i></a>
                <a href=".." class="login-panel"><i class="fa fa-sign-out"></i></a>
                <div class="lan-selector">
                </div>
                ';
                
                } 
                ?>
            </div>
        </div>



    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
            <div class="col-sm-4 col-lg-3">
                    <div class="breadcrumb-text">
                        <a href="home_page.php"><i class="fa fa-home"></i> Home</a>
                        <div class="col-lg-5 offset-lg-5">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Breadcrumb Form Section Begin -->
    <div class="row">
    <div class="col-sm-4 col-lg-3">
        <nav id="navbar-example3" class="navbar navbar-text-dark bg-light flex-column mt-4" wit>
        <a class="navbar-brand" href="my_account.php">My Account</a>
            <nav class="nav nav-pills flex-column">
                <a class="nav-link ml-3 my-1" href="eddit_acount.php">Eddit profile</a>
                <a class="nav-link ml-3 my-1" href="change_password.php">Change password</a>
            </nav>
        <a class="navbar-brand" href="my_oder.php">My Oder</a>
        </nav>
    </div>

    <div class="row justify-content-center">
        <div data-spy="scroll" class="scrollspy-example z-depth-1 mt-4" data-target="#navbar-example3" data-offset="0">
            <div class="register-login-section spad">
            <div class="container">
                <div class="row">
                <div class="col-md-6  col-lg-5 col-sm-12 mx-auto offset-md-4">
                <div class="row justify-content-center">
                <h3>New Password</h3>
                 </div>
                    <div class="login-form bg-light mt-4 p-4">
                        <form action="" method="POST" class="row g-3 needs-validation" autocomplete="off" >
                            <div class="col-12 mt-1 mb-2">
                                <label for="password" class="form-label">New Password</label>
                                <input type="password" class="form-control pwd" name="password1" id="password" minlength="8" maxlength="25"  required>
                                <i class="fa fa-eye" onclick = "passwordshow()"></i>
                            </div>
                            <div class="col-12 mt-1 mb-2">
                                <label for="conPass" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control pwd" name="password2" id="conPass" minlength="8" maxlength="25"  required>
                                <i class="fa fa-eye" onclick = "passwordshow()"></i>
                            </div>
                            <div class="col-12  form-check" style="padding-left:20px;">
                                <label class="form-check-label" for="easy" id="errorPassword"></label>
                            </div>
                            <div class="col-12 mt-2 ">
                                <button type="submit" name="change_pass" onclick="return checkpassword()" class="site-btn login-btn">Submit</button>
                            </div>
                        </form>
                        <hr class="mt-4">
                        <div class="col-12">
                            <p class="text-center mb-0">If you want to back? <a href="signin.php">Signin</a></p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
            


    <!-- update password -->

    <?php

        

        if(isset($_POST["change_pass"])) {

            $user_id = $_SESSION["user_id"] ;
            $password1 =md5($_POST["password1"]);
            $password2 =md5($_POST["password2"]);


            if(!empty($password1) && !empty($password2) && ($password1 == $password2))   // records were not empty and equal

            { 
                
            
            $sql = "UPDATE `user` SET password = '".$password2."' Where user_id='".$user_id."'";

                if ($connection->query($sql) === TRUE) {

                    echo '<script>swal("Password success!", "Password change is success.!", "success").then (function(){
                                    window.location = "home_page.php" ;
                                });
                                    </script>';

                    session_destroy();
                    header("Location: home_page.php");
    

                    } else {
                   // echo "Error: " . $sql . "<br>" . $connection->error;
                    }

                    
                }
                else
                {
                    echo '<script>swal("Erro", "Change Password error!", "error");</script>';
                }

                $connection->close();
                    
        }
        
                        
                                                    
    ?>

    

    <!-- Register Form Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="img\slidephoto\logo2.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: No.11,Medhagoda,Matara,Sri Lanka</li>
                            <li>Phone: +971524518</li>
                            <li>Email: Medicarepharmacy@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-whatsapp"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">                        
                         Copyright &copy;<script>document.write(new Date().getFullYear());</script> Medicare.lk. All rights reserved.
                        </div>
                        <div class="payment-pic">
                            <img src="img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script>
    $("input[type=password]").keyup(function(){
    var ucase = new RegExp("[A-Z]+");
	var lcase = new RegExp("[a-z]+");
	var num = new RegExp("[0-9]+");
	
	if($("#password1").val().length >= 8){
		$("#8char").removeClass("glyphicon-remove");
		$("#8char").addClass("glyphicon-ok");
		$("#8char").css("color","#00A41E");
	}else{
		$("#8char").removeClass("glyphicon-ok");
		$("#8char").addClass("glyphicon-remove");
		$("#8char").css("color","#FF0004");
	}
	
	if(ucase.test($("#password1").val())){
		$("#ucase").removeClass("glyphicon-remove");
		$("#ucase").addClass("glyphicon-ok");
		$("#ucase").css("color","#00A41E");
	}else{
		$("#ucase").removeClass("glyphicon-ok");
		$("#ucase").addClass("glyphicon-remove");
		$("#ucase").css("color","#FF0004");
	}
	
	if(lcase.test($("#password1").val())){
		$("#lcase").removeClass("glyphicon-remove");
		$("#lcase").addClass("glyphicon-ok");
		$("#lcase").css("color","#00A41E");
	}else{
		$("#lcase").removeClass("glyphicon-ok");
		$("#lcase").addClass("glyphicon-remove");
		$("#lcase").css("color","#FF0004");
	}
	
	if(num.test($("#password1").val())){
		$("#num").removeClass("glyphicon-remove");
		$("#num").addClass("glyphicon-ok");
		$("#num").css("color","#00A41E");
	}else{
		$("#num").removeClass("glyphicon-ok");
		$("#num").addClass("glyphicon-remove");
		$("#num").css("color","#FF0004");
	}
	
	if($("#password1").val() == $("#password2").val()){
		$("#pwmatch").removeClass("glyphicon-remove");
		$("#pwmatch").addClass("glyphicon-ok");
		$("#pwmatch").css("color","#00A41E");
	}else{
		$("#pwmatch").removeClass("glyphicon-ok");
		$("#pwmatch").addClass("glyphicon-remove");
		$("#pwmatch").css("color","#FF0004");
	}
});
    </script>
    <script>
    function passwordshow() {
        var $pwd = $(".pwd");
    var eye1 = document.getElementById("eye");
    if ($pwd.attr('type') === 'password') {
        $pwd.attr('type', 'text');
        eye1.classList.add("fa-eye-slash");
        eye1.classList.remove("fa-eye");
        showPassword = true;
    } else {
        $pwd.attr('type', 'password');
        eye1.classList.remove("fa-eye-slash");
        eye1.classList.add("fa-eye");
        showPassword = false;
    }
    }
    </script>

</body>

</html>