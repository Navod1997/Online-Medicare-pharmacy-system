

<!DOCTYPE html>
<html lang>

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
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
       <div class="loader"></div>
    </div>-->

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
                                <img src="img\slidephoto\logo1.png" alt="Medicare online pharmacy">
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

    <!-- Header End -->


    <!-- Breadcrumb Section Begin -->

    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="home_page.php"><i class="fa fa-home"></i> Home></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Breadcrumb Section Begin -->


    <!-- Product Shop Section Begin -->

    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">

                

                
                             <?php 

                            include 'db_connection.php';// connection
                            if(isset($_GET['type'])){   
                                $type = $_GET['type'];
                                //echo $cat."<br><br>" ;
                                

                            }
                            else{
                                //echo "no ctogory selected";
                                //echo '<script>alert("No Catagory Selected !");</script>';
                                $type="Medicine";
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
                                            <li><a href="view_items.php?cat='.$row["c_type"] .'"> <h6>'.$row["c_name"].'</h6></a></li>
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
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 ">
                                <div class="select-option">
                                    <select class="sorting">
                                        <option value="">Default Sorting</option>
                                    </select>
                                    <div class="col-lg-5 col-md-5 text-right">
                                       <p>Show 01- 09 Of 36 Product Kalhara</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-list">
                        <div class="row">

                        

                        <?php 

                        if(isset($_GET['cat'])){
                            $cat = $_GET['cat'];
                            //echo $cat."<br><br>" ;
                         

                             $sql = "SELECT * FROM item WHERE category_type='".$cat."'"; 
                            $result = mysqli_query($connection, $sql);
                                    
                                if($result->num_rows>0){
                                        while($row=$result->fetch_assoc()){
                                    //echo "item name:".$row["item_name"] ."unit_price:".$row["unit_price"] ."<br>" ;

                              echo    
                                    ' 
                                        <div class="col-lg-4 col-sm-6" >
                                            <div class="product-item">
                                                <div class="pi-pic">
                                                <img src="'.$row["data_path"] .'" alt="'.$row["item_name"].'">
                                                </div>
                                            <div class="pi-text">
                                            <div class="catagory-name">'.$cat.'</div>
                                             <a href="product.php">
                                            <h5>'.$row["item_name"].'</h5>
                                        </a>
                                        <div class="product-price">
                                        RS.'.$row["unit_price"].'
                                        </div>
                                        <a href="item.php" class="primary-btn pd-cart">ODER NOW</a>
                                    </div>
                                </div>
                            </div>';


                                }


                                echo '

                                <div class="loading-more">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                                </div>

                                
                                ';


                            }
                            else{

                                echo "no result found";
                                //echo '<script>alert("No Results Found");</script>';
                            }
                            $connection->close();

                        }
                        else{
                            echo "no ctogory selected";
                            //echo '<script>alert("No Catagory Selected !");</script>';
                        }

                        ?>
      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Shop Section End -->


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
                            <a href="#"><i class="fa fa-whatsapp"></i></a>
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
                            <li><a href="My Accoun">My Account</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="home_page.php">Shop</a></li>
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
                            <img src="img\slidephoto\payment-method.png" alt="">
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
</body>

</html>