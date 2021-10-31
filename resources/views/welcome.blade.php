@extends('layouts.app')
@section('content')

@include('layouts.partials.slider')

<!-- About tab start -->
<section id="about" class="about angle">
	<div class="container">
		<div class="row landing-tab">
			<div class="col-md-3 col-sm-5">
				<div class="nav flex-column nav-pills border-right" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="animated fadeIn nav-link py-4 active d-flex align-items-center" data-toggle="pill" href="#tab_1"
						role="tab" aria-selected="true">
						<i class="fa fa-info-circle mr-4"></i>
						<span class="h4 mb-0 font-weight-bold">Who Are We</span>
					</a>
					<a class="animated fadeIn nav-link py-4 d-flex align-items-center" data-toggle="pill" href="#tab_2" role="tab"
						aria-selected="true">
						<i class="fa fa-briefcase mr-4"></i>
						<span class="h4 mb-0 font-weight-bold">OUR COMPANY</span>
					</a>
					<a class="animated fadeIn nav-link py-4 d-flex align-items-center" data-toggle="pill" href="#tab_3" role="tab"
						aria-selected="true">
						<i class="fa fa-android mr-4"></i>
						<span class="h4 mb-0 font-weight-bold">What We Do</span>
					</a>
					<a class="animated fadeIn nav-link py-4 d-flex align-items-center" data-toggle="pill" href="#tab_4" role="tab"
						aria-selected="true">
						<i class="fa fa-pagelines mr-4"></i>
						<span class="h4 mb-0 font-weight-bold">Modern Design</span>
					</a>
					<a class="animated fadeIn nav-link py-4 d-flex align-items-center" data-toggle="pill" href="#tab_5" role="tab"
						aria-selected="true">
						<i class="fa fa-support mr-4"></i>
						<span class="h4 mb-0 font-weight-bold">Dedicated Support</span>
					</a>
				</div>
			</div>
			<div class="col-md-9 col-sm-7">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane pl-sm-5 fade show active animated fadeInLeft" id="tab_1" role="tabpanel">
						<i class="fa fa-trophy icon-xl text-primary mb-4"></i>
						<h3>We Are Awwared Winning Company</h3>
						<p>Over the year we have lots of experience in our field. In sit amet massa sapien. Vestibulum diam turpis,
							gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
							sagittis nulla non elit dignissim suscipit. Duis lorem nulla, eleifend.</p>
					</div>
					<div class="tab-pane pl-sm-5 fade animated fadeInLeft" id="tab_2" role="tabpanel">
						<i class="fa fa-briefcase icon-xl text-primary mb-4"></i>
						<h3>We Have Worldwide Business</h3>
						<p>Helvetica cold-pressed lomo messenger bag ugh. Vinyl jean shorts Austin pork belly PBR retro, Etsy VHS
							kitsch actually messenger bag pug. Pbrb semiotics try-hard, Schlitz occupy dreamcatcher master cleanse
							Marfa Vice tofu. </p>
					</div>
					<div class="tab-pane pl-sm-5 fade animated fadeInLeft" id="tab_3" role="tabpanel">
						<i class="fa fa-android icon-xl text-primary mb-4"></i>
						<h3>We Build Readymade Applications</h3>
						<p>Over the year we have lots of experience in our field. In sit amet massa sapien. Vestibulum diam turpis,
							gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
							sagittis nulla non elit dignissim suscipit. Duis lorem nulla, eleifend.</p>
					</div>
					<div class="tab-pane pl-sm-5 fade animated fadeInLeft" id="tab_4" role="tabpanel">
						<i class="fa fa-pagelines icon-xl text-primary mb-4"></i>
						<h3>Clean and Modern Design</h3>
						<p>{{__('content.whychooseus')}}</p>
					</div>
					<div class="tab-pane pl-sm-5 fade animated fadeInLeft" id="tab_5" role="tabpanel">
						<i class="fa fa-support icon-xl text-primary mb-4"></i>
						<h3>24/7 Dedicated Support</h3>
						<p>Occupy selfies Tonx, +1 Truffaut beard organic normcore tilde flannel artisan squid cray single-origin
							coffee. Master cleanse vinyl Austin kogi, semiotics skateboard fap wayfarers health goth. Helvetica cray
							church-key hashtag Carles. Four dollar toast meggings seitan, Tonx pork belly VHS Bushwick. Chambray banh
							mi cornhole. Locavore messenger bag seitan.</p>
					</div>
				</div>
			</div>
		</div>
	</div><!-- Container end -->
</section><!-- About end -->

<section id="services" class="service angle">
	<div class="container">
		<div class="row">service
			<div class="col-md-12 heading">
				<span class="title-icon float-left"><i class="fa fa-cogs"></i></span>
				<h2 class="title">Service We Provide <span class="title-desc">A Quality Experience Team with 4 years
						experience</span></h2>
			</div>
		</div><!-- Title row end -->

		<div class="row">
			<div class="col-md-3 col-sm-3 wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fa fa-mobile"></i></span>
					<h3>Web Design</h3>
					<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua polaroid befor</p>
				</div>
			</div>
			<!--/ End first service -->

			<div class="col-md-3 col-sm-3 wow fadeInDown animated" data-wow-delay=".8s" style="visibility: visible;-webkit-animation-delay: .8s; -moz-animation-delay: .8s; animation-delay: .8s;">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fa fa-cutlery"></i></span>
					<h3>Apps Development</h3>
					<p>Food truck master cleanse mixtape minim Portland, cardigan stumptown chambray swag</p>
				</div>
			</div>
			<!--/ End Second service -->

			<div class="col-md-3 col-sm-3 wow fadeInDown animated" data-wow-delay="1.1s" style="visibility: visible;-webkit-animation-delay: 1.1s; -moz-animation-delay: 1.1s; animation-delay: 1.1s;">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fa fa-shopping-cart"></i></span>
					<h3>eCommerce Websites</h3>
					<p>Neutra Thundercats craft beer, listicle meggings bicycle rights 90's XOXO beard cardiga</p>
				</div>
			</div>
			<!--/ End Third service -->

			<div class="col-md-3 col-sm-3 wow fadeInDown animated" data-wow-delay="1.4s" style="visibility: visible;-webkit-animation-delay: 1.4s; -moz-animation-delay: 1.4s; animation-delay: 1.4s;">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fa fa-lightbulb-o"></i></span>
					<h3>Design for Startups</h3>
					<p>We design beautiful modern engaging websites that always latest responsive technologies.</p>
				</div>
			</div>
			<!--/ End 4th service -->
		</div><!-- Content row end -->
	</div>
	<!--/ Container end -->
</section>

{{-- <section id="image-block" class="image-block p-0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 ts-padding"
				style="height:650px;background:url(images/image-block-bg.jpg) 50% 50% / cover no-repeat;">
			</div>
			<div class="col-md-6 ts-padding img-block-right">
				<div class="img-block-head text-center">
					<h2>Know More About Our Company</h2>
					<h3>Why Choose Us</h3>
					<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
						Proin gravida nibh vel velit auctor Aenean sollicitudin, adipisicing elit sed lorem quis bibendum auctor.
					</p>
				</div>

				<div class="gap-30"></div>

				<div class="image-block-content">
					<span class="feature-icon float-left"><i class="fa fa-bicycle"></i></span>
					<div class="feature-content">
						<h3>Tons of Features</h3>
						<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
					</div>
				</div>
				<!--/ End 1st block -->

				<div class="image-block-content">
					<span class="feature-icon float-left"><i class="fa fa-diamond"></i></span>
					<div class="feature-content">
						<h3>PowerPack Theme</h3>
						<p>Proin gravida nibh vel velit auctor Aenean sollicitudin adipisicing</p>
					</div>
				</div>
				<!--/ End 1st block -->

				<div class="image-block-content">
					<span class="feature-icon float-left"><i class="fa fa-street-view"></i></span>
					<div class="feature-content">
						<h3>Day Night Support</h3>
						<p>Simply dummy text and typesettings industry has been the industry</p>
					</div>
				</div>
				<!--/ End 1st block -->
			</div>
		</div>
	</div>
</section> --}}


<!-- Team start -->
<section id="team" class="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon float-left"><i class="fa fa-weixin"></i></span>
				<h2 class="title">Meet with our Team <span class="title-desc">A Quality Experience Team with 4 years
						experience</span></h2>
			</div>
		</div><!-- Title row end -->

		<div class="row text-center">
			<div class="col-md-3 col-sm-6">
				<div class="team wow slideInLeft">
					<div class="img-hexagon">
						<img src="{{ asset('images/team/team1.jpg') }}" alt="">
						<span class="img-top"></span>
						<span class="img-bottom"></span>
					</div>
					<div class="team-content">
						<h3>Vosgi Varduhi</h3>
						<p>Web Designer</p>
						<div class="team-social">
							<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
							<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
							<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
							<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
							<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
						</div>
					</div>
				</div>
			</div>
			<!--/ Team 1 end -->
			<div class="col-md-3 col-sm-6">
				<div class="team wow slideInLeft">
					<div class="img-hexagon">
						<img src="{{ asset('images/team/team2.jpg') }}" alt="">
						<span class="img-top"></span>
						<span class="img-bottom"></span>
					</div>
					<div class="team-content">
						<h3>Robert Aleska</h3>
						<p>Web Designer</p>
						<div class="team-social">
							<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
							<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
							<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
							<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
							<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
						</div>
					</div>
				</div>
			</div>
			<!--/ Team 2 end -->
			<div class="col-md-3 col-sm-6">
				<div class="team wow slideInRight">
					<div class="img-hexagon">
						<img src="{{ asset('images/team/team3.jpg') }}" alt="">
						<span class="img-top"></span>
						<span class="img-bottom"></span>
					</div>
					<div class="team-content">
						<h3>Taline Voski</h3>
						<p>Web Designer</p>
						<div class="team-social">
							<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
							<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
							<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
							<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
							<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="team wow slideInRight">
					<div class="img-hexagon">
						<img src="{{ asset('images/team/team3.jpg') }}" alt="">
						<span class="img-top"></span>
						<span class="img-bottom"></span>
					</div>
					<div class="team-content">
						<h3>Taline Voski</h3>
						<p>Web Designer</p>
						<div class="team-social">
							<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
							<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
							<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
							<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
							<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
						</div>
					</div>
				</div>
			</div>
			<!--/ Team 4 end -->
		</div>
		<!--/ Content row end -->
	</div>
	<!--/ Container end -->
</section>
<!--/ Team end -->


<!-- Main container start -->
<section class="contact" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon float-left"><i class="fa fa-map-marker"></i></span>
				<h2 class="title">Contact Us<span class="title-desc">Get in touch with us</span></h2>
			</div>
		{{-- </div><!-- Title row end -->
		<!-- Map start here -->
		<div class="map" id="map_canvas" data-latitude="51.507351" data-longitude="-0.127758"
			data-marker="images/marker.png"></div> --}}
		<!--/ Map end here -->

		<div class="gap-40"></div>

		<div class="row">
			<div class="col-md-7">
				<form id="contact-form" action="contact-form.php" method="post" role="form">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Name</label>
								<input class="form-control" name="name" id="name" placeholder="" type="text" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" name="email" id="email" placeholder="" type="email" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Subject</label>
								<input class="form-control" name="subject" id="subject" placeholder="" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Message</label>
						<textarea class="form-control" name="message" id="message" placeholder="" rows="10" required></textarea>
					</div>
					<div class="text-right"><br>
						<button class="btn btn-primary solid blank" type="submit">Send Message</button>
					</div>
				</form>
			</div>
			<div class="col-md-5">
				<div class="contact-info">
					<h3>Contact Details</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget erat magna. Pellentesque justo
						ante</p>
					<br>
					<p><i class="fa fa-home info"></i> 1102 Saint Marys, Junction City, KS </p>
					<p><i class="fa fa-phone info"></i> +(785) 238-4131 </p>
					<p><i class="fa fa-envelope-o info"></i> info@bizcraft.com</p>
					<p><i class="fa fa-globe info"></i> www.bizcraft.com</p>
				</div>
			</div>
		</div>
	</div>
	<!--/ container end -->
</section>
<!--/ Main container end -->

@endsection
