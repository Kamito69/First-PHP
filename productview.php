<?php
	session_start();
	include('functions/userfunction.php');
    $product_id = $_GET['productid'];
    $product_data = getNameTheoCate("products", $product_id);
    $product_view = mysqli_fetch_array($product_data);
    $MaHSX = $product_view['MaHangSanXuat'];
    $hsx_data = getNameTheoCate("hsx", $MaHSX);
    $hsx_view = mysqli_fetch_array($hsx_data);
    $TenHSX = $hsx_view['TenHSX'];
    $MaMau = $product_view['MaMau'];
    $color_data = getNameTheoCate("colors", $MaMau);
    $color_view = mysqli_fetch_array($color_data);
    $TenMau = $color_view['TenMau'];
?>
		
<?php include ("layouts/header.php"); ?>
<br><br>
<?php
    if($product_view)
    {
        ?>
        <form action="functions/handlecart.php" method="POST" enctype="multipart/form-data">     
        <div class="bg-light py-4">     
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-4">
                        <img src="uploads/<?= $product_view['Anh']; ?>" alt="anh san pham" class="w-100">
                    </div>
                    <div class="con-md-8">
                        <h4><?= $product_view['TenSP']; ?></h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Hãng sản xuất: <?= $TenHSX; ?></h3>
                            </div>
                            <br><br>
                            <div class="col-md-6">
                                <h3>Màu sắc: <?= $TenMau; ?></h3>
                            </div>
                            <br><br>   
                            <div class="col-md-6" style="display: flex;">
                                <div class="col-md-6">
                                    <h3>Số lượng máy: <?= $product_view['SoLuongSP']; ?></h3>
                               </div>
                                <br><br>                            
                                <div class="col-md-6">
                                   <h3>Thời gian bảo hành: <?= $product_view['ThoiGianBaoHanh']; ?></h3>
                                </div>
                            </div>                         
                            <br><br>
                            <div class="col-md-6">
                                <h5>Giá: <?= $format_number_1 = number_format($product_view['GiaSP']); ?> VNĐ</h5>
                            </div>
                            <div class="col-md-6">
                                <input type="hidden" name="product_id" value="<?= $product_view['id']; ?>">
                                <?php
                                    if($product_view['SoLuongSP'] <= 0){
                                        ?>
                                            <span class="btn-cart welcome-add-cart" style="text-align: center;">
                                                Sản phẩm đã hết
                                            </span>
                                        <?php
                                    }else{
                                        ?>
                                        <button class="btn-cart welcome-add-cart" type="submit" name="addcart">
									        <span class="lnr lnr-cart"></span>
									        Cho <span>vào</span> rỏ
								        </button>
                                        <?php
                                    }
                                ?>
                                <button class="btn-cart welcome-add-cart welcome-more-info" type="submit" name="addlike">
									<span class="lnr lnr-heart"></span>
									<span>Like</span>
								</button>
                            </div>
                        </div>
                        <hr>
                        <h5>Thông tin sản phẩm: </h5><br>
                        <p><?= $product_view['GioiThieuSP']; ?></p>
                    </div>
                </div>
                      
            </div>
        </div>
        </form>
            
        <?php
    }
?>

<?php include ("layouts/footer.php"); ?>