<?php

    session_start();
    include('../config/dbcon.php');
    include('../functions/myfunction.php');

    if(isset($_POST['add_loaisp_btn'])){
        $TenLoaiSP = $_POST['TenLoaiSP'];

        $loaisp_query = "INSERT INTO loaisp (TenLoaiSP) VALUES ('$TenLoaiSP')";
        $loaisp_query_run = mysqli_query($con, $loaisp_query);

        if($loaisp_query_run){
            redirect("index.php", "đã thêm loại sản phẩm");
        }else{
            redirect("../admin/QuanLyDanhMuc/addLoaiSP.php", "chưa thêm được loại sản phẩm");
        }

    }
    else if(isset($_POST['add_hsx_btn'])){
        $TenHSX = $_POST['TenHSX'];

        $hsx_query = "INSERT INTO hsx (TenHSX) VALUES ('$TenHSX')";
        $hsx_query_run = mysqli_query($con, $hsx_query);

        if($hsx_query_run){
            redirect("index.php", "đã thêm hắng sản xuất");
        }else{
            redirect("../admin/QuanLyDanhMuc/addHSX.php", "chưa thêm được hắng sản xuất");
        }

    }
    else if(isset($_POST['add_mau_btn'])){
        $TenMau = $_POST['TenMau'];

        $color_query = "INSERT INTO colors (TenMau) VALUES ('$TenMau')";
        $color_query_run = mysqli_query($con, $color_query);

        if($color_query_run){
            redirect("index.php", "đã thêm màu");
        }else{
            redirect("../admin/QuanLyDanhMuc/addColors.php", "chưa thêm màu");
        }

    }
    else if(isset($_POST['edit_loaisp_btn'])){
        $MaLoaiSP = $_POST['MaLoaiSP'];
        $TenLoaiSP = $_POST['TenLoaiSP'];

        $editloai_query = "UPDATE loaisp SET TenLoaiSP='$TenLoaiSP' WHERE id = '$MaLoaiSP'";
        $editloai_query_run = mysqli_query($con, $editloai_query);
        if($editloai_query_run){
            redirect("category.php", "Loại sản phẩm được sửa");
        }else{
            redirect("editLoaiSP.php?id=$MaLoaiSP", "Loại sản phẩm chưa được sửa");
        }
    }
    else if(isset($_POST['edit_hsx_btn'])){
        $MaHSX = $_POST['MaHSX'];
        $TenHSX = $_POST['TenHSX'];

        $edithsx_query = "UPDATE hsx SET TenHSX='$TenHSX' WHERE id = '$MaHSX'";
        $edithsx_query_run = mysqli_query($con, $edithsx_query);
        if($edithsx_query_run){
            redirect("category.php", "Hãng đã được sửa");
        }else{
            redirect("editHSX.php?id=$MaHSX", "Hãng chưa được sửa");
        }
    }
    else if(isset($_POST['edit_mau_btn'])){
        $MaMau = $_POST['MaMau'];
        $TenMau = $_POST['TenMau'];

        $editmau_query = "UPDATE colors SET TenMau='$TenMau' WHERE id = '$MaMau'";
        $editmau_query_run = mysqli_query($con, $editmau_query);
        if($editmau_query_run){
            redirect("category.php", "Hãng đã được sửa");
        }else{
            redirect("editMau.php?id=$MaHSX", "Hãng chưa được sửa");
        }
    }
    else if(isset($_POST['delete-loai'])){
        $MaLoaiSP = mysqli_real_escape_string($con, $_POST['MaLoaiSP']);

        $delete_query = "DELETE FROM loaisp WHERE id = '$MaLoaiSP'";
        $delete_query_run = mysqli_query($con, $delete_query);
        if($delete_query_run){
            redirect("category.php", "Xóa Thành công");
        }else{
            redirect("category.php", "Chưa xóa");
        }
    }
    else if(isset($_POST['delete-hsx'])){
        $MaHSX = mysqli_real_escape_string($con, $_POST['MaHSX']);

        $delete_query = "DELETE FROM hsx WHERE id = '$MaHSX'";
        $delete_query_run = mysqli_query($con, $delete_query);
        if($delete_query_run){
            redirect("category.php", "Xóa Thành công");
        }else{
            redirect("category.php", "Chưa xóa");
        }
    }
    else if(isset($_POST['delete-mau'])){
        $MaMau = mysqli_real_escape_string($con, $_POST['MaMau']);

        $delete_query = "DELETE FROM colors WHERE id = '$MaMau'";
        $delete_query_run = mysqli_query($con, $delete_query);
        if($delete_query_run){
            redirect("category.php", "Xóa Thành công");
        }else{
            redirect("category.php", "Chưa xóa");
        }
    }
    else if(isset($_POST['add_product_btn'])){
        $TenSP = $_POST['TenSP'];
        $MaMau = $_POST['MaMau'];
        $MaHangSanXuat = $_POST['MaHangSanXuat'];
        $MaLoaiSP = $_POST['MaLoaiSP'];
        $NgayNhapKho = $_POST['NgayNhapKho'];
        $SoLuongSP = $_POST['SoLuongSP'];
        $ThoiGianBaoHanh = $_POST['ThoiGianBaoHanh'];
        $GioiThieuSP = $_POST['GioiThieuSP'];
        $GiaSP = $_POST['GiaSP'];

        $Anh = $_FILES['Anh']['name'];
        $path = "../uploads";
        
        $image_ext = pathinfo($Anh, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_ext;

        if($TenSP != "" && $GioiThieuSP != "" && $GiaSP != "" && $NgayNhapKho != "" && $SoLuongSP != "")
        {
            $product_query = "INSERT INTO products (TenSP, MaMau, MaHangSanXuat, MaLoaiSP, NgayNhapKho, SoLuongSP, ThoiGianBaoHanh, GioiThieuSP, Anh, GiaSP) 
            VALUES ('$TenSP', '$MaMau', '$MaHangSanXuat', '$MaLoaiSP', '$NgayNhapKho', '$SoLuongSP', '$ThoiGianBaoHanh', '$GioiThieuSP', '$filename', '$GiaSP')";

            $product_query_run = mysqli_query($con, $product_query);
            if($product_query_run)
            {
                move_uploaded_file($_FILES['Anh']['tmp_name'], $path.'/'.$filename);

                redirect("index.php", "them thanh cong");
            }
            else{
                redirect("addProduct.php", "them ko thanh cong");
            }
        }else
        {
            redirect("addProduct.php", "nhap day du");
        }


    }
    else if(isset($_POST['edit_product_btn'])){
        $product_id = $_POST['product_id'];
        $TenSP = $_POST['TenSP'];
        $MaMau = $_POST['MaMau'];
        $MaHangSanXuat = $_POST['MaHangSanXuat'];
        $MaLoaiSP = $_POST['MaLoaiSP'];
        $NgayNhapKho = $_POST['NgayNhapKho'];
        $SoLuongSP = $_POST['SoLuongSP'];
        $ThoiGianBaoHanh = $_POST['ThoiGianBaoHanh'];
        $GioiThieuSP = $_POST['GioiThieuSP'];
        $GiaSP = $_POST['GiaSP'];

        $path = "../uploads";

        $Anhmoi = $_FILES['Anh']['name'];
        $Anhcu = $_POST['Anhcu'];

        if($Anhmoi != "")
        {    
            $image_ext = pathinfo($Anhmoi, PATHINFO_EXTENSION);
            $update_filename = time().'.'.$image_ext;
        }
        else
        {
            $update_filename = $Anhcu;
        }
        $update_product_query = "UPDATE products SET 
        TenSP = '$TenSP', MaMau = '$MaMau', MaHangSanXuat = '$MaHangSanXuat', MaLoaiSP = '$MaLoaiSP',
         NgayNhapKho = '$NgayNhapKho', SoLuongSP = '$SoLuongSP', ThoiGianBaoHanh = '$ThoiGianBaoHanh',
          GioiThieuSP = '$GioiThieuSP', Anh = '$update_filename', GiaSP = '$GiaSP' WHERE id = '$product_id'";
        $update_product_query_run = mysqli_query($con, $update_product_query);

        if($update_product_query){
            if($_FILES['Anh']['name'] != ""){
                move_uploaded_file($_FILES['Anh']['tmp_name'], $path.'/'.$update_filename);
                if(file_exists("../uploads".$Anhcu)){
                    unlink("../uploads".$Anhcu);
                }
            }
            redirect("index.php", "sua thanh cong");
        }
        else{
            redirect("editProduct.php", "sua khong thanh cong");
        }

    }
    else if(isset($_POST['deleteProduct'])){
        $productid = mysqli_real_escape_string($con, $_POST['productid']);

        $product_query = "SELECT * FROM products WHERE id = '$productid'";
        $product_query_run = mysqli_query($con, $product_query);
        $product_data = mysqli_fetch_array($product_query_run);
        $Anh = $product_data['Anh'];

        $delete_query = "DELETE FROM products WHERE id = '$productid'";
        $delete_query_run = mysqli_query($con, $delete_query);
        if($delete_query_run)
        {
            if(file_exists("../uploads".$Anh))
            {
                unlink("../uploads".$Anh);
            }
            redirect("index.php", "Xóa Thành công");
        }else{
            redirect("index.php", "Chưa xóa");
        }
    }
    else if(isset($_POST['edit_baohanh_btn'])){
        $NgayHetBaoHanh = $_POST['NgayHetBaoHanh'];
        $baohanhid = $_POST['baohanhid'];

        $editbh_query = "UPDATE baohanh SET ngayketthucbaohanh='$NgayHetBaoHanh' WHERE id = '$baohanhid'";
        $editbh_query_run = mysqli_query($con, $editbh_query);
        if($editbh_query_run){
            redirect("danhsachspban.php", "Đã tạo bảo hành");
        }else{
            redirect("danhsachspban.php", "Chưa tạo");
        }

    }
    else{
        header('location: ../index.php');
    }
?>