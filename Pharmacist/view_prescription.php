<?php
//Database connection 
include 'db_connection.php';
session_start();

if(isset($_SESSION["pharmacist_id"])){
    

    if(!empty($_GET['id'])){
        $_SESSION['itmTmpId']=$_GET['id'];
    }
    
}
else{
    header("location:../home_page.php");
}
?>

<!DOCTYPE html>
<html lang>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="img\slidephoto\images.png">
    
    <title>pharmacist_panale</title>
    
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script src='js/jquery.zoom.js'></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!--<div class="preloader">-->
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <!-- Main wrapper-->
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                            <img src="assets\images\logo2.png" alt="homepage" class="light-logo" style="width:140px;">
                </div>
                <!-- Search -->
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li> 
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>
                    <!-- Profile -->
                    <div class="ht-right">
                         <a href="my_account.php" class="login-panel"><i class="fa fa-user" style="width:50px;"></i></a>
                          <a href="../logout.php" class="login-panel"><i class="fa fa-sign-out" style="width:50px;"></i></a>
                    <div class="lan-selector">
                    </div>
                    </div>
                </div>
            </nav>
        </header>
        <!--End Main wrapper-->

        <!-- Sidebar-->
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark.active" href="Category.php" aria-expanded="false"><i class="fa fa-window-maximize"></i><span class="hide-menu">Category</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="Store.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Store</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="users.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Users</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="oders.php" aria-expanded="false"><i class="mdi mdi-earth"></i><span class="hide-menu">oders</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- End Sidebar scroll-->
       
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                    <h3 class="text-themecolor">View order</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">View order</li>
                        </ol>
                    </div>
                </div>
            
        <!-- End Page wrapper  -->

           
        <!-- category -->

        <div class="container content-invoice">
            <div class="load-animate animated fadeInUp">
            <div class="card"  > 
                <div class="container">
                <div class="row">

                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <h2 class="title">Medicare pharmacy</h2>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ht-right">
                    <p>Date/Time: <span id="datetime"></span></p>
                <script>
                    var dt = new Date();
                    document.getElementById("datetime").innerHTML = dt.toLocaleString();
                </script>
                </div>

                </div>

                <input id="currency" type="hidden" value="$">
                <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
                    <h3>From</h3>
                        <h6> Medicare pharmacy </h6>
                        <h6> Main rode </h6>
                        <h6> Matara </h6>
                        <h6> 0715236981 </h6>
                        <h6> Medicarepharmacy@gmail.com </h6><br>

                   
                     
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ht-right">

                    <h3>To,</h3>

                    <?php


                        if(isset($_GET['id'])){


                            $id = $_GET['id'];
                            
                            include 'db_connection.php';

                            $sql = "SELECT * FROM orders WHERE order_id ='".$id."'" ; 
                            $result = mysqli_query($connection, $sql);
    
                            if($result->num_rows>0){
                                    $row = mysqli_fetch_assoc($result);
                                    $status= $row['status'];
                                    $id = $row["order_id"];
    
                            echo    
                                    ' 
                                    
                                        <h5>'.$row["first_name"] .'</h5>
                                        <h5>'.$row["address"] .'</h5>
                                        <h5>'.$row["phone_number"] .'</h5>
                                        
                                            
                                    
                                    
                                    ';
    
                            }
                            else{
    
                                echo "no result found";
                                //echo '<script>alert("No Results Found");</script>';
                            }



                        }

                       
                        //$connection->close();



                    ?>
                                            
                </div>
            </div>

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <!-- <input type="submit" class="button add_another" value="Add another line" onclick="addField(this);" /> -->
                <table class="table table-striped table-responsive-md table-bordered my-5" style="width:100%" id="table1">
                <form method="POST" action="" name="addItem" enctype="multipart/form-data">
                    <tr>
                    <th width="15%">Item No</th>
                    <th width="38%">Item Name</th>
                    <th width="15%">Quantity</th>
                    <th width="15%">Price</th>
                    <th width="15%">Total</th>
                    <th width="20%">Add</th>
                   </tr>


                <tr>
                               
                    <!-- <td> <h5><input type="text" name="item_number" class="form-control" placeholder="item_number *" value="" required/></h5> </td> -->
                    <td>
                        
                        <select class="form-select" aria-label="Default select example" id="my_select">
                            <option selected>Choose item</option>
                            <?php
                            $itemListSql = "SELECT item_id,o_max_qut FROM `item`";
                            $itemListQuery = mysqli_query($connection, $itemListSql);
                           // $itemListRow = mysqli_fetch_assoc($itemListQuery);
                            while($itemListRow=$itemListQuery->fetch_assoc()){

                               echo'
                               <option name='.$itemListRow['o_max_qut'].' value='.$itemListRow['item_id'].' id='.$itemListRow['item_id'].'>'.$itemListRow['item_id'].'</option>
                               ';
                            }
                            ?>
                            </select>
                    </td>
                    <td class = "item_name"> <h5><input type="text" name="item_name" id="item_name" class="form-control" placeholder="Iteam Name *" readonly /></h5> </td>
                    <td class = "quantity"> <h5><input type="number" name="quantity" id="quantity" class="form-control" placeholder="quantity *" min="1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" value="" required/></h5> </td>
                    <td class = "unitPrice"> <h5><input type="text" name="price" id="unitPrice" class="form-control" placeholder="Price *"  readonly/></h5> </td>
                    <td > <h5><input type="text" name="total" id="total" class="form-control" placeholder="total *"  readonly/></h5> </td>
                    <td class="add_another"> <i class="fa fa-plus "></i> </td>                
                </tr>
                
                </form>
                </table>
                </div>
                </div>

        <!-- display add items -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h5>Added items</h5>
                        <form method="POST" action="" enctype="multipart/form-data">
                            <table class="table table-striped table-responsive-md table-bordered my-5" style="width:100%" id="table2">
                        
                                     <thead>
                                            <tr>
                                            <th width="15%">Item No</th>
                                            <th width="38%">Item Name</th>
                                            <th width="15%">Quantity</th>
                                            <th width="15%">Price</th>
                                            <th width="15%">Total</th>
                                            <th width="15%">Remove</th>
                                        </tr>
                                    </thead>
                                    
                                    
                                    <!-- <tr>       
                                        <td> <h5><input type="text" name="item_number" class="form-control" placeholder="item_number *" value="" required/></h5> </td>
                                        <td> <h5><input type="text" name="item_name" id="item_name" class="form-control" placeholder="Iteam Name*" value="" required/></h5> </td>
                                        <td> <h5><input type="text" name="quantity" class="form-control" placeholder="quantity *" value="" required/></h5> </td>
                                        <td> <h5><input type="text" name="price" id="unitPrice" class="form-control" placeholder="Price *" value="" required/></h5> </td>
                                        <td> <h5><input type="text" name="total" class="form-control" placeholder="total *" value="" required/></h5> </td>
                                        <td> <i class="fa fa-trash"></i> </td>                                    
                                    </tr> -->
                            </table>
                        </form>
                    </div>
                </div>
    <!-- display add items -->

                <div class="float-sm-right">
                    
                    
                    <div class="form-group">
                        <label>Total:  </label>
                        <div class="input-group">
                            <div class="input-group-addon currency">Rs</div>
                                <input value="0.00" type="text" class="form-control" name="totalAftertax" id="allTotal" readonly >
                            </div>
                        </div>
                    </div>
                    </div>

        

            <div class="row">
            <div class="container">
            <form action="" method="POST">
                <input type="hidden" name="userId" value='<?php echo $row["user_id"]; ?>'>
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
                    <h3>Notes: </h3>
                    <div class="form-group">
                    <span class='zoom' id='preimg'>
                        <img src='../upload/<?php echo $row["prescriptionImg"]; ?>' width='555' height='320' alt='precriptionImage'/>
                    </span>
                    </div>
                    <br>

                    <?php 
                    if($status=="pending"){
                        echo '<div class="row">
                        <div class="form-group">
                            <input type="submit" name="Accept" value="Accept Order"  href="Admin\oders.php"  class="btn btn-success submit_btn invoice-save-btm">
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                <input type="submit" name="Reject" value="Reject Order"  class="btn btn-danger">
                            </div>
                        </div>
                    </div>';
                    }
                ?>
            </form>
                
                 <!-- print invoice -->
                <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
                    <p>invoice print :
                     <a href="<?php echo "invoice.php?order_id=".$id ;  ?>"  class="login-panel"><i class="fa fa-print" aria-hidden="true"></i></a></p>
                </div>
                
                <!-- print email -->
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <p>Send e_mail :
                     <a href="<?php echo "invoice.php?order_id=".$id ;  ?>"  class="login-panel"><i class="fa fa-envelope" aria-hidden="true"></i></a></p>
                </div>
                </div>
                
            </div>
            </div>
         
        
        </div>

        

        <!-- order insert -->

            <?php
                        

                        if(isset($_POST["Accept"])){

                            if(!empty($_SESSION['cart_items'])){

                                    
                            
                            //echo '<script>alert("'.$oderinsert.'")</script>';

                            $user_id =$_POST['userId'];
                            ////get order id////
                            // $Ordersql = "SELECT order_id FROM orders Where user_id='".$user_id."' ORDER BY order_id DESC;"; 
                            // $OrderIdresult = mysqli_query($connection, $Ordersql);
                            // $checkOrderIdResult = mysqli_num_rows($OrderIdresult);
                            // $row = mysqli_fetch_row($OrderIdresult);
                            $latestId= $_SESSION['itmTmpId'];
                            
                            $sql = 'UPDATE `orders` SET `status`="accept" WHERE order_id = '.$_SESSION['itmTmpId'].'' ;
                            $OrderIdresult = mysqli_query($connection, $sql);

                            ////update quantitiy////

                            $cartItemsId = $_SESSION['cart_items'];
                            $countItemQnt =$_SESSION['item_qtt'];


                            $arrLength = count($countItemQnt);

                            // loop through the array

                            ///

                            for($i = 0; $i < $arrLength; $i++) {

                                // echo '<br>';
                                $itemcode = $cartItemsId[$i];
                                $quntity = $countItemQnt[$i];    
                                // echo '<br>';

                                $getItemQuntity = "SELECT quantity FROM item Where item_id='".$itemcode."'";
                                $getItemQuntityResult = mysqli_query($connection, $getItemQuntity);

                                $row = mysqli_fetch_assoc($getItemQuntityResult);
                                
                                $currntQnt= (int)$row['quantity'];

                                /////check valid quntity///////
                                if($currntQnt >= (int)$quntity){
                                    $updateQnt= $currntQnt - (int)$quntity;
                                
                                    $updateQntStatus = "UPDATE `item` SET `quantity`='".$updateQnt."' Where item_id='".$itemcode."'";
                
                                    $getItemQuntityResult = mysqli_query($connection, $updateQntStatus);
                                
                                }else{
                                    echo"Order quntity invalid";
                                }
                                
                                
                                ///// insert order details to order items table////

                                        
                                        if(!empty($_SESSION['cart_items'])){

                                        $orderiteminsert = "INSERT INTO `orderitem` (`oder_id`, `iteam_id`, `qty`) 
                                        VALUES ('".$latestId."', '".$itemcode."','".$quntity."')";
                                            if ($connection->query($orderiteminsert) === TRUE) {
                                                unset($_SESSION['cart_items']);
                                                unset($_SESSION['item_qtt']);

                                                echo '<script>swal("Order accept!", "Order is accept.!", "success").then (function(){
                                                    window.location = "oders.php" ;
                                                });
                                                    </script>';
                                            
                                            } else {
                                            echo "Error: ".  "<br>" . $connection->error;
                                            }

                                        
                                            
                                        }



                            }

                        }else{
                            echo'<script>alert("pleas add the item")</script>';
                        }
                       

                                
                    }

                    if(isset($_POST["Reject"])) {

                        $number ="94".$_SESSION['cNumber'];
                        $msg="Your order rejected.order reference id is: ".$_GET["id"].". Thank you!";
                       // include('../sms/send.php');
                        $order_id = $_SESSION['itmTmpId'];
    
                        $sql = 'UPDATE `orders` SET `status`="reject" WHERE order_id = '.$order_id.'' ;
    
                                if ($connection->query($sql) === TRUE) {
                                    echo '<script>swal("Order Reject!", "Order is accept.!", "error").then (function(){
                                        window.location = "oders.php" ;
                                    });
                                        </script>';
                                }

                    }
                            
            ?>
        <!-- end order insert -->

    
    <!-- All Jquery -->
    <!-- <script src="assets/plugins/jquery/jquery.min.js"></script> -->
    <script src="assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/custom.min.js"></script>


     <!-- javascript libraries -->
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap4.min.js"></script>
    <!-- <script src="../assets/js/jquery-3.2.1.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <style>
        { border:0; margin:0; padding:0; }
		.zoom {
			display:inline-block;
			position: relative;
		}

    </style>
    
    <script>
		$(document).ready(function(){
			$('#preimg').zoom({ on:'click' });
		});
	</script>
  


    <script>
        var $output = $("#total");
            $("#quantity").change(function() {
                var unitPrice = parseFloat(document.getElementById("unitPrice").value);
                var value = parseFloat($(this).val());
                var total = value*unitPrice;
                var total = parseFloat(total.toFixed(2));
                $output.val(total);
            });
    </script>

    <script>
    $('document').ready(function() {

        $("#table1").on('click','.add_another',function(){
                // get the current row


                var grandTotal= parseFloat(document.getElementById("allTotal").value);
                var currentRow=$(this).closest("tr"); 
                var id=currentRow.find("td:eq(0) select option:selected").val(); // get current row 1st TD value
                var itemName=currentRow.find("td:eq(1) input[type='text']").val(); // get current row 2rd TD
                var quantity=currentRow.find("td:eq(2) input[type='text']").val(); // get current row 3rd TD
                var price=currentRow.find("td:eq(3) input[type='text']").val(); // get current row 4rd TD
                var total=currentRow.find("td:eq(4) input[type='text']").val(); // get current row rd TD


                //var data=col1+"\n"+"\n"+col3;
               // alert(id);



               //// check quntity and item name empty or not/////
                var quantity = document.forms["addItem"]["quantity"].value;
                var item_name = document.forms["addItem"]["item_name"].value;

                    if (quantity == "") {
                        alert("quantity must be filled out");
                        return false;
                    }
                    if (item_name == "") {
                        alert("Item Name must be filled out");
                        return false;
                    }
                ////////////////////////add item//////////////////////////
                var item_id = id;
                var item_qtt = quantity;
                $.ajax(
                {
                    type:"POST",
                    url: "../tmp_add_to_cart.php",
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
                ///////////////////////////////////////////////////////////
                $("#table2").append('<tr><td> <h5><input type="text" name="item_number" class="form-control" placeholder="item_number *" value="'+id+'" required readonly /></h5> </td><td> <h5><input type="text" name="item_name" id="item_name" class="form-control" placeholder="Iteam Name *" value="'+itemName+'" required readonly/></h5> </td><td> <h5><input type="text" name="quantity" class="form-control" placeholder="quantity *" value="'+quantity+'" required readonly/></h5> </td><td> <h5><input type="text" name="price" id="unitPrice" class="form-control" placeholder="Price *" value="'+price+'" required readonly/></h5> </td><td> <h5><input type="text" name="total" class="form-control" *" value="'+total+'" id="total'+id+'" readonly/></h5> </td><td > <button onclick="deleteRow(this,'+id+')"> <i class="fa fa-trash"></i></button></td></tr>');
                grandTotal=parseFloat(grandTotal+parseFloat(total));
                document.getElementById("quantity").value = "";
                document.getElementById("total").value = "";
                document.getElementById("item_name").value = "";
                document.getElementById("unitPrice").value = "";
                document.getElementById("my_select").value = "";
                document.getElementById("allTotal").value = grandTotal;
            });
        
       
    })

    function deleteRow(row,x){
        var grandTotal = parseFloat(document.getElementById("allTotal").value);
        var d = row.parentNode.parentNode.rowIndex;
        totalid ="total"+x;
        var tot =document.getElementById(totalid).value;
        grandTotal =parseFloat(grandTotal-parseFloat(tot));
        document.getElementById("allTotal").value = grandTotal; 
        remove_item_from_cart(x);
        document.getElementById('table2').deleteRow(d);

        
    }

    function remove_item_from_cart(item_id){
        var x = item_id;
        $.ajax({
            type:"POST",
            url: "../tmp_add_to_cart.php",
            data: {
                remove_from_cart : "kalhara",
                item_code : item_id,
                },    
            success: function (test) { 

                console.log(test);

                if(test == "Data remove from array session"){
                    
                    alert("item delete from cart");
                    //location.reload(1);
                }else{
                    alert("unable to remove item from cart");
                }
                
                        
            },
            error: function (jqXhr, textStatus, errorMessage) { // error callback 
                        
                alert("System error");
            }
        });
    }

    </script>

   
   <script>
    $("#my_select").change(function() {

        var id = $(this).children(":selected").attr("id");
        var name = $(this).children(":selected").attr("name");
        
        
        $.ajax(
                {
                    type:"POST",
                    url: "itemDetails.php",
                    data: {
                        item_code : id,

                          },    
                    success: function (test) { 

                        console.log(test);
                        var my_arr = test.split(",");
                        var itemName = my_arr[0];
                        var itemUnitPrice = my_arr[1];
                        //console.log("item name is :"+itemName+" "+"item unitPrice is :"+itemUnitPrice);
                        document.getElementById("item_name").value =itemName;
                        document.getElementById("unitPrice").value =itemUnitPrice;
                        document.getElementById("quantity").max = name;
                               
                    },
                    error: function (jqXhr, textStatus, errorMessage) { // error callback 
                               
                        alert("System error");
                    }
                });

            });
    </script>

    

</body>

</html>