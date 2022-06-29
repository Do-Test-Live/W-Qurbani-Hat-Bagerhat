<?php
require 'dbconfig.php';
?>
<?php
//Display website name, fav-icon, website logo,  area start
$query = "SELECT * FROM `setting` ";
$data = mysqli_query($con, $query);
$total = mysqli_num_rows($data);

$logo = "";
$favicon = "";
$title = "";
if ($total != 0) {
	while ($result = mysqli_fetch_assoc($data)) {
		$logo = $result['logo'];
		$favicon = $result['favicon'];
		$title = $result['title'];
	}
} else {
	"No Records Found!!!";
}
//Display website name, fav-icon, website logo area end
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link rel="icon" href="https://admin.qurbanihatbagerhat.com/<?php echo $favicon; ?>" type="image/gif" sizes="16x16">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400i,700%7CMontserrat:300,400,500,600,700%7CMerriweather:300,400,300i,400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />

	<!-- shop Demo Specific Stylesheet -->
	<link rel="stylesheet" href="demos/shop/shop.css" type="text/css" />
	<link rel="stylesheet" href="demos/shop/css/fonts.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="css/colors.php?color=000000" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title><?php echo $title;?></title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!----<div class="modal-on-load" data-target="#myModal1"></div>-->

		<!-- On LOad Modal Start-->
		<!-----
		<div class="modal1 mfp-hide subscribe-widget divcenter" id="myModal1" style="max-width: 750px;">
			<div class="row justify-content-center bg-white align-items-center" style="min-height: 380px;">
				<div class="col-md-5 p-0">
					<div style="background: url('images/modal.png') no-repeat center right; background-size: cover;  min-height: 380px;"></div>
				</div>
				<div class="col-md-7 bg-white p-4">
					<div class="heading-block nobottomborder mb-3">
						<h3 class="font-secondary nott ">ঘ‌রে থাকুন <span class="text-danger"></span>সুস্থ থাকুন</h3>
					</div>
					<div class="widget-subscribe-form-result"></div>
					<small class="nobottommargin font-italic text-black-50">*‌নিরাপ‌দে থাকুন</small>
				</div>
			</div>
		</div>
		------->
		<!-- On LOad Modal End-->

		<!-- Header
		============================================= -->
		<header id="header" class="full-header clearfix">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.php" class="standard-logo"><img src="https://admin.qurbanihatbagerhat.com/<?php echo $logo; ?>" alt="Bagerhat Logo"></a>
						<a href="index.php" class="retina-logo"><img src="https://admin.qurbanihatbagerhat.com/<?php echo $logo; ?>" alt="Bagerhat Logo"></a>
						
					</div><!-- #logo end -->
					
				

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="style-2 with-arrows">
					    <ul>
					        <li>
					            <h2 class="p-2" style="color:#1EC6A8;"><center>কোরবানির হাট, বাগেরহাট</center></h2>
					        </li>
					    </ul>
	                     <div id="top-account">
							<a href="https://admin.qurbanihatbagerhat.com/"><i class="icon-line2-user mr-1 position-relative"
									style="top: 1px;"></i><span
									class="d-none d-sm-inline-block font-primary t500">Login/SignUp</span></a>
						</div>
					</nav>
					<!-- #primary-menu end -->
					
					

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Slider Area Start============================================= -->
		<section id="slider" class="slider-element swiper_wrapper clearfix" data-autoplay="6000" data-speed="800" data-loop="true" data-grab="true" data-effect="fade" data-arrow="false" style="height: 600px;">
			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					
							<div class="swiper-slide dark" style="background-image: url('images/slider-1.webp');">
								<div class="container clearfix">
									<div class="slider-caption slider-caption-center">
										<div class="h5 mb-2 font-secondary" style="color:#1EC6A8;">সার্বিক তত্ত্বাবধানে</div>
										<h2 class="bottommargin-sm text-white" >জেলা প্রশাসন, বাগেরহাট</h2><br>
										<div class="h5 mb-2 font-secondary" style="color:#1EC6A8;">সহযোগিতায়</div>
										<h2 class="bottommargin-sm text-white" >জেলা প্রাণিসম্পদ অফিস, বাগেরহাট</h2>
									</div>
								</div>
							</div>
							<div class="swiper-slide dark" style="background-image: url('images/slider-2.webp');">
								<div class="container clearfix">
									<div class="slider-caption slider-caption-center">
										<div class="h5 mb-2 font-secondary" style="color:#1EC6A8;">সার্বিক তত্ত্বাবধানে</div>
										<h2 class="bottommargin-sm text-white" >জেলা প্রশাসন, বাগেরহাট</h2><br>
										<div class="h5 mb-2 font-secondary" style="color:#1EC6A8;">সহযোগিতায়</div>
										<h2 class="bottommargin-sm text-white" >জেলা প্রাণিসম্পদ অফিস, বাগেরহাট</h2>
									</div>
								</div>
							</div>
							<div class="swiper-slide dark" style="background-image: url('images/slider-3.webp');">
								<div class="container clearfix">
									<div class="slider-caption slider-caption-center">
										<div class="h5 mb-2 font-secondary" style="color:#1EC6A8;">সার্বিক তত্ত্বাবধানে</div>
										<h2 class="bottommargin-sm text-white" >জেলা প্রশাসন, বাগেরহাট</h2><br>
										<div class="h5 mb-2 font-secondary" style="color:#1EC6A8;">সহযোগিতায়</div>
										<h2 class="bottommargin-sm text-white" >জেলা প্রাণিসম্পদ অফিস, বাগেরহাট</h2>
									</div>
								</div>
							</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</section>
		<!-- Slider Area End============================================= -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Shop Categories
					============================================= -->
					<div class="fancy-title title-dotted-border title-center mb-4">
						<h2><u style="color: #5CD6C0">ক্যাটাগ‌রি</u></h2>
					</div>

					<div class="row shop-categories clearfix">
						<?php
						$query = "SELECT * FROM subcategory";
						$data = mysqli_query($con, $query);
						if (mysqli_num_rows($data) > 0) {
							while ($row = mysqli_fetch_assoc($data)) {
						?>
								<div class="col-lg-4">
									<a href="filter.php?id=<?php echo $row["id"]; ?>" style="background: url('https://admin.qurbanihatbagerhat.com/<?php echo $row['img']; ?>') no-repeat center center; background-size: cover;">
										<div class="vertical-middle dark center">
											<div class="heading-block nomargin noborder">
												<h3 class="nott t600 ls0"><?php echo $row['name']; ?></h3>
											</div>
										</div>
									</a>
								</div>
						<?php
							}
						}
						?>
					</div>

					<!-- Featured Carousel
					============================================= -->
					<div class="fancy-title title-dotted-border mt-4 mb-1 title-center">
                        <h2><u style="color: #5CD6C0">নতুন সং‌যোজন</u></h2>
					</div>

					<div id="oc-products" class="owl-carousel products-carousel carousel-widget" data-margin="20" data-loop="true" data-autoplay="5000" data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4" data-items-xl="5">

						<!-- Shop Item 1
						============================================= -->
					<?php
						$query = "SELECT * FROM product WHERE popular='1' order by rand() limit 20";
						$data = mysqli_query($con, $query);
						if (mysqli_num_rows($data) > 0) {
							while ($row = mysqli_fetch_assoc($data)) {
						?>

								<div class="oc-item">
									<div class="product iproduct clearfix">
										<div class="product-image">
											<a href="#"><img src="https://admin.qurbanihatbagerhat.com/<?php echo $row['pimg']; ?>" alt="No image available"></a>
    										<div class="product-overlay">
    											<center><a href="viewProduct.php?id=<?php echo $row["id"]; ?>" data-lightbox="ajax"><i class="icon-line-eye"></i><span>বিস্তা‌রিত দেখুন</span></a></center>
    										</div>
										</div>
										<div class="product-desc">
											<div class="product-title mb-1">
												<h3><a href="#"><?php echo 'QHB-'. $row['id']?> | <?php echo $row['pname']; ?></a></h3>
											</div>
											<div class="product-price font-primary">
											    <ins><?php 	$my_str = ''.$row['pgms'].'';
                                                // Display replaced string
                                                echo str_replace("$;", " Age: ", $my_str); ?></ins>
                                                | <ins><?php echo $row['pprice']; ?>&nbsp;BDT/=</ins>
                                            </div>
											<div class="product-price font-primary"><ins><?php echo $row['area']; ?></ins></div>
										</div>
									</div>
								</div>
						<?php
							}
					}
					?>

					</div>

				</div>

				<div class="clear"></div>
				
				<!-- <div class="container">
						<div class="row mt-5 clearfix">
						  <div class="col-12">
							  <div class="fancy-title title-dotted-border title-center mb-4">
								  <h4>অঞ্চল‌ভি‌ত্তিক অনুসন্ধান</h4>
							  </div>
							  <ul class="clients-grid grid-10 nobottommargin clearfix">

								  <li><center><a href="km.php?area=Mohanogor"><b>খুলনা মহানগর</b></a></center></li>
								  <li><center><a href="km.php?area=Koyra"><b>কয়রা</b></a></center></li>
								  <li><center><a href="km.php?area=Dumuria"><b>ডুমুরিয়া</b></a></center></li>
								  <li><center><a href="km.php?area=Terokhada"><b>তেরখাদা</b></a></center></li>
								  <li><center><a href="km.php?area=Dacope"><b>দাকোপ</b></a></center></li>
								  <li><center><a href="km.php?area=Dighalia"><b>দিঘলিয়া</b></a></center></li>
								  <li><center><a href="km.php?area=Paikgachha"><b>পাইকগাছা</b></a></center></li>
								  <li><center><a href="km.php?area=Phultala"><b>ফুলতলা</b></a></center></li>
								  <li><center><a href="km.php?area=Batiaghata"><b>বটিয়াঘাটা</b></a></center></li>
								  <li><center><a href="km.php?area=Rupsa"><b>রূপসা</b></a></center></li>
							  </ul>
						  </div>
					  </div>
				  </div>-->
				
			   <div class="clear"></div>
			   <br>
			   <!--<div class="container">
			       <center><h3><a href="http://kcchaat.com/" class="btn" style="text-decoration:none;background-color:#1EC6A8;color:#fff;">খুলনা সি‌টি ক‌র্পো‌রেশন কোরবা‌নির হাট প‌রিদর্শন করুন</a></h3></center>
			   </div>-->
			   
			   <div class="clear"></div>


                <div class="section my-4 py-5 clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row common-height align-items-center clearfix">
                                    <div class="col-md-7" style="background: url('images/image1.png') center center no-repeat; background-size: cover; height:100%">
                                        <div class="vertical-middle pl-5">

                                        </div>
                                    </div>
                                    <div class="col-md-5 bg-white">
                                        <div class="card noborder py-2">
                                            <div class="card-body">
                                                <h3 class="card-title mb-4 ls0">সবাই‌কে প‌বিত্র ঈদ উল আযহার শু‌ভেচ্ছা</h3>
                                                <ul class="iconlist ml-3">
                                                    <li><i class="icon-circle-blank text-black-50"></i>ঘ‌রে থাকুন</li>
                                                    <li><i class="icon-circle-blank text-black-50"></i> সুস্থ থাকুন</li>
                                                    <li><i class="icon-circle-blank text-black-50"></i> ‌নিরাপ‌দে থাকুন</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

				<!-- New Arrivals Men
				============================================= -->
				<div class="container clearfix">

					<div class="fancy-title title-dotted-border topmargin-sm mb-4 title-center">
                        <h4><u style="color: #5CD6C0">সকল পশু</u></h4>
					</div>

					<div class="row grid-6" id="load_data_table">
                <?php
                $sql = "SELECT * FROM product WHERE stock='1' and status='1' ORDER BY RAND() LIMIT 12"; 
                $result = mysqli_query($con, $sql);
                $video_id = '';
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-lg-2 col-md-3 col-6 px-2">
                        <div class="product iproduct clearfix">
                            <div class="product-image">
                                <a href="#"><img src="https://admin.qurbanihatbagerhat.com/<?php echo $row['pimg']; ?>" alt="No image available"></a>
                                <div class="product-overlay">
                                    <center><a href="viewProduct.php?id=<?php echo $row["id"]; ?>" data-lightbox="ajax"><i class="icon-line-eye"></i><span>বিস্তা‌রিত দেখুন</span></a></center>
                                </div>
                            </div>
                            <?php
                            if ($row['stock'] > 0) {
                            ?>
                                <center><span class="lead"><span class="badge" style="color:#07C6AC;">Available</span></span></center>
                            <?php
                            } else {
                            ?>
                                <center><span class="lead"><span class="badge badge-danger">Sold Out</span></span></center>
                            <?php
                            }
                            ?>
                            <div class="product-desc">
                                <div class="product-title mb-1">
                                    <h3><a href="#"><?php echo 'QHB-' . $row['id'] ?> | <?php echo $row['pname']; ?></a></h3>
                                </div>

                                <div class="product-price font-primary">
                                    <ins><?php $my_str = '' . $row['pgms'] . '';
                                            // Display replaced string
                                            echo str_replace("$;", " Age: ", $my_str); ?></ins>
                                    | <ins><?php echo $row['pprice']; ?>&nbsp;BDT/=</ins>
                                </div>
                                <div class="product-price font-primary"><ins><?php echo $row['area']; ?></ins></div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
                <center><a href="viewall.php" style="background: #5CD6C0" class="btn">View all</a></center>
				</div>

				<!-- Sign Up
				============================================= -->


				<div class="clear"></div>

				<div class="container clearfix">
					<div class="clear"></div>

					<!-- Brands
					============================================= -->
					<div class="row mt-5 clearfix">
						<div class="col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="fancy-title title-dotted-border title-center mb-4">
                                <h4><u style="color: #5CD6C0">'Qurbani Hat Bagerhat' এর বৈশিষ্ট্যঃ</u></h4>
							</div>
							<div class="row">
							    <!----
							    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
							         <center><a href="#"><img src="images/images3.png" alt="Clients" class="img-fluid"></a></center>
							    </div> ---->
							    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
							        <ul>
							            <li>কোভিড-১৯ পরিস্থিতিতে স্বাস্থ্য সুরক্ষা বজায় রেখে ধর্মপ্রাণ মুসলিমের কোরবানির পশু কেনাবেচার মাধ্যমে ধর্মীয়
অনুশাসন নিশ্চিত করা</li>
							            <li>কোরবানির পশু বেচাকেনার অনলাইন ব্যবস্থা কোভিড-১৯ পরিস্থিতিতে ক্রেতা ও বিক্রেতা উভয়ের স্বাস্থ্য সুরক্ষিত রাখা</li>
							            <li>আধুনিক প্রযুক্তি ব্যবহার করে উৎপাদিত পশুর প্রাপ্তি</li>
							            <li>প্রাণিসম্পদ অধিদপ্তর কর্তৃক প্রদত্ত পশুর 'রোগমুক্ত' এবং স্টেরয়েড ও ক্ষতিকর রাসায়নিকমুক্ত প্রত্যয়ন রাখা</li>
							            <li>ঘরে বসে চাহিদা মোতাবেক পশু ক্রয় ও ঘরে পৌছানোর ব্যবস্থা করা</li>
							            <li>অনলাইন ও মোবাইল ব্যাংকিং এর মাধ্যমে মূল্য পরিশোধের ব্যবস্থা</li>
							            <li>প্রান্তিক পর্যায়ের জনগণের প্রযুক্তি ব্যবহার করে ঘরে বসে কোরবানির পশু ক্রয়ের ব্যবস্থা</li>
							        </ul>
							    </div> 
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="fancy-title title-dotted-border title-center mb-4">
                                <h4><u style="color: #5CD6C0">বাস্তবায়‌নে</u></h4>
							</div>
							<div class="row">
							    <!----
							    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
							         <center><a href="#"><img src="images/images3.png" alt="Clients" class="img-fluid"></a></center>
							    </div> ---->
							    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
							        <center><a href="#"><img src="images/images2.png" alt="Clients" class="img-fluid" width="30%"></a></center>
							    </div> 
							</div>
						</div>
					</div>

				</div>

				<div class="clear"></div>

				<!-- App Buttons
				============================================= -->
				<!--<div class="section pb-0 mb-0 clearfix" style="background-color: #f8f5f0">
					<div class="container">
						<div class="row">
							<div class="col-md-6 offset-1 bottommargin-lg d-flex flex-column align-self-center">
								<h3 class="card-title t400 ls0">কোরবানির হাট</h3>
								<span>অ্যাপ‌টি ডাউন‌লোড করুন</span>
								<div class="mt-3">
									<a href="https://play.google.com/store/apps/details?id=com.frogbidqurbanihatkhulna" class="button button-small button-rounded button-desc text-dark t400 ls1  border clearfix" style="background-color:#07C6AC;"><i class="icon-googleplay"></i>
										<div><span>Download Qurbanihatkhulna</span>Google Play</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 d-none d-md-flex align-items-end">
								<img src="images/app.png" alt="Image" class="nobottommargin">
							</div>
						</div>
					</div>
				</div>-->

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="noborder" style="background: #5CD6C0">
			<!-- Copyrights ============================================= -->
			<div id="copyrights" class="nobg">

				<div class="container clearfix">

					<div class="row justify-content-between align-items-center">
						<div class="col-md-6">
						<a href="https://frogbid.com/">Developed By &copy; FrogBid.</a>	<br>
						</div>
					</div>

				</div>

			</div>
			<!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-line-arrow-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>
    <script>
            $(document).ready(function() {
                $(document).on('click', '#btn_more', function() {
                    var last_id = $(this).data("id");
                    $('#btn_more').html("Loading! Please Wait...");
                    $.ajax({
                        url: "load_more_cow.php",
                        method: "POST",
                        data: {
                            last_id: last_id
                        },
                        dataType: "text",
                        success: function(data) {
                            if (data != '') {
                                $('#remove_row').remove();
                                $('#load_data_table').append(data);
                            } else {
                                 
                                $('#btn_more').html("No More Cow's are here! Thanks!");
                            }
                        }
                    });
                });
            });
        </script>
	<!-- ADD-ONS JS FILES -->

</body>

</html>