<?php
	session_start();
	include('functions/userfunction.php');
?>

		
<?php include ("layouts/header.php"); ?>

<form action="functions/handlecart.php" method="POST" enctype="multipart/form-data"> 
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br><hr>
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
            <div class="row align-items-center" >
                    <div class="col-md-2">
                    </div>
                    <br>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-3">
                        <a href="checkout.php" class="btn btn-primary"><i class="fa-solid fa-money-bill"></i> Thanh toán</a>
                    </div>
                </div>
        </div>
    </div>
</div>
</form>

<?php include ("layouts/footer.php"); ?>