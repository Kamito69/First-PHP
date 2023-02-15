<?php
	session_start();
	include('functions/userfunction.php');
?>

		
		<?php include ("layouts/header.php"); ?>




        <form action="functions/handlecart.php" method="POST" enctype="multipart/form-data"> 
		<section id="new-arrivals" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h2>sản phẩm yêu thích</h2>
				</div>
				<div class="new-arrivals-content">
					<div class="row">
						<?php							
				            $user_id = $_SESSION['auth_user']['user_id']; 
    			            $favorite_data = getHDtheoUser("favorites", $user_id);
                            $favorite_view = mysqli_fetch_array($favorite_data);
				            if(mysqli_num_rows($favorite_data) > 0)
				            {
					            foreach ($favorite_data as $favorite_view) 
					            {
						            $prod_id = $favorite_view['MaSP'];
						            $favorite_product = getNameTheoCate("products", $prod_id);
						            if(mysqli_num_rows($favorite_product) > 0)
						            {
							            foreach ($favorite_product as $item) 
							            {
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
                        }
                        else
                        {
                            echo "ko co loai san pham";
                        }
					}
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



        <?php include ("layouts/footer.php"); ?>