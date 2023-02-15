<?php
	session_start();
    include('../middleware/adminMiddleware.php');
?>


		<?php include('admin_layouts/header.php'); ?>

        &nbsp;
        <section id="new-arrivals" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h2>Quản lý sản phẩm</h2>
				</div>
            </div>
        </section>

		<section id="newsletter"  class="newsletter">
			<div class="container">
				<div class="hm-footer-details">
					<div class="row">
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>Quản lý</h4>
								</div>
								<div class="hm-foot-menu">
									<ul>
										<li><a href="../admin/category.php">danh mục</a></li>
										<li><a href="../admin/addLoaiSP.php">thêm loại sản phẩm</a></li>
										<li><a href="../admin/addHSX.php">thêm hãng sản xuất</a></li>
										<li><a href="../admin/addColors.php">thêm màu sản phẩm</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>Quản lý sản phẩm</h4>
								</div>
								<div class="hm-foot-menu">
									<ul>
										<li><a href="addProduct.php">thêm sản phẩm</a></li>
										<li><a href="#">royal cloth sofa</a></li>
										<li><a href="#">accent chair</a></li>
										<li><a href="#">bed</a></li>
										<li><a href="#">hanging lamp</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>my accounts</h4>
								</div>
								<div class="hm-foot-menu">
									<ul>
										<li><a href="#">my account</a></li>
										<li><a href="#">wishlist</a></li>
										<li><a href="#">Community</a></li>
										<li><a href="#">order history</a></li>
										<li><a href="#">my cart</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class=" col-md-3 col-sm-6  col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>newsletter</h4>
								</div>
								<div class="hm-foot-para">
									<p>
										Subscribe  to get latest news,update and information.
									</p>
								</div>
								<div class="hm-foot-email">
									<div class="foot-email-box">
										<input type="text" class="form-control" placeholder="Enter Email Here....">
									</div>
									<div class="foot-email-subscribe">
										<span><i class="fa fa-location-arrow"></i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="new-arrivals" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h2>Danh mục sản phẩm</h2>
				</div>
				<div class="new-arrivals-content">
					<div class="row">
						<?php
                            $product = getAll("products");
                            if(mysqli_num_rows($product) > 0){
                                foreach($product as $item)
                                {
                        ?>
							<div class="col-md-3 col-sm-4">
								<div class="single-new-arrival">
									<div class="single-new-arrival-bg">
										<img src="../uploads/<?= $item['Anh']; ?>" alt="new-arrivals images">
										<div class="single-new-arrival-bg-overlay"></div>
										<div class="sale bg-1">
											<p>new</p>
										</div>
										<div class="new-arrival-cart">
											<p>
												<span class="lnr lnr-cart"></span>
												<a href="#">add <span>to </span> cart</a>
											</p>
											<form action="code.php" method="POST">
												<p class="arrival-review pull-right">
													<a href="editProduct.php?id=<?= $item['id']; ?>"><span><i class="fa-solid fa-pen-to-square"></i></span></a>
                                                	<input type="hidden" name="productid" value="<?= $item['id']; ?>">
													<span><button type="submit" name="deleteProduct" value="<?= $item['id']; ?>"><i class="fa-solid fa-trash"></i></button></span>
												</p>
											</form>
										</div>
									</div>
									<h4><a href="#"><?= $item['TenSP']; ?></a></h4>
									<p class="arrival-product-price"><?= $format_number_1 = number_format($item['GiaSP']); ?> VNĐ</p>
								</div>
							</div>
                        <?php
                	            }
                                }else{
                                    echo "không tìm thấy";
                                }
                        ?>

					</div>
				</div>
			</div>
		</section>



        <?php require_once ("admin_layouts/footer.php"); ?>