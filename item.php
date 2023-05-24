<?php
//Database connection 
include 'db_connection.php';
session_start();
$_SESSION['itemcode']= $_GET['itemcode'];
?>

<!DOCTYPE html>
<html lang>

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

    <style>
    a {
  color: #67788a;
  text-decoration: none;
  background-color: transparent;
}
</style>
</head>

<body>
    <!-- Page Preloder -->
    <!--<div id="preloder">
        <div class="loader"></div>
    </div>-->

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
                    <span class="text-dark">Welcome!</span><a class="text-white" href="my_account.php" class="login-panel">'.$name.'</>
                    <a href="logout.php" class="login-panel"><i class="fa fa-sign-out"></i></a>
                    <div class="lan-selector">
                    </div>
                    </div>';
                    
                }else
                {
                echo'<div class="ht-right">
                <a href="login.php" class="login-panel"><i class="fa fa-user"></i></a>
                <div class="lan-selector">
                </div>
            </div>
        </div>';
                
             } ?>
            </div>
        </div>


            <!-- search nave -->
        
            <div class="inner-header">
                <div class="container">
                    <div class="row justify-content-md-center">
                    <div class="row align-items-center">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <div class="logo">
                                <a href="home_page.php">
                                    <img src="img\slidephoto\logo1.png" alt="Medicare online pharmacy">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="advanced-search">   
                                <div class="input-group">
                                    <!-- <input type="text" placeholder="Search">
                                    <button type="button"><i class="ti-search"></i></button> -->
                                </div>
                            </div>
                        </div> 
                        <div class="col-lg-3 text-right col-md-3">
                            <ul class="nav-right">
                            <a href="Prescription.php">
                            <img src="https://img.icons8.com/fluency-systems-filled/22/null/file-prescription.png"alt="Uplod Prescription"/>
                                </a>           
                                <li class="cart-icon">
                                    <a href="testcheckout.php">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

        <!-- catogory -->     

        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                <nav class="nav-menu mobile-menu">
                <ul>
                    <li><a class="<?php if($_GET['type'] == 'Medicine'){echo "active text-white";} ?>" href="medicine_list.php?type=Medicine">Medicine</a></li>
                    <li><a class="<?php if($_GET['type'] == 'Mediacal Divice'){echo "active text-white";} ?>" href="medicine_list.php?type=Mediacal Divice">Medical device</a></li>
                    <li><a class="<?php if($_GET['type'] == 'Wellenss'){echo "active text-white";} ?>" href="medicine_list.php?type=Wellenss">Wellness</a></li>
                    <li ><a class="<?php if($_GET['type'] == 'Aurwedha'){echo "active text-white";} ?>" href="medicine_list.php?type=Aurwedha">Ayurveda</a> </li>
                    <li><a class="<?php if($_GET['type'] == 'Personal Care'){echo "active text-white";} ?>" href="medicine_list.php?type=Personal Care">Personal Care</a></li>
                    <li><a  class="<?php if($_GET['type'] == 'Other'){echo "active text-white";} ?>" href="medicine_list.php?type=Other">Other</a></li>
                    </li>
                </ul>
                </nav>
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </div>
        <!-- catogory End -->

        <div class="breacrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text product-more">
                            <a href="home_page.php"><i class="fa fa-home"></i> Home</a>
                            <span>Detail</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Breadcrumb Section Begin -->

        <!-- Product Shop Section Begin -->

        <section class="product-shop spad page-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3" style="background-color: #f7f7f7;">
                        <div class="filter-widget">
                            
                            <!--filter-catagories-->

                            <ul class="filter-catagories">

                                <?php 

                                    include 'db_connection.php';// connection
                                    if(isset($_GET['type'])){   
                                        $type = $_GET['type'];
                                        //echo $cat."<br><br>" ;

                                    }
                                    else{
                                        //echo "no ctogory selected";
                                        //echo '<script>alert("No Catagory Selected !");</script>';
                                        $type= "Medicine";
                                    }
                                    $sql = "SELECT * FROM category WHERE c_type='".$type."'"; 
                                        $result = mysqli_query($connection, $sql);
                                        
                                        if($result->num_rows>0){
                                            while($row=$result->fetch_assoc()){
                                                //echo "item name:".$row["item_name"] ."unit_price:".$row["unit_price"] ."<br>" ;
                                        echo    
                                                ' 
                                                <div class="filter-widget">
                                                <ul class="filter-catagories">
                                                    <li><a href="view_items.php?cat='.$row["c_type"].'"> <h6>'.$row["c_name"].'</h6></a></li>
                                                </ul>
                                                </div>
                                                ';
                                            }
                                        }
                                        else{

                                            echo "no result found";
                                            //echo '<script>alert("No Results Found");</script>';
                                        }
                                        //$connection->close();
                                ?>

                            </ul>
                        </div>
                        <div class="filter-widget">
                            <h4 class="fw-title">Brand</h4>
                            <div class="fw-tags">
                                <a href="https://www.hyphens.com.sg/">Hyphens pharm</a>
                                <a href="https://sunpharma.com/">Sun Pharmaceutical</a>
                                <a href="https://www.spc.lk/">State Pharmaceuticals Corporation</a>
                                <a href="https://www.astron.lk/">Astron Limited</a>
                                <a href="https://www.webmd.com/drugs/2/drug-8982/altace-oral/details">Altace</a>
                                <a href="https://emerchemie.lk/">Emerchemie NB</a>
                                <a href="#https://www.humira.com/">Humira</a>
                            </div>
                        </div>
                    </div>

                    <?php 

                        if(isset($_GET['itemcode'])){
                            
                            // $itemcode =  $_SESSION['itemcode'];

                            $itemcode = $_GET["itemcode"];
                            //echo $cat."<br><br>" ;
                        

                            $sql = "SELECT * FROM item WHERE item_id='".$itemcode."'"; 
                            $result = mysqli_query($connection, $sql);
                            $row=mysqli_fetch_array($result);
                                if($result->num_rows>0){
                        echo    
                            '
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="product-pic-zoom">
                                    <img src="items/'.$row['data_path'].'" alt="'.$row["item_name"].'" width="180" height="320">
                                        <div class="zoom-icon">
                                            <i class="fa fa-search-plus"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-details">
                                        <div class="pd-title">
                                            <span>'.$row["category_type"] .'</span>
                                            <h3>'.$row["item_name"] .'</h3>
                                        </div>
                                        <!--<div class="pd-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>(5)</span>
                                        </div>-->
                                        <div class="pd-desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor
                                                sit amet, consectetur adipisicing elit, sed do mod tempor</p>
                                            <h6>Available quantity:'.$row["quantity"] .'</h6><br>
                                            <h4> Rs.'.$row["unit_price"] .'</h4>
                                        </div>
                                        <h6>Your quantity:</h6><br>
                                        <form action = "buy_now.php?itemcode='.$itemcode.'" method = "post" >
                                            <div class="quantity">
                                                <input type="number" name="qnt" id="'.$itemcode."qtt" .'"  value="1" min="1" max="'.$row["o_max_qut"].'" onkeyup="this.value = minmax(this.value, 1, '.$row["o_max_qut"].')" >   
                                            </div>
                                            <div class="row">
                                                <button class="primary-btn pd-cart passValue" name="buynow" aria-disabled="true">Buy Now</button><br><br>                                      
                                            </form>  
                                            <form action = "testcheckout.php?itemcode='.$itemcode.'" method = "post" >
                          
                                                <button class="primary-btn pd-cart passValue" name="'.$itemcode.'" onclick="add_to_cart(this.name)">ADD TO CART</button>
                                            </div>
                                            </form>
                                    </div><br>
                                    <div class="pd-share">
                                    
                                </div>
                                </div>
                            </div>
                            <div class="product-tab">
                                <div class="tab-item">
                                    <ul class="nav" role="tablist">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#tab-1" role="tab">DESCRIPTION</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-item-content">
                                    <div class="tab-content">
                                        <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                            <div class="product-content">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <p>'.$row["discription"] .'</p>
                                                    </div>
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';
                        }
                        else{
                            echo "no ctogory selected";
                            //echo '<script>alert("No Catagory Selected !");</script>';
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Product Shop Section End -->



        <!-- under items -->

        <div class="related-products spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Related Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img\slidephoto\photo.jpg" alt="">
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">xxxxx</div>
                                <a href="#">
                                    <h5>XXXXX</h5>
                                </a>
                                <div class="product-price">
                                    RS.00.00
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img\slidephoto\photo.jpg" alt="">
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">xxxxx</div>
                                <a href="#">
                                    <h5>XXXXX</h5>
                                </a>
                                <div class="product-price">
                                    RS.00.00
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img\slidephoto\photo.jpg" alt="">
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">xxxxx</div>
                                <a href="#">
                                    <h5>XXXXX</h5>
                                </a>
                                <div class="product-price">
                                    RS.00.00
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img\slidephoto\photo.jpg" alt="">
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">xxxxx</div>
                                <a href="#">
                                    <h5>XXXXX</h5>
                                </a>
                                <div class="product-price">
                                    RS.00.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- under items End -->



        <!-- Footer Section Begin -->

        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-left">
                            <div class="footer-logo">
                                <a href="home_page.php"><img src="img\slidephoto\logo2.png" alt="Medicare online pharmacy"></a>
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
                                <li><a href="check-out.php">Checkout</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="#">Services</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-widget">
                            <h5>My Account</h5>
                            <ul>
                                <li><a href="my_account.php">My Account</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="home_page.php">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4">
                        <div class="newslatter-item">
                            <h5>Join Our Newsletter Now</h5>
                            <p>Get E-mail updates about our latest shop and special offers.</p>
                            <form action="#" class="subscribe-form">
                                <input type="text" placeholder="Enter Your Mail">
                                <button type="button">Subscribe</button>
                            </form>
                        </div>
                    </div> -->
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

        <!-- <script>
            $('.passValue').click(function(){

            var quantity = document.getElementById("qut").value;

            $.ajax
            ({ 
            type:"POST",
            url: "check-out.php",
            data: {qunt : quantity},
            }).done(function(data) { 
                    console.log(data);
                    window.location.replace("check-out.php");
                    });
            });

    </script> -->

    <script type="text/javascript">
    function minmax(value, min, max) 
        {
            if(parseInt(value) < min || isNaN(parseInt(value))) 
                return min; 
            else if(parseInt(value) > max) 
                return max; 
            else return value;
        }
    </script> 
    
    
    <!-- function for add to cart -->
    
    <script>

        function add_to_cart(item_id){
            event.preventDefault();
           var x = item_id + "qtt";
           var item_qtt = document.getElementById(x).value;//save qtt



           // alert("Item id is : "+item_id + " quantity is : "+item_qtt+" added");

          //  item_code
         //   item_qtt

         $.ajax(
                {
                    type:"POST",
                    url: "tmp_add_to_cart.php",
                    data: {
                        add_to_cart : "kalhara",
                        item_code : item_id,
                        item_qtt : item_qtt,
                          },    
                    success: function (test) { 

                        console.log(test);

                        if(test == "Data added to array session"){
                            
                            alert("item added to cart");
                        }else{
                            alert("unable to item added to cart");
                        }
                        
                               
                    },
                    error: function (jqXhr, textStatus, errorMessage) { // error callback 
                               
                        alert("System error");
                    }
                });


        }


    </script>


</body>

</html>