<!DOCTYPE html>

<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Tour</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/fontend/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('public/fontend/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('public/fontend/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('public/fontend/css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="custom-select-box">
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="VNĐ">
							<option>VNĐ</option>
							<option>USD</option>
						</select>
                    </div>
                    <div class="right-phone-box">
                        <p>Call US :- <a href="#"> +18009476</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="lienhe1.php"><i class="fa fa-user s_color"></i> Liên hệ</a></li>
                            <li><a href="signup.php"><i class="fas fa-location-arrow"></i> Đăng kí</a></li>
                            <li><a href="login.php"><i class="fas fa-headset"></i> Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
               
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo1.png" class="logo" alt="" width="50%"></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="trang-chu">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link" href="gioi-thieu">Giới thiệu</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">Tour</a>
                            <ul class="dropdown-menu">
								<li><a href="bosuutap1.php">Du lich mien Bac</a></li>
								<li><a href="bosuutap1.php">Du lịch miền nam</a></li>
                                <li><a href="bosuutap1.php">Du lịch miền trung</a></li>
                               
                            </ul>
                        </li>
                        <li class="nav-item active"><a class="nav-link" href="#">Cá nhân</a></li>
                     
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#">
						<i class="fa fa-shopping-bag"></i>
                            <span class="badge"></span>
							<p>Giỏ hàng của tôi</p>
					</a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Danh sách tour</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="trang-chu">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh Sách Tour</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Gallery  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center"><h1><?php 
                        $m= Session::get('message');
                        if($m){
                          echo $m;
                         
                          Session::put('message',null);
                        }
                      
                         ?></h1>
                      
                    </div>
                </div>
            </div>
        
          @foreach($ketqua as $key=>$show)
            <div class="row special-list" >
                <div class="col-lg-3 col-md-6 special-grid bulbs">
                    <div class="products-single fix"  >
                        <div class="box-img-hover" >
                            <div class="type-lb">
                                <p class="sale">{{$show->tentour}}</p>
                            </div>
                           <?php echo '<img src="public/fontend/images/'.$show->image.' "class="img-fluid" alt="Image">'?>
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="{{URL::to('chi-tiet-tour/'.$show->idtour)}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye">Xem chi tiết</i></a></li>
                                 
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12" >
                            <b>Tên tour:{{$show->tentour}}</b></br>
                            <b>Giá:{{$show->giatour}}</b>
                        </div>
                    </div>
                    
                </div>
                <div>
                </div>
            
            </div>
            
            @endforeach
        </div>
    </div>
    <!-- End Gallery  -->


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Thời gian làm việc</h3>
							<ul class="list-time">
								<li>Thứ hai- Thứ bảy: 8:00am to 8:00pm</li>  <li>Chủ Nhật: <span>Đóng cửa</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Phản hồi</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Gửi</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Mạng xã hội</h3>
							<p>Chúng tôi sẽ mang lại sự tự tin, năng động và thoải mái cho bạn</p>
							<ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                               
                            </ul>
						</div>
					</div>
				</div>
				<hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>Giới thiệu</h4>
                            <p>Đây là nơi các bạn có thể tự do thoải mái các phụ kiện, đồ dùng phù hợp cần thiết với phong cách thể thao của các bạn mà không cần phải đi đâu xa.</p> 
							<p>Hơn ai hết, chúng tôi hiểu bạn. Chúng tôi tin rằng các sản phẩm chát lượng của chúng tôi sẽ mang lại sự tự tin, thoải mái và năng động. Trân trọng cảm ơn! </p> 	 							
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Thông tin</h4>
                            <ul>
                                <li><a href="Gioithieu1.php">Shop</a></li>
                                <li><a href="#">Khách hàng</a></li>
                                <li><a href="#">Chính sách đổi trả</a></li>
                                <li><a href="#">Chính sách bảo mật</a></li>
                                <li><a href="#">Giao hàng</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Liên hệ</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Địa chỉ: 56 Nguyễn Văn Bảo,quận Gò Vấp,TP.HCM </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Số điện thoại: <a href="tel:+18009476">+18009476</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:ultimateshopinfo@gmail.com">ultimateshopinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">Ultimate Shop</a> Design By :
            <a href="https://html.design/">html design</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="{{asset('public/fontend/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('public/fontend/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('public/fontend/js/jquery.superslides.min.js')}}"></script>
    <script src="{{asset('public/fontend/js/bootstrap-select.js')}}"></script>
    <script src="{{asset('public/fontend/js/inewsticker.js')}}"></script>
    <script src="{{asset('public/fontend/js/bootsnav.js.')}}"></script>
    <script src="{{asset('public/fontend/js/images-loded.min.js')}}"></script>
    <script src="{{asset('public/fontend/js/isotope.min.js')}}"></script>
    <script src="{{asset('public/fontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/fontend/js/baguetteBox.min.js')}}"></script>
    <script src="{{asset('public/fontend/js/form-validator.min.js')}}"></script>
    <script src="{{asset('public/fontend/js/contact-form-script.js')}}"></script>
    <script src="{{asset('public/fontend/js/custom.js')}}"></script>
</body>

</html>
