<?php
    session_start();

    if(isset($_SESSION['auth'])){
        unset($_SESSION['auth']);
        unset($_SESSION['auth_user']);
        $_SESSION['message'] = "dang xuat thanh cong";
    }
    header('location: index.php');
?>