<?php
session_start();
include('functions/userfunction.php');
?>

<?php include("layouts/header.php"); ?>



<section id="populer-products" class="populer-products">
	<div class="container">
		<div class="populer-products-content">
			<div class="row">
				<div class="col-md-3">
					<div class="single-populer-products">
						<div class="single-populer-product-img mt40">
							<img src="assets/images/blog/laptop.jpg" alt="populer-products images" width="115">
						</div>
						<h2><a href="#">Laptop</a></h2>
						<div class="single-populer-products-para">
							<p>Tại đây chúng tai có các loại máy tốt nhất giúp gamer có trải nghiệm mượt mà.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="single-populer-products">
						<div class="single-inner-populer-products">
							<div class="row">
								<div class="col-md-4 col-sm-12">
									<div class="single-inner-populer-product-img">
										<img src="assets/images/blog/iphone-14-pro-tim-thumb-600x600.jpg" alt="populer-products images">
									</div>
								</div>
								<div class="col-md-8 col-sm-12">
									<div class="single-inner-populer-product-txt">
										<h2>
											<a href="#">
												Smart <span>phone</span> .
											</a>
										</h2>
										<p>
											Thiết bị của thời đại công cụ hỗ trợ tiện ích tại đây chúng tôi có mọi loại dòng sản phẩm.
										</p>
										<div class="populer-products-price">
											<h4>Nhiều dòng sản phẩm đang sale còn <span>X,000,000 VNĐ</span></h4>
										</div>
										<button class="btn-cart welcome-add-cart populer-products-btn" onclick="window.location.href='#'">
											Săn SALE
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-populer-products">
						<div class="single-populer-products">
							<div class="single-populer-product-img">
								<img width="155" src="assets/images/blog/tai-nghe-chup-tai-bluetooth-sony-wh-1000xm4-avatar-1-600x600.jpg" alt="populer-products images">
							</div>
							<h2><a href="#">phụ kiện</a></h2>
							<div class="single-populer-products-para">
								<p>Giúp trải nghiệm âm thanh chưa từng có.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/.container-->

</section>

<form action="functions/handlecart.php" method="POST" enctype="multipart/form-data">
	<section id="new-arrivals" class="new-arrivals">
		<div class="container">
			<div class="section-header">
				<h2>sản phẩm mới</h2>
			</div>
			<div class="new-arrivals-content">
				<div class="row">
					<?php
					$product = getAllcate("products");
					if (mysqli_num_rows($product) > 0) {
						foreach ($product as $item) {
					?>
							<div class="col-md-3 col-sm-4">
								<div class="single-new-arrival">
									<div class="single-new-arrival-bg">
										<img src="uploads/<?= $item['Anh']; ?>" alt="new-arrivals images">
										<div class="single-new-arrival-bg-overlay"></div>
										<div class="sale bg-1">
											<p>sale</p>
										</div>
										<div class="new-arrival-cart">
											<p>
												<span class="lnr lnr-cart"></span>
												<button type="submit" name="addcart">
													<input type="hidden" name="product_id" value="<?= $item['id']; ?>">
													Cho <span>vào</span> rỏ
												</button>
											</p>
											<p class="arrival-review pull-right">
												<span><button name="addlike" type="submit" class="lnr lnr-heart"></button></span>
												<span class="lnr lnr-frame-expand"></span>
											</p>
										</div>
									</div>
									<h4><a href="productview.php?productid=<?= $item['id']; ?>"><?= $item['TenSP']; ?></a></h4>
									<p class="arrival-product-price"><?= $format_number_1 = number_format($item['GiaSP']); ?> VNĐ</p>
								</div>
							</div>
					<?php
						}
					} else {
						echo "không tìm thấy";
					}
					?>
				</div>
			</div>
		</div>
	</section>
</form>

<section id="sofa-collection">
	<div class="owl-carousel owl-theme" id="collection-carousel">
		<div class="sofa-collection collectionbg1">
			<div class="container">
				<div class="sofa-collection-txt">
					<h2>unlimited sofa collection</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
					<div class="sofa-collection-price">
						<h4>strting from <span>$ 199</span></h4>
					</div>
					<button class="btn-cart welcome-add-cart sofa-collection-btn" onclick="window.location.href='#'">
						view more
					</button>
				</div>
			</div>
		</div>
		<div class="sofa-collection collectionbg2">
			<div class="container">
				<div class="sofa-collection-txt">
					<h2>unlimited dainning table collection</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
					<div class="sofa-collection-price">
						<h4>strting from <span>$ 299</span></h4>
					</div>
					<button class="btn-cart welcome-add-cart sofa-collection-btn" onclick="window.location.href='#'">
						view more
					</button>
				</div>
			</div>
		</div>
	</div>

</section>



<?php include("layouts/footer.php"); ?>