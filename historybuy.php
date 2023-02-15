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
                    <div class="col-md-2">
                        <h5>Tên Người mua</h5>
                    </div>
                    <div class="col-md-3">
                        <h5>Dịa chỉ</h5>
                    </div>
                    <div class="col-md-2">
                        <h6>Số điện thoại</h6>
                    </div>
                    <div class="col-md-2">
                        <h6>Tổng tiền</h6>
                    </div>
                    <div class="col-md-2">
                        <h6>Ngày Mua</h6>
                    </div>
                </div>
                <hr>
            <?php							
				$user_id = $_SESSION['auth_user']['user_id']; 
    			$hoadon_data = getHDtheoUser("hoadon", $user_id);
                $hoadon = mysqli_fetch_array($hoadon_data);
				if(mysqli_num_rows($hoadon_data) > 0)
				{
					foreach ($hoadon_data as $hoadon_view) 
					{
                        ?>
                                <div class="row align-items-center" >
                                    <div class="col-md-2">
                                        <h5>- <?= $hoadon_view['tenkh'] ?></h5>
                                    </div>
                                    <div class="col-md-3">
                                        <h5><?= $hoadon_view['diachi'] ?></h5>
                                    </div>
                                    <div class="col-md-2">
                                        <h5><?= $hoadon_view['sdt'] ?></h5>
                                    </div>
                                    <div class="col-md-2">
                                        <h5><?= $format_number_1 = number_format($hoadon_view['tongtien']); ?> VNĐ</h5>
                                    </div>
                                    <div class="col-md-2">
                                    <h5><?= date("d/m/Y", strtotime($hoadon_view['ngaymua'])); ?></h5>
                                    </div>
                                </div>
                                <hr>
                        <?php
                        $hoadon_id = $hoadon_view['id'];
						$cthd_data = getCTHDtheoHD("chitiethd", $hoadon_id);
						if(mysqli_num_rows($cthd_data) > 0)
						{
							foreach ($cthd_data as $cthd_views) 
							{
                                $prod_id = $cthd_views['MaSP'];
						        $get_product = getNameTheoCate("products", $prod_id);
                                $get_baohanh = getAllcthd('baohanh', $cthd_views['id']);
                                $baohanh = mysqli_fetch_array($get_baohanh);
                                if($baohanh['ngayketthucbaohanh'] != null){
                                ?>
                                    <div class="col-md-4"><br>
                                        <h7>ngày kết thúc bảo hành: <?= date("d/m/Y", strtotime($baohanh['ngayketthucbaohanh'])); ?></h7>
                                    </div>
                                <?php
                                }else{
                                    ?>
                                    <div class="col-md-4"><br>
                                        <h7>ngày kết thúc bảo hành: chưa có bảo hành</h7>
                                    </div>
                                <?php
                                }
						        if(mysqli_num_rows($get_product) > 0)
						        {
							        foreach ($get_product as $item) 
							        {
			                        ?>
                                        <div class="row align-items-center" >
                                            <div class="col-md-2">
                                                <img src="uploads/<?= $item['Anh'] ?>" alt="anh san pham" width="70" height="70">
                                            </div>
                                            <br>
                                            <div class="col-md-3">
                                                <h7><?= $item['TenSP'] ?></h7>
                                            </div>
                                            <div class="col-md-2">
                                                <h7><?= $format_number_1 = number_format($item['GiaSP']); ?> VNĐ</h7>
                                            </div>
                                        </div>
                                        <hr>
                                    <?php
                                    }
                                }
                            }
                        }
					}
				}
            ?>
            </div>
        </div>
    </div>
</div>
</form>

<?php include ("layouts/footer.php"); ?>