<?php
	session_start();
	include('functions/userfunction.php');
?>

		
<?php include ("layouts/header.php"); ?>

<form action="functions/handlecart.php" method="POST" enctype="multipart/form-data"> 
<div class="py-5">
    <div class="container">
        <br><br>
            <div style="text-align: center;">
                <h1>Hóa đơn</h1>
            </div>
        <br><br><hr><br>
        <div class="row">
            <div class="col-md-6">
                <div class="row align-items-center" >
                    <div class="col-md-6">
                        <h5>Tên sản phẩm</h5>
                    </div>
                    <div class="col-md-3">
                        <h5>Giá</h5>
                    </div>
                    <div class="col-md-3">
                        <h6>hủy</h6>
                    </div>
                </div>
                <hr>
            <?php							
				$user_id = $_SESSION['auth_user']['user_id']; 
    			$cart_data = getSPtheoUser("carts", $user_id);
                $cart_view = mysqli_fetch_array($cart_data);
                $total_price = 0;
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
			?>
            <div class="row align-items-center" >
                    <div class="col-md-2">
                        <img src="uploads/<?= $item['Anh'] ?>" alt="anh san pham" width="70" height="70">
                    </div>
                    <br>
                    <div class="col-md-4">
                        <h5><?= $item['TenSP'] ?></h5>
                    </div>
                    <div class="col-md-3">
                        <h5><?= $format_number_1 = number_format($item['GiaSP']); ?> VNĐ</h5>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-danger" type="submit" name="delete-cart">Hủy</button>
                        <input type="hidden" name="cartid" value="<?= $cart_view['id']; ?>">
                    </div>
                </div>
                <hr>
            <?php
                                $total_price += $item['GiaSP'];
                            }
                        }
                        else
                        {
                            echo "ko co loai san pham";
                        }
					}
				}
            ?>
            </div>
            <div class="col-md-6">
                <br><br>
                <div class="col-md-6 mb-3">
                    <label for="">Tên</label>
                    <input class="form-control" type="text" name="tenkh" placeholder="Nhập tên của bạn">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Địa chỉ</label>
                    <input class="form-control" type="text" name="diachi" placeholder="Nhập địa chỉ">
                </div>
                <br><br><br><br>
                <div class="col-md-6 mb-3">
                    <label for="">Số điện thoại</label>
                    <input class="form-control" type="number" name="sdt" placeholder="Nhập số điện thoại">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Tổng giá tiền</label>
                    <input class="form-control" type="text" readonly value="<?= $format_number_1 = number_format($total_price); ?> VNĐ">
                    <input type="hidden" name="tongtien" value="<?= $total_price ?>">
                </div>
            </div>
            <div class="col-md-12" style="text-align: center;">
                <br>
                <button class="btn-cart welcome-add-cart" type="submit" name="thanh_toan_btn">Mua</button>
            </div>
        </div>
    </div>
</div>
</form>

<?php include ("layouts/footer.php"); ?>