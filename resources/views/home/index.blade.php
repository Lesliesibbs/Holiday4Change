@extends('layout.layout')

@section ('content')


		<!-- Banner
================================================== -->
		<div class="parallax" data-color="#36383e" data-color-opacity="0.5" style="overflow:">

			<div class="video-container">
				<video autoplay loop="true" muted class="embed-responsive-item" width="1280" height="720">
			        <source src="videos/home-background.mp4" type=video/mp4>
			    </video>
			</div>


			<div class="container">
				<div class="row">
					<div class="col-md-12">


						<div class="search-container">

							<!-- Form -->
							<h2>Find the holiday just for you. </h2>



							<!-- Announce -->
							<div class="announce">
								Get your perfect holiday on us!!
							</div>

						</div>

					</div>
				</div>
			</div>

		</div>


		<div class="clearfix"></div>


		<!-- Content
================================================== -->
		<!-- Fullwidth Section -->
		<section class="fullwidth border-bottom margin-top-0 margin-bottom-0 padding-top-50 padding-bottom-50" data-background-color="#ffffff">

			<!-- Content -->
			<div class="container">
				<div class="row">
					<!-- Inline Elements
					================================================== -->
					<div class="row">
						<div class="col-md-12">
							<!-- Headline -->
							<h3 class="headline with-border margin-top-45 margin-bottom-25">Welcome to Holiday4Change</h3>

							<p>If you believe in spending time with your loved ones, developing and building new relationships with different people around the world then we are a company for you, Welcome to Holiday, a company for the people. </p>
							<p>
								Holiday4change is a family run business with a clear purpose: we exist simply to encourage joy, laughter and happiness to as many people as possible through everything we do. We provide our members holidays anyway in the world from £1 a month.

Holiday’s provided by Thomas Cook through their gift cards. Giving you the power to choose your own destination and capture an experience of a lifetime with your loved ones.

Holiday4change coming soon! Subscribe now…

							</p>
						</div>
					</div>


				</div>
			</div>

		</section>
		<!-- Fullwidth Section / End -->

		<!-- Parallax -->
		<div class="parallax margin-bottom-70" data-background="images/listings-parallax.jpg" data-color="#36383e" data-color-opacity="0.7" data-img-width="800" data-img-height="505">

			<!-- Infobox -->
			<div class="text-content white-font">
				<div class="container">

					<div class="row">
						<div class="col-sm-6">
							<h2>It's your journey. We're here to help.</h2>
							<p>Here is a short video explain How Holiday4Change works in more details. enjoy</p>
							<a href="/login-register" class="button margin-top-25">Get Started</a>
						</div>
						<div class="col-sm-6">
							<video  width="600" controls>
	  <source src="holiday.mp4" type="video/mp4">
	  <source src="mov_bbb.ogg" type="video/ogg">
	  Your browser does not support HTML5 video.
	</video>

						</div>

					</div>

				</div>
			</div>

			<!-- Infobox / End -->

		</div>
		<!-- Parallax / End -->

		<!-- Container -->
		<div class="container">
			<div class="row">

				<div class="col-md-12">
					<h3 class="headline centered margin-bottom-35 margin-top-10">Most Popular Places</h3>
				</div>

				<div class="col-md-4">

					<!-- Image Box -->
					<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="images/popular1.jpeg">

						<!-- Badge -->
						<div class="listing-badges">
							<span class="featured">Featured</span>
						</div>

						<div class="img-box-content visible">
							<h4>Turkey </h4>
						</div>
					</a>

				</div>

				<div class="col-md-8">

					<!-- Image Box -->
					<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="images/popular2.jpeg">
						<div class="img-box-content visible">
							<h4>Italy</h4>
						</div>
					</a>

				</div>

				<div class="col-md-8">

					<!-- Image Box -->
					<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="images/popular3.jpeg">
						<div class="img-box-content visible">
							<h4>Gibraltar </h4>
						</div>
					</a>

				</div>

				<div class="col-md-4">

					<!-- Image Box -->
					<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="images/popular4.jpeg">
						<div class="img-box-content visible">
							<h4>Hawaii</h4>
						</div>
					</a>

				</div>

			</div>
		</div>
		<!-- Container / End -->

		<!-- Container / End -->
		<!-- Fullwidth Section -->
		<section class="fullwidth margin-top-105 margin-bottom-0 padding-bottom-80 padding-top-95" data-background-color="#f7f7f7">

			<!-- Box Headline -->
			<h3 class="headline-box">What Our Clients Say</h3>

			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<div class="testimonials-subtitle">We collect reviews from our customers so you can get an honest opinion of what an apartment is really like!</div>
					</div>

					<div class="col-md-4">
						<div class="testimonial-box">
							<div class="testimonial">Great concept, great business model, Holiday4change is a great company we joined and never regretted it sign up now!!!</div>
							<div class="testimonial-author">
								<h4>Jennie Wilson</h4>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="testimonial-box">
							<div class="testimonial">I love what the company stands for, its beliefs are amazing, and I believe that it will bring our family closer. </div>
							<div class="testimonial-author">

								<h4>Thomas Smith</h4>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="testimonial-box">
							<div class="testimonial">Being on holiday with your loved ones is an amazing feeling. Now knowing that we can get it for £1.59 I couldn’t be happier </div>
							<div class="testimonial-author">

								<h4>Robert Lindstrom</h4>
							</div>
						</div>
					</div>

				</div>
			</div>

		</section>
		<!-- Fullwidth Section / End -->

@endsection
