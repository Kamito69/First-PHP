<?php
?>

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
                &copy;copyright. designed and developed by <a href="https://www.themesine.com/">themesine</a>
            </p>
        </div>
    </div>
    <div id="scroll-Top">
        <div class="return-to-top">
            <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
        </div>
    </div>
</footer>





        <script src="../assets/js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
		<script src="../assets/js/bootsnav.js"></script>
        <script src="../assets/js/owl.carousel.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="../assets/js/custom.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://kit.fontawesome.com/3db446519d.js" crossorigin="anonymous"></script>
		<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
		<script>
			<?php if(isset($_SESSION['message'])) {   ?>
			alertify.set('notifier','position', 'top-right');
 			alertify.success('<?= $_SESSION['message']; ?>');
    		<?php } ?>
		</script>
    </body>
</html>

