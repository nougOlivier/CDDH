@extends('master')
@section('title')
Actualites - CDDH
@endsection

@section('content')
<!-- Start Page Title Area -->
		<div class="page-title-area bg-9">
			<div class="container">
				<div class="page-title-content">
					<h2>Actualités</h2>

					<ul>
						<li>
							<a href="{{route('home')}}">
								Accueil 
							</a>
						</li>

						<li class="active">Actualités</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Events Area -->
		<section class="events-area ptb-100">
			<div class="container">
				<div class="section-title">
					<h2>Actualités recentes</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore eveniet quod mollitia asperiores ullam dolor corporis. vero nemo consectetur</p>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6">
						<div class="single-event-box ">
							<a href="event-details.html">
								<img src="assets/images/events/event-2.jpg" alt="Images">
							</a>

							<div class="event-content">
								<ul>
									<li>
										Conference
										<span>March 12, 2021 </span>
									</li>
								</ul>
								<h3>
									<a href="event-details.html">
										Annual conference 2020
									</a>
								</h3>
								<p><i class="ri-map-pin-2-line"></i> At City Center, 27 Division Street, USA</p>
								<a href="event-details.html" class="read-more">
									Read more
									<i class="ri-arrow-right-s-line"></i>
								</a>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6">
						<div class="single-event-box ">
							<a href="event-details.html">
								<img src="assets/images/events/event-3.jpg" alt="Images">
							</a>

							<div class="event-content">
								<ul>
									<li>
										Conference
										<span>March 10, 2021 </span>
									</li>
								</ul>
								<h3>
									<a href="event-details.html">
										Negotiation in government
									</a>
								</h3>
								<p><i class="ri-map-pin-2-line"></i> At City Center, 27 Division Street, USA</p>
								<a href="event-details.html" class="read-more">
									Read more
									<i class="ri-arrow-right-s-line"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-event-box ">
							<a href="event-details.html">
								<img src="assets/images/events/event-4.jpg" alt="Images">
							</a>

							<div class="event-content">
								<ul>
									<li>
										Conference
										<span>March 11, 2021 </span>
									</li>
								</ul>
								<h3>
									<a href="event-details.html">
										Annual health conference
									</a>
								</h3>
								<p><i class="ri-map-pin-2-line"></i> At City Center, 27 Division Street, USA</p>
								<a href="event-details.html" class="read-more">
									Read more
									<i class="ri-arrow-right-s-line"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-event-box ">
							<a href="event-details.html">
								<img src="assets/images/events/event-5.jpg" alt="Images">
							</a>

							<div class="event-content">
								<ul>
									<li>
										Conference
										<span>March 10, 2021 </span>
									</li>
								</ul>
								<h3>
									<a href="event-details.html">
										Governance for commercial activity
									</a>
								</h3>
								<p><i class="ri-map-pin-2-line"></i> At City Center, 27 Division Street, USA</p>
								<a href="event-details.html" class="read-more">
									Read more
									<i class="ri-arrow-right-s-line"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-event-box ">
							<a href="event-details.html">
								<img src="assets/images/events/event-6.jpg" alt="Images">
							</a>

							<div class="event-content">
								<ul>
									<li>
										Conference
										<span>March 09, 2021 </span>
									</li>
								</ul>
								<h3>
									<a href="event-details.html">
										Annual fire conference
									</a>
								</h3>
								<p><i class="ri-map-pin-2-line"></i> At City Center, 27 Division Street, USA</p>
								<a href="event-details.html" class="read-more">
									Read more
									<i class="ri-arrow-right-s-line"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-event-box ">
							<a href="event-details.html">
								<img src="assets/images/events/event-7.jpg" alt="Images">
							</a>

							<div class="event-content">
								<ul>
									<li>
										Conference
										<span>March 08, 2021 </span>
									</li>
								</ul>
								<h3>
									<a href="event-details.html">
										Commercial business planning
									</a>
								</h3>
								<p><i class="ri-map-pin-2-line"></i> At City Center, 27 Division Street, USA</p>
								<a href="event-details.html" class="read-more">
									Read more
									<i class="ri-arrow-right-s-line"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-12">
						<div class="pagination-area">
							<span class="page-numbers current" aria-current="page">1</span>
							<a href="#" class="page-numbers">2</a>
							<a href="#" class="page-numbers">3</a>
							
							<a href="#" class="next page-numbers">
								<i class="ri-arrow-right-line"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Events Area -->
@endsection