<?php
    /* 
     * session_start();
     * Starting a new session before clearing it
     * assures you all $_SESSION vars are cleared 
     * correctly, but it's not strictly necessary.
     */
    unset($_SESSION['cart_items']);
    unset($_SESSION['item_qtt']);
    header('Location: testcheckout.php'); 
    /* Or whatever document you want to show afterwards */
?>