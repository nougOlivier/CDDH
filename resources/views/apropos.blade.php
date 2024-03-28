@extends('master')
@section('title')
A-propos - CDDH
@endsection

@section('content')
		<!-- Start Log In Modal -->
		<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ri-close-circle-line"></i>
					</button>

					<div class="modal-body">
						<div class="container">
							<div class="account-title">
								<h2>Log in to your account</h2>
							</div>
							
							<div class="contact-form-action">
								<form method="post">
									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<label>Email or Phone</label>
												<input class="form-control" type="text" name="name">
											</div>
										</div>

										<div class="col-12">
											<div class="form-group">
												<label>Password</label>
												<input class="form-control" type="password" name="password">
											</div>
										</div>

										<div class="col-12">
											<div class="login-action">
												<span class="log-rem">
													<input id="remember" type="checkbox">
													<label for="remember">Remember me!</label>
												</span>
												
												<span class="forgot-login">
													<a href="recover-password.html">Forgot your password?</a>
												</span>
											</div>
										</div>

										<div class="col-12">
											<button class="default-btn" type="submit">
												Log In
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Log In Modal -->

		<!-- Start Register Modal -->
		<div class="modal fade" id="staticBackdrop-2" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ri-close-circle-line"></i>
					</button>

					<div class="modal-body">
						<div class="container">
							<div class="account-title">
								<h2>Register your account</h2>
							</div>

							<div class="contact-form-action">
								<form method="post">
									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<label>Full name</label>
												<input class="form-control" type="text" name="name">
											</div>
										</div>
			
										<div class="col-12">
											<div class="form-group">
												<label>Email address</label>
												<input class="form-control" type="email" name="email">
											</div>
										</div>
			
										<div class="col-12">
											<div class="form-group">
												<label>Mobile no.</label>
												<input class="form-control" type="text" name="Number">
											</div>
										</div>
			
										<div class="col-12">
											<div class="form-group">
												<label>Password</label>
												<input class="form-control" type="text" name="password">
											</div>
										</div>

										<div class="col-lg-12">
											<div class="row align-items-center">
												<div class="col-lg-6">
													<button class="default-btn register" type="submit">
														Register Now
													</button>
												</div>
												<div class="col-lg-6">
													<div class="show">
														<input id="remember-1" type="checkbox">
														<label>Show password ?</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Register Modal -->

		<!-- Start Page Title Area -->
		<div class="page-title-area bg-1">
			<div class="container">
				<div class="page-title-content">
					<h2>A propos</h2>

					<ul>
						<li>
							<a href="{{route('home')}}">
								Accueil 
							</a>
						</li>

						<li class="active">A propos</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Stat Who We Are Area -->
		<section class="who-we-are-area pt-100 pb-70">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="who-we-are-img pr-15">
							<img src="assets/images/who-we-are-img.jpg" alt="Image">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="who-we-are-content pl-15">
							<span class="top-title">Who we are</span>
							<h2>We are a strong and strategically driving and influential force behind the local government sector</h2>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis ipsum dolor sit amet.</p>

							<h3>Our role is to:</h3>
							<ul>
								<li>Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat.</li>
								<li>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem</li>
								<li>Curabitur aliquet quam id dui posuere blandit.</li>
								<li>Cras ultricies ligula sed magna dictum porta.</li>
								<li>Pellentesque in ipsum id orci porta dapibus.</li>
								<li>Donec rutrum congue leo eget malesuada</li>
								<li>Sed porttitor lectus nibh.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Who We Are Area -->

		<!-- Start Discover Area -->
		<section class="discover-area discover-area-style-two pb-100">
			<div class="container">
				<div class="discover-bg pt-100">
					<div class="counter-bg">
						<div class="row">
							<div class="col-lg-3 col-sm-6">
								<div class="single-counter">
									<div class="count-title">
										<h2>
											<span class="odometer" data-count="8336817">00</span> 
										</h2>
										<h4>People in the city</h4>
									</div>
								</div>
							</div>
	
							<div class="col-lg-3 col-sm-6">
								<div class="single-counter">
									<div class="count-title">
										<h2>
											<span class="odometer" data-count="22">00</span> 
											<span class="target">K</span>
										</h2>
										<h4>Square of city</h4>
									</div>
								</div>
							</div>
	
							<div class="col-lg-3 col-sm-6">
								<div class="single-counter">
									<div class="count-title">
										<h2>
											<span class="odometer" data-count="400">00</span> 
											<span class="target">+</span>
										</h2>
										<h4>Year of foundation</h4>
									</div>
								</div>
							</div>
	
							<div class="col-lg-3 col-sm-6">
								<div class="single-counter">
									<div class="count-title">
										<h2>
											<span class="odometer" data-count="875">00</span> 
										</h2>
										<h4>Successful programs</h4>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="section-title green-title">
						<h2>Discover our city</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore eveniet quod mollitia asperiores ullam dolor corporis. vero nemo consectetur</p>
					</div>
	
					<div class="row">
						<div class="col-lg-6 pr-0">
							<div class="discover-content">
								<h2>Plan a great city that provides the essence of success</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu smod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maec enas accumsan lacus vel facilisis. consectetur</p>
	
								<h3>Sustainable innovation is our pathway:</h3>
								<ul>
									<li>Curabitur arcu erat, accumsan id imperdiet porttitor.</li>
									<li>Curabitur aliquet quam id dui posuere blandit.</li>
									<li>Pellentesque in ipsum id orci porta dapibus.</li>
									<li>Pellentesque in ipsum id orci porta dapibus.</li>
									<li>Sed porttitor lectus nibh.</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-6 pl-0">
							<div class="discover-img discover-img-2">
								<div class="video-button">
									<a href="https://www.youtube.com/watch?v=cTxCqUwnLg4" class="popup-youtube">
										<i class="flaticon-play-button"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Discover Area -->

		<!-- Start Counselor Area -->
		<section class="counselor-area pb-70">
			<div class="container">
				<div class="section-title">
					<h2>What your counselor says</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore eveniet quod mollitia asperiores ullam dolor corporis. vero nemo consectetur</p>
				</div>
				
				<div class="owl-carousel owl-theme counselor-slider">
					<div class="row align-items-center pr-15">
						<div class="col-lg-6">
							<div class="counselor-img">
								<img src="assets/images/counselor-img.jpg" alt="Image">
							</div>
						</div>

						<div class="col-lg-6">
							<div class="counselor-content pl-15">
								<div class="single-counselor">
									<i class="flaticon-quotation"></i>
									<p>" Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Sed porttitor lectus nibh."</p>

									<h3>Helen J. Sanders</h3>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="counselor-img pr-15">
								<img src="assets/images/counselor-img-2.jpg" alt="Image">
							</div>
						</div>

						<div class="col-lg-6">
							<div class="counselor-content pl-15">
								<div class="single-counselor">
									<i class="flaticon-quotation"></i>
									<p>" Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Sed porttitor lectus nibh."</p>

									<h3>Alex Sanders</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Counselor Area -->

		<!-- Start City Councilor Area -->
		<section class="city-councillor-area bg-color pt-100 pb-70">
			<div class="container">
				<div class="section-title">
					<h2>City councilor</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore eveniet quod mollitia asperiores ullam dolor corporis. vero nemo consectetur</p>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6">
						<div class="single-councillor">
							<img src="assets/images/councillor/councillor-1.jpg" alt="Image">

							<div class="councillor-content">
								<h3>Steven Karnes</h3>
								<span>City Councilor</span>

								<ul>
									<li>
										<a href="https://www.facebook.com/" target="_blank">
											<i class="ri-facebook-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/" target="_blank">
											<i class="ri-instagram-line"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/" target="_blank">
											<i class="ri-twitter-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/" target="_blank">
											<i class="ri-linkedin-box-fill"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-councillor">
							<img src="assets/images/councillor/councillor-2.jpg" alt="Image">

							<div class="councillor-content">
								<h3>Philip Thalis</h3>
								<span>Marketing Coordinator</span>

								<ul>
									<li>
										<a href="https://www.facebook.com/" target="_blank">
											<i class="ri-facebook-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/" target="_blank">
											<i class="ri-instagram-line"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/" target="_blank">
											<i class="ri-twitter-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/" target="_blank">
											<i class="ri-linkedin-box-fill"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-councillor">
							<img src="assets/images/councillor/councillor-3.jpg" alt="Image">

							<div class="councillor-content">
								<h3>Cameron Bennett</h3>
								<span>Assistant Mayor</span>

								<ul>
									<li>
										<a href="https://www.facebook.com/" target="_blank">
											<i class="ri-facebook-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/" target="_blank">
											<i class="ri-instagram-line"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/" target="_blank">
											<i class="ri-twitter-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/" target="_blank">
											<i class="ri-linkedin-box-fill"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End City Councilor Area -->
@endsection