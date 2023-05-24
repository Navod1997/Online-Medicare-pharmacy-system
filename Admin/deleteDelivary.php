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
      $sql = "DELETE FROM $table WHERE item_id='" . $id . "'";
    } else {
      $req ="category";
      $table = "category";
      $sql = "DELETE FROM $table WHERE c_id='" . $id . "'";
    }


    $sql = "DELETE FROM delivary_citys WHERE city_id='" . $id . "'";

    if ($connection->query($sql) === TRUE) {

      if ($req == "itemdelete") {

        echo '<script>swal("Delete success!", "Delete success.!", "success").then (function(){
          window.location = "category.php" ;
      });
          </script>';
        // echo '<script>swal.fire({
        //   title: "Are you sure?",
        //   text: "Once deleted, you will not be able to recover this imaginary file!",
        //   icon: "warning",
        //   buttons: true,
        //   dangerMode: true,
        // })
        // .then((willDelete) => {
        //   if (willDelete) {
        //     swal("Poof! Your imaginary file has been deleted!", {
        //       icon: "success",
        //     });
        //   } else {
        //     swal("Your imaginary file is safe!");
        //   }
        //   window.location = "Store.php" ;
        // });
        //   </script>';

      }
     //  else if($req == "category"){
      //   echo "<script>
      //   const swalWithBootstrapButtons = Swal.mixin({
      //     customClass: {
      //       confirmButton: 'btn btn-success',
      //       cancelButton: 'btn btn-danger'
      //     },
      //     buttonsStyling: false
      //   })
        
      //   swalWithBootstrapButtons.fire({
      //     title: 'Are you sure?',       
      //     icon: 'warning',
      //     showCancelButton: true,
      //     confirmButtonText: 'Yes, delete it!',
      //     cancelButtonText: 'No, cancel!',
      //     reverseButtons: true
      //   }).then((result) => {
      //     if (result.isConfirmed) {
      //       swalWithBootstrapButtons.fire(
      //         'Deleted!',
      //         'Your file has been deleted.',
      //         'success'
      //       )
      //     } else if (
      //       /* Read more about handling dismissals below */
      //       result.dismiss === Swal.DismissReason.cancel
      //     ) {
      //       swalWithBootstrapButtons.fire(
      //         'Cancelled',
      //         'Your imaginary file is safe :)',
      //         'error'
      //       )
      //     }
      //   })
      //   </script>";
      // }
      else {

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