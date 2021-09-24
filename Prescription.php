<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

     <!-- Header Section Begin -->
     <div class="navb1">
        <div class="header-top ">
         <nav class="navbar navbar-custom navbar-expand-md ">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        Medicarepharmacy@gmail.com
                    </div>
                    <div class="phone-service">
                       <i class="fa fa-phone" aria-hidden="true"></i>
                       +971 524 518
                    </div>
                </div>
                <div class="ht-right">
                    <a href="login.php" class="login-panel"><i class="fa fa-user"></i></a>
                    <a href=".." class="login-panel"><i class="fa fa-sign-out"></i></a>
                    <div class="lan-selector">
                    </div>
                </div>
            </div>
        </div>


        <!-- search nave -->
        
             <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="home_page.php">
                                <img src="img\slidephoto\logo1.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">   
                            <div class="input-group">
                                <input type="text" placeholder="Search">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                        <button type="button" class="btn btn-primary"> <a href="Prescription.php">prescrption</button>            
                            <li class="cart-icon">
                                <a href="check-out.php">
                                    <i class="icon_bag_alt"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <!-- catogory -->        
    <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
    </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                    <li><a href="medicine_list.php?type=Medicine">Medicine</a></li>
                        <li><a href="medicine_list.php?type=Mediacal Divice">Mediacal device</a></li>
                        <li><a href="medicine_list.php?type=Wellenss">Wellenss</a></li>
                        <li><a href="medicine_list.php?type=Aurwedha">Aurwedha</a> </li>
                        <li><a href="medicine_list.php?type=Personal Care">Personal Care</a></li>
                        <li><a href="medicine_list.php?type=Other">Other</a></li>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- catogory End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more" style="max-width: 1240px; padding-bottom:80px;">
                        <a href="home_page.php"><i class="fa fa-home"></i> Home</a>
                        <span>prescrption</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->


    <!-- prescription upload -->
    
    <div class="iteamfirst">
    <div class="container">
    <div class="card mb-3" style="max-width: 1240px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                 <img src="img\slidephoto\prescrption.jpg" alt="..." >      
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Prescription Upload</h5>
                    <p class="card-text">Please upload an image of your medical prescription issued by a SLMC registered doctor.</p><p>Prescription drugs will only be issued if a valid prescription image is provided.</p>
                    

                    <!--  <input type="file" name="fileToUpload" id="fileToUpload" required> -->

                                  <input type="file" name="fileToUpload" id="fileToUpload" required> <br>   

                                    <div class="row" style="padding:50px;">
                                        <input type="submit" name="submit" value="Upload Prescription" class="btn btn-danger">
                                    </div>         
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    <?php 

                                            
                                   

         // Check if image file is a actual image or fake image
         if(isset($_POST["submit"])) {

            $target_dir = "kalhara/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
            

            // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
            }

            // Check file size
           

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {

            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";

                $imgpath = "kalhara/". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
               
                if(!empty($_POST["c_type"] && $_POST["c_name"])){

                    $c_type  = $_POST["c_type"];
                    $c_name  = $_POST["c_name"];



                    echo '<br>';
                    echo $c_name;
                    echo '<br>';

                    echo $c_type;
                    echo '<br>';

                    echo $imgpath;

                    include 'db_connection.php';

                    $sql = "INSERT INTO prescription ( data_path)
                    VALUES('".$c_name."', '".$c_type."', '".$imgpath."')" ;
                    
                            if ($connection->query($sql) === TRUE) {
                            echo "New record created successfully";
                            } else {
                            echo "Error: " . $sql . "<br>" . $connection->error;
                            }

                            $connection->close();



                }
               
               

               


            } else {
                echo "Sorry, there was an error uploading your file.";
            }
            }


        }
 

     ?>
     
 
    <!-- End prescription upload -->
    
    
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
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Contact</a></li>
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

    <script>

        $(document).on("click", ".browse", function() {
            var file = $(this)
                .parent()
                .parent()
                .parent()
                .find(".file");

            file.trigger("click");
        });

        $('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0].name;
        $("#file").val(fileName);
        
            var reader = new FileReader();
            reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
        });

        


    </script>

    <script>

$(document).ready(function(e) {
  $("#image-form").on("submit", function() {
  $("#msg").html('<div class="alert alert-info"><i class="fa fa-spin fa-spinner"></i> Please wait...!</div>');
    $.ajax({
            type: "POST",
            url: "prescription_save.php",
            data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData: false, // To send DOMDocument or non processed data file it is set to false

      success: function(data) {
            if (data == 1 || parseInt(data) == 1) {
                $("#msg").html(
                 '<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Data updated successfully.</div>'
                );
             } 
        else {
                $("#msg").html(
                '<div class="alert alert-info"><i class="fa fa-exclamation-triangle"></i> Extension not good only try with <strong>GIF, JPG, PNG, JPEG</strong>.</div>'
                );
            }
      },
      error: function(data) {
                $("#msg").html(
                '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> There is some thing wrong.</div>'
            );
      }
    });
  });



    </script>


</body>

</html>