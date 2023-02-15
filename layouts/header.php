<?php
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        <title>Laptop69</title>
		<link rel="shortcut icon" type="image/icon" href="assets/logo/icon.png"/>
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/linearicons.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/bootsnav.css" >
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    </head>
    <body>
		<header id="home" class="welcome-hero">
		<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
				 <ol class="carousel-indicators">
					<li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li>
					<li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
					<li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="single-slide-item slide1">
							<div class="container">
								<div class="welcome-hero-content">
									<div class="row">
										<div class="col-sm-7">
											<div class="single-welcome-hero">
												<div class="welcome-hero-txt">
													<h4>Laptop 69</h4>
													<h2>Rất vui khi được phục vụ quý khách</h2>
													<p></p>
													<div class="packages-price">
														<p>
															Give for u
														</p>
													</div>
													<button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
														<span class="lnr lnr-plus-circle"></span>
														add <span>to</span> cart
													</button>
													<button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
    													more info
													</button>
												</div>
											</div>
										</div>
										<div class="col-sm-5">
											<div class="single-welcome-hero">
												<div class="welcome-hero-img">
													<img src="assets/images/slider/hello.png" alt="slider image">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
                            $product = getAllcate("products");
                            if(mysqli_num_rows($product) > 0){
                                foreach($product as $item)
                                {
                    ?>
					<div class="item">
						<div class="single-slide-item slide2">
							<div class="container">
								<div class="welcome-hero-content">
									<div class="row">
										<div class="col-sm-7">
											<div class="single-welcome-hero">
												<div class="welcome-hero-txt">
													<h4>Sản phẩm mới</h4>
													<h2><?= $item['TenSP'] ?></h2>
													<p><?= $item['GioiThieuSP'] ?></p>
													<div class="packages-price">
														<p>
															<?= $format_number_1 = number_format($item['GiaSP']); ?> VNĐ
															<del>$ 299.00</del>
														</p>
													</div>
													<button class="btn-cart welcome-add-cart" onclick="window.location.href=''">
														<span class="lnr lnr-plus-circle"></span>
														add <span>to</span> cart
													</button>
													<button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='productview.php?productid=<?= $item['id']; ?>'">
    													more info
													</button>
												</div>
											</div>
										</div>
										<div class="col-sm-5">
											<div class="single-welcome-hero">
												<div class="welcome-hero-img">
													<img src="uploads/<?= $item['Anh']; ?>" alt="slider image">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
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
        	<?php include ("layouts/navbar.php"); ?>
		</header>