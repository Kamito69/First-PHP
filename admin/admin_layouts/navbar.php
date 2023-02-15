<?php
?>
			<div class="top-area">
				<div class="header-area">
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <div class="top-search">
				            <div class="container">
				                <div class="input-group">
				                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
				                    <input type="text" class="form-control" placeholder="Search">
				                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
				                </div>
				            </div>
				        </div>
				        <div class="container">
				            <div class="attr-nav">
				                <ul>
				                	<li class="search">
				                		<a href="#"><span class="lnr lnr-magnifier"></span></a>
				                	</li>
				                	<li class="nav-setting">
				                		<a href="#"><span class="lnr lnr-cog"></span></a>
				                	</li>
				                    <li class="dropdown">
				                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
				                            <span class="lnr lnr-cart"></span>
											<span class="badge badge-bg-1">2</span>
				                        </a>
				                    </li>
				                </ul>
				            </div>
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				                    <i class="fa fa-bars"></i>
				                </button>
				                <a class="navbar-brand" href="index.html">Admin<span>69</span>.</a>
				            </div>
				            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
				                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
				                    <li class=" scroll active"><a href="index.php">home</a></li>
				                    <li class="scroll"><a href="#new-arrivals">San Pham moi</a></li>
				                    <li class="scroll"><a href="#feature">Danh muc</a></li>
				                    <li class=""><a href="danhsachspban.php">Lập bảo hành</a></li>
									<?php
										if(isset($_SESSION['auth']))
										{
											?>
											<li class=""><a href="../logout.php">logout</a></li>
											<?php
										}else{
											?>
											<li class=""><a href="../login.php">Login</a></li>
											<?php
										}
									?>
				                </ul>
				            </div>
				        </div>
				    </nav>
				</div>
			    <div class="clearfix"></div>
			</div>