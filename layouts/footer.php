<?php
?>

<section id="newsletter"  class="newsletter">
			<div class="container">
				<div class="hm-footer-details">
					<div class="row">
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>information</h4>
								</div>
								<div class="hm-foot-menu">
									<ul>
										<li><a href="#">about us</a></li>
										<li><a href="#">contact us</a></li>
										<li><a href="#">news</a></li>
										<li><a href="#">store</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>collections</h4>
								</div>
								<div class="hm-foot-menu">
									<ul>
										<li><a href="#">wooden chair</a></li>
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

<footer id="footer"  class="footer">
    <div class="container">
        <div class="hm-footer-copyright text-center">
            <div class="footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
            </div>
            <p>
                &copy;Được tạo bởi duy <a href="https://www.youtube.com/watch?v=e1xCOsgWG0M&list=RDe1xCOsgWG0M&start_radio=1">facebook</a>
            </p>
        </div>
    </div>
    <div id="scroll-Top">
        <div class="return-to-top">
            <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
        </div>
    </div>
</footer>



<script src="assets/js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/bootsnav.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="https://kit.fontawesome.com/3db446519d.js" crossorigin="anonymous"></script>
		<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
		<script>
			<?php if(isset($_SESSION['message'])) {   ?>
			alertify.set('notifier','position', 'top-right');
 			alertify.success('<?= $_SESSION['message']; ?>');
    		<?php } ?>
		</script>
    </body>
</html>

