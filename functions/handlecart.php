<?php
    session_start();
    include('usercon.php');
    include('userfunction.php');

    if(isset($_POST['addcart'])){
        if(isset($_SESSION['auth']))
        {
            $user_id = $_SESSION['auth_user']['user_id']; 
            $prod_id = $_POST['product_id'];

            $insert_query = "INSERT INTO carts (MaTK, MaSP) VALUES ('$user_id', '$prod_id')";
            $insert_query_run = mysqli_query($con, $insert_query);

            if($insert_query_run){
                redirect("../index.php", "đã cho vào rỏ");
            }else{
                redirect("", "chưa thêm được loại sản phẩm");
            }
        }else{
            redirect("../login.php", "chua dang nhap");
        }
        
    }
    
    else if(isset($_POST['delete-cart'])){
        $cartid = mysqli_real_escape_string($con, $_POST['cartid']);

        $delete_query = "DELETE FROM carts WHERE id = '$cartid'";
        $delete_query_run = mysqli_query($con, $delete_query);
        if($delete_query_run){
            redirect("../cart.php", "Xóa Thành công");
        }else{
            redirect("../index.php", "Chưa xóa");
        }
    }

    else if(isset($_POST['submit'])){
        $search = $_POST['search'];
        $search_query = "SELECT * FROM products WHERE TenSP = '$search'";
        $search_query_run = mysqli_query($con, $search_query);

        if($search_query_run){
            redirect("../productsearch.php?search=$search", "Tìm thấy sản phẩm");
        }
        else{
            redirect("", "");
        }
    }

    else if(isset($_POST['thanh_toan_btn']))
    {
        $user_id = $_SESSION['auth_user']['user_id']; 
        $tenkh = $_POST['tenkh'];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        $tongtien = $_POST['tongtien'];

        $hoadon_query = "INSERT INTO hoadon (userid, tenkh, diachi, sdt, tongtien) VALUES ('$user_id', '$tenkh', '$diachi', '$sdt', '$tongtien')";
        $hoadon_query_run = mysqli_query($con, $hoadon_query);

        if($hoadon_query_run)
        {
            $hoadon_id = mysqli_insert_id($con);				
    		$cart_data = getSPtheoUser("carts", $user_id);
			if(mysqli_num_rows($cart_data) > 0)
			{
				foreach ($cart_data as $cart_view) 
				{
					$prod_id = $cart_view['MaSP'];
					$cart_product = getNameTheoCate("products", $prod_id);
					if(mysqli_num_rows($cart_product) > 0)
					{
						foreach ($cart_product as $item) 
						{
                            $product_id = $item['id'];
                            $cthd_query = "INSERT INTO chitiethd (MaHoaDon, MaSP) VALUES ('$hoadon_id', '$product_id')";
                            $cthd_query_run = mysqli_query($con, $cthd_query);
                            if($cthd_query_run)
                            {
                                $chitiethd_id = mysqli_insert_id($con);
                                $baohanh_query = "INSERT INTO baohanh (cthdid) VALUES ('$chitiethd_id')";
                                $baohanh_query_run = mysqli_query($con, $baohanh_query);
                                $delete_cart = "DELETE FROM carts WHERE MaTK = '$user_id'";
                                $delete_cart_run = mysqli_query($con, $delete_cart);
                                if($delete_cart_run)
                                {
                                    $slsp_query = "UPDATE products SET SoLuongSP = SoLuongSP - 1 WHERE id = '$product_id'";
                                    $slsp_query_run = mysqli_query($con, $slsp_query);
                                }
                            }
                        }
                    }
                    else
                    {
                        echo "ko co loai san pham";
                    }
		    	}
			}
            redirect("../index.php", "mua thành công");
        }
    }

    else if(isset($_POST['addlike'])){
        if(isset($_SESSION['auth']))
        {
            $user_id = $_SESSION['auth_user']['user_id']; 
            $prod_id = $_POST['product_id'];

            $insert_query = "INSERT INTO favorites (userid, MaSP) VALUES ('$user_id', '$prod_id')";
            $insert_query_run = mysqli_query($con, $insert_query);

            if($insert_query_run){
                redirect("../index.php", "đã thích sản phẩm");
            }else{
                redirect("", "chưa thêm được loại sản phẩm");
            }
        }else{
            redirect("../login.php", "chưa đăng nhập");
        }
        
    }
?>