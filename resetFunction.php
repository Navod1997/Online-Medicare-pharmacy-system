<?php
//Database connection 
include 'db_connection.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Medicare online pharmacy</title>

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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
</head>

<body>

<!-- update reset password -->

<?php



    if(isset($_POST['newPassword'])){

        $password = $_POST['password'];
        $rePassword = $_POST['conPass'];
        $email = $_SESSION['otpEmail'];

        if((!empty($password)) && (!empty($rePassword)) && ($password == $rePassword)){

            $hashPassword = md5($password);                   

            $sql = "UPDATE `user` SET `password`= '".$hashPassword."'  WHERE `e_mail`= '".$email."'";
            $result = mysqli_query($connection, $sql);
            

            // unset($_SESSION['otpCode']);
            // unset($_SESSION['otpEmail']);
            session_destroy();

            echo '
            <script>
                swal({
                    title: "Success!",
                    text: "Your password reset has been successfully.",
                    icon: "success",
                    button: "OK!",
                }).then(function(){
                        window.location = "login.php";
                    });
            </script>
            ';
            
            

        }
        else{

            echo '
                <script>
                    swal({
                        title: "Somthing Wrong!",
                        text: "Password update unsuccessfully!",
                        icon: "error",
                        button: "OK!",
                    }).then(function(){
                            window.location = "resetpassword.php";
                        });
                </script>
                ';

        }


    }
    else{
        
        echo '
                <script>
                    swal({
                        title: "Somthing Wrong!",
                        text: "Error Occurred!",
                        icon: "error",
                        button: "OK!",
                    }).then(function(){
                            window.location = "login.php";
                        });
                </script>
                ';

    }

    ?>  <!-- update reset password -->
    
    
</body>
</html>