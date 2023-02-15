<?php

?>

<form action="functions/handlecart.php" method="POST" enctype="multipart/form-data"> 
			<div class="top-area">
				<div class="header-area">
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <div class="top-search">
				            <div class="container">
				                <div class="input-group">
				                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
				                    <input type="text" name="search" class="form-control" placeholder="Search">
				                    <span class="input-group-addon hidden"><input type="submit" value="Search" name="submit"></span>
				                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
				                </div>
				            </div>
				        </div>
				        <div class="container">
				            <div class="attr-nav">
				                <ul>
				                	<li class="search">
				                		<a href="#">
											<span class="lnr lnr-magnifier"></span>
										</a>
				                	</li>
				                	<li class="nav-setting dropdown" >
				                		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<span class="fa-solid fa-user">
                                        		<ul class="dropdown-menu" role="menu">
													<?php
													if(isset($_SESSION['auth']))
													{
													?>
														<li><a href="">Hello: <?= $_SESSION['auth_user']['Name']; ?></a></li>
														<li><a href="historybuy.php">Lịch sử mua hàng</a></li>
														<li><a href="favoriteproduct.php">sản phẩm yêu thích</a></li>
														<li><a href="logout.php">logout</a></li>
													<?php
													}else{
													?>
														<li><a href="login.php">Login</a></li>
														<li><a href="register.php">Register</a></li>
													<?php
													}
													?>
                                        		</ul>
											</span>
										</a>
				                	</li>
				                    <li class="dropdown">
				                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
				                            <span class="lnr lnr-cart"></span>
											<span class="badge badge-bg-1">
												<?php
													if(isset($_SESSION['auth'])){
														$user_id = $_SESSION['auth_user']['user_id']; 
														$getSum = getSumcart($user_id);
														$count = mysqli_num_rows($getSum);
												?>
												<?= $count; ?> 
												<?php
													}
													else{
														?>
														0
														<?php
													}
												?>
											</span>
				                        </a>
				                        <ul class="dropdown-menu cart-list s-cate">
											<?php
												if(isset($_SESSION['auth'])){
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
				                            		<li class="single-cart-list">
				                                		<a href="#" class="photo"><img src="uploads/<?= $item['Anh']; ?>" class="cart-thumb" alt="image" /></a>
				                                		<div class="cart-list-txt">
				                                			<h6><a href="#"><?= $item['TenSP']; ?></a></h6>
				                                			<p>1 x - <span class="price">
																<?= $format_number_1 = number_format($item['GiaSP']); ?> VNĐ
															</span></p>
				                                		</div>
				                                		<div class="cart-close">
															<button class="lnr lnr-cross" type="submit" name="delete-cart"></button>
                        									<input type="hidden" name="cartid" value="<?= $cart_view['id']; ?>">
				                                		</div>
				                            		</li>
											<?php
                                            				}
                                        				}
                                        				else
                                        				{
                                            				echo "ko co loai san pham";
                                        				}
													}
												}
											}
                                    		?>
				                            <li class="total">
				                                <span>Total: $0.00</span>
												<a class="btn-cart pull-right" style="color: black;" href="cart.php">view cart</a>
				                            </li>
				                        </ul>
				                    </li>
				                </ul>
				            </div>
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				                    <i class="fa fa-bars"></i>
				                </button>
				                <a class="navbar-brand" href="index.php">Laptop<span>69</span></a>
				            </div>
				            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
				                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
									<?php
                                        $loaisp = getAllcate("loaisp");
                                        if(mysqli_num_rows($loaisp) > 0)
                                        {
								            foreach ($loaisp as $item) {
                                    ?>
											<li><a href="product.php?MaLoaiSP=<?= $item['id']; ?>"><?= $item['TenLoaiSP']; ?></a></li>
                                    <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "ko co loai san pham";
                                        }
                                    ?>
				                </ul>
				            </div>
				        </div>
				    </nav>
				</div>
			    <div class="clearfix"></div>
			</div>
</form>

			
			