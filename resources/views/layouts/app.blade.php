<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" >

    <meta name="author" >

    <title>Drone</title>

    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png')}}" />
    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="{{ asset('plugins/themefisher-font/style.css') }}">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('plugins/animate/animate.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
</head>

<body id="body">

    @include('layouts.partials.navigation')
    @include('layouts.partials.slider')

    <section class="about section " id="aboutus" >
		<div class="container" id="aboutus">
			<div class="row">
				<div class="col-md-6">
					<img class="img-responsive" src="{{ asset('images/about/about.jpg') }}">
				</div>
				<div class="col-md-6" >
					<h2 class="mt-40">ABOUT US</h2>
					<p>An Exclusive online platform for drones</p>
					<a href="" class="btn btn-main mt-20">Coming Soon....</a>
				</div>
			</div>
		</div>
	</section>

    <section>
        <div class="container">
            <div class="row">
                 <div class="col-12 mb-5">      
                     <div class="text-center"> 
                     <h2 class=" mb-4 font-text-dark font-weight-bold">Popular <i class="fa fa-star text-primary"></i> Items</h2>
                     </div>             
                </div>    
             <div class="col-lg-4 col-6">
                <div><h3><span>Newly Added</span></h3></div>
            </div>
            <div class="col-lg-4 col-6">
                <div><h3><span>Most Popular</span></h3></div>
            </div>
            <div class="col-lg-4 col-6">
                <div><h3><span>Featured</span> </h3></div>
            </div>
        </div>
            
         
    </section>

    <section class="products section ">
        <div class="container">
            <div class="row">
                <div class="title text-center">
                    <h2>TRENDY PRODUCT</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <span class="bage">Sale</span>
                            <img class="img-responsive" src="images/shop/products/product-1.jpg" alt="product-img" />
                            <div class="preview-meta">
                                <ul>
                                    <li>
                                        <span data-toggle="modal" data-target="#product-modal">
                                            <i class="tf-ion-ios-search-strong"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-single.html">PANTHER</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" id="eagle">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="images/shop/products/product-2.jpg" alt="product-img" />
                            <div class="preview-meta">
                                <ul>
                                    <li>
                                        <span data-toggle="modal" data-target="#product-modal">
                                            <i class="tf-ion-ios-search-strong"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-single.html">EAGLE</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" id="ecosystem">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="images/shop/products/product-3.jpg" alt="product-img" />
                            <div class="preview-meta">
                                <ul>
                                    <li>
                                        <span data-toggle="modal" data-target="#product-modal">
                                            <i class="tf-ion-ios-search-strong"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-single.html">ECO SYSTEM</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" id="ethenica">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="images/shop/products/product-4.jpg" alt="product-img" />
                            <div class="preview-meta">
                                <ul>
                                    <li>
                                        <span data-toggle="modal" data-target="#product-modal">
                                            <i class="tf-ion-ios-search-strong"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-single.html">ETHENICA</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" id="mavic">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="images/shop/products/product-5.jpg" alt="product-img" />
                            <div class="preview-meta">
                                <ul>
                                    <li>
                                        <span data-toggle="modal" data-target="#product-modal">
                                            <i class="tf-ion-ios-search-strong"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-single.html">MAVIC</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" id="dji">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="images/shop/products/product-6.jpg" alt="product-img" />
                            <div class="preview-meta">
                                <ul>
                                    <li>
                                        <span data-toggle="modal" data-target="#product-modal">
                                            <i class="tf-ion-ios-search-strong"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-single.html">DJI</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" id="phantom">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="images/shop/products/product-7.jpg" alt="product-img" />
                            <div class="preview-meta">
                                <ul>
                                    <li>
                                        <span data-toggle="modal" data-target="#product-modal">
                                            <i class="tf-ion-ios-search-strong"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-single.html">PHANTOM</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" id="divi">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="images/shop/products/product-8.jpg" alt="product-img" />
                            <div class="preview-meta">
                                <ul>
                                    <li>
                                        <span data-toggle="modal" data-target="#product-modal">
                                            <i class="tf-ion-ios-search-strong"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-single.html">DIVI</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="images/shop/products/product-9.jpg" alt="product-img" />
                            <div class="preview-meta">
                                <ul>
                                    <li>
                                        <span data-toggle="modal" data-target="#product-modal">
                                            <i class="tf-ion-ios-search-strong"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-single.html">DJI</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" >
                    <div class="product-item">
                        <div class="product-thumb">
                            <span class="bage">Sale</span>
                            <img class="img-responsive" src="images/shop/products/product-10.jpg" alt="product-img" />
                            <div class="preview-meta">
                                <ul>
                                    <li>
                                        <span data-toggle="modal" data-target="#product-modal">
                                            <i class="tf-ion-ios-search-strong"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-single.html">MAVIC MINI</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" id="tector">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="images/shop/products/product-11.jpg" alt="product-img" />
                            <div class="preview-meta">
                                <ul>
                                    <li>
                                        <span data-toggle="modal" data-target="#product-modal">
                                            <i class="tf-ion-ios-search-strong"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-single.html">TECTOR</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" id="toy">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img class="img-responsive" src="images/shop/products/product-12.jpg" alt="product-img" />
                            <div class="preview-meta">
                                <ul>
                                    <li>
                                        <span data-toggle="modal" data-target="#product-modal">
                                            <i class="tf-ion-ios-search-strong"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-ios-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="tf-ion-android-cart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-single.html">TOY DRONES</a></h4>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal product-modal fade" id="product-modal">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="tf-ion-close"></i>
                    </button>
                    <div class="modal-dialog " role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <div class="modal-image">
                                            <img class="img-responsive" src="images/shop/products/modal-product.jpg"
                                                alt="product-img" />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="product-short-details">
                                            <h2 class="product-title">Sports</h2>
                                            <p class="product-short-description">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iusto
                                                nihil cum. Illo laborum numquam rem aut officia dicta cumque.
                                            </p>
                                            <a href="cart.html" class="btn btn-main">Add To Cart</a>
                                            <a href="product-single.html" class="btn btn-transparent">View Product
                                                Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal -->

            </div>
        </div>
    </section>


    <section class="team-members ">
        <div class="container">
            <div class="row">
               
            </div>
        </div>
    </section>

    @include('layouts.partials.footer')

    @include('layouts.partials.script')

</body>
</html>
