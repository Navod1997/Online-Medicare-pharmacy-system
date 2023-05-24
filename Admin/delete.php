<!DOCTYPE html>
<html lang>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">

  <title>Admin_panale</title>
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/colors/blue.css" id="theme" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="sweetalert2.min.js"></script>
</head>

<body class="fix-header fix-sidebar card-no-border">

  <?php

  if (isset($_GET["id"])) {

    include 'db_connection.php';
    
    $id = $_GET["id"];

    $req = $_GET["req"];

    if ($req == "itemdelete") {
      $table = "item";
      $checkSql = "SELECT oder_id FROM orderitem WHERE iteam_id = '.$id.'";
      $runChecksql = $connection->query($checkSql);
      $resChecksql = mysqli_fetch_array($runChecksql);
      // var_dump(mysqli_num_rows($runChecksql));
      if(mysqli_num_rows($runChecksql) == 0){
        $sql = "DELETE FROM $table WHERE item_id='" . $id . "'";
      }else{
        $order_count = 0;
          $checkSql2 = "SELECT count(ord.order_id) AS order_id FROM orders AS ord JOIN orderitem AS ordit ON  ord.order_id = ordit.oder_id WHERE order_id = ".$resChecksql['oder_id']." AND status != 'deliver'";
          $runChecksql2 = $connection->query($checkSql2);
          $resChecksql2 = $runChecksql2->fetch_array();
          $order_count = $resChecksql2['order_id'];
          // var_dump($resChecksql2['order_id']);
          if($order_count == 0){
            $sql = "DELETE FROM $table WHERE item_id='" . $id . "'";
          }else{
            $req ="deletefail";
            $sql = "UPDATE  $table SET item_id = 0 WHERE item_id = 0";
          }
      }
      
    }else if($req == 'citydelete'){
      $sql = "DELETE FROM `delivary_citys` WHERE city_id ='" .$id. "'";
    } else {
      $req ="category";
      $table = "category";
      $sql = "DELETE FROM $table WHERE c_id='" . $id . "'";
    }
// echo ''.$connection->query($sql);
    if ($connection->query($sql) === TRUE) {
      
      if ($req == "itemdelete") {

        echo '<script>swal("Delete success!", "Delete success.!", "success").then (function(){
          window.location = "Store.php" ;
      });
          </script>';
       
      }
      else if($req=='citydelete'){
        echo '<script>swal("Delete success!", "Delete success.!", "success").then (function(){
          window.location = "delivery_city.php" ;
      });
          </script>';
      }
      else if($req=='itemdelete'){
        echo '<script>swal("Delete success!", "Delete success.!", "success").then (function(){
          window.location = "delivery_city.php" ;
      });
          </script>';
      } else if($req == "deletefail"){

        echo '<script>swal("Delete Error!", "Items can not be deleted.!,In Progress", "error").then (function(){
        window.location  = "Store.php" ;
       });
        </script>';
      } else {

        echo '<script>swal("Delete success!", "Delete success.!", "success").then (function(){
        window.location = "category.php" ;
      });
        </script>';
      }

    } else {

      if ($req == "itemdelete") {

        echo '<script>swal("Delete Error!", "Items can not be delelt.!", "error").then (function(){
          window.location = "Store.php" ;
      });
          </script>';
      } else {

        echo '<script>swal("Delete Error!", "Items can not be delelt.!", "error").then (function(){
        window.location  = "category.php" ;
       });
        </script>';
      }
    }



    $connection->close();
  }





  ?>
</body>

</html>