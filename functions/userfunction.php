<?php
    include("usercon.php");

    function getAllcate($table)
    {
        global $con;
        $query = "SELECT * FROM $table";
        return $query_run = mysqli_query($con, $query);
    }

    function getNameTheoCate($table, $id)
    {
        global $con;
        $query = "SELECT * FROM $table WHERE id = '$id'";
        return $query_run = mysqli_query($con, $query);
    }

    function getSPtheoUser($table, $user_id)
    {
        global $con;
        $query = "SELECT * FROM $table WHERE MaTK = '$user_id'";
        return $query_run = mysqli_query($con, $query);
    }

    function getHDtheoUser($table, $user_id)
    {
        global $con;
        $query = "SELECT * FROM $table WHERE userid = '$user_id'";
        return $query_run = mysqli_query($con, $query);
    }

    function getCTHDtheoHD($table, $hoadon_id)
    {
        global $con;
        $query = "SELECT * FROM $table WHERE MaHoaDon = '$hoadon_id'";
        return $query_run = mysqli_query($con, $query);
    }

    function getProductByHSX($id)
    {
        global $con;
        $query = "SELECT * FROM products WHERE MaHangSanXuat = '$id'";
        return $query_run = mysqli_query($con, $query);
    }

    function getProductByLoai($id)
    {
        global $con;
        $query = "SELECT * FROM products WHERE MaLoaiSP = '$id'";
        return $query_run = mysqli_query($con, $query);
    }

    function getSumcart($user_id)
    {
        global $con;
        $query = "SELECT MaSP FROM carts WHERE MaTK = '$user_id'";
        return $query_run = mysqli_query($con, $query);
    }

    function getName($name)
    {
        global $con;
        $query = "SELECT * FROM products WHERE TenSP = '$name'";
        return $query_run = mysqli_query($con, $query);
    }
    function getAllcthd($table, $id)
    {
        global $con;
        $query = "SELECT * FROM $table WHERE cthdid = '$id'";
        return $query_run = mysqli_query($con, $query);
    }
    function redirect($url, $message){
        $_SESSION['message'] = $message;
        header('location: '.$url);
        exit();
    }

?>