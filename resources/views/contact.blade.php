@extends('master')
@section('content')

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
		<div class="page-title-area bg-8">
			<div class="container">
				<div class="page-title-content">
					<h2>Contact</h2>

					<ul>
						<li>
							<a href="{{route('home')}}">
								Accueil 
							</a>
						</li>

						<li class="active">Contact</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Map Area -->
		<div class="map-area pb-100">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4716.777180267137!2d1.141198735753428!3d6.221332366887792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10215987c86a3e53%3A0xfcb7a9be3b82e6c1!2sCEG%20KOHE!5e0!3m2!1sfr!2stg!4v1676049793245!5m2!1sfr!2stg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>		</div>
		<!-- End Map Area -->

		<!-- Start Contact Area -->
		<section class="main-contact-area pb-100">
			<div class="container">
				<div class="contact-bg">
					<div class="contact-info">
						<div class="row">
							<div class="col-lg-4">
								<div class="single-contact-info">
									<h3>Localisation</h3>
									<p>
										<i class="ri-map-pin-fill"></i>
										CEG Kohé, Lomé-TOGO
									</p>
								</div>
							</div>

							<div class="col-lg-4">
								<div class="single-contact-info">
									<h3>Téléphone</h3>
									
									<p>
										<i class="ri-phone-fill"></i>
										<a href="tel:+1-(514)-312-5678">+228 91 68 42 60</a>
									</p>
								</div>
							</div>

							<div class="col-lg-4">
								<div class="single-contact-info">
									<h3>Email</h3>
									
									<p>
										<i class="ri-mail-open-fill"></i>
										<a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#e0898e868fa097898b898ece838f8d"><span class="__cf_email__" data-cfemail="95fcfbf3fad5e2fcfefcfbbbf6faf8">contact@cddh.org</span></a>
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="section-title green-title">
						<h2>Prendre Contact</h2>
						<p>Rentrez en contact avec nous pour plus d'amples d'informations</p>
					</div>
	
					<form id="contactForm">
						<div class="row">
							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label>Votre Nom</label>
									<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
									<div class="help-block with-errors"></div>
								</div>
							</div>
	
							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label>Votre Email</label>
									<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
									<div class="help-block with-errors"></div>
								</div>
							</div>
	
							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label>Votre  numéro de téléphone</label>
									<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control">
									<div class="help-block with-errors"></div>
								</div>
							</div>
	
							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label>Sujet</label>
									<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
									<div class="help-block with-errors"></div>
								</div>
							</div>
	
							<div class="col-12">
								<div class="form-group">
									<label>Votre message</label>
									<textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message"></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>
	
							<div class="col-lg-12 col-md-12">
								<div class="form-group checkboxs">
									<input type="checkbox" id="chb2">
									<p>
										Acceptez les <a href="terms-conditions.html"> termes  &amp; conditions</a> et <a href="privacy-policy.html">la politique de confidentialité.</a>
									</p>
								</div>
							</div>
	
							<div class="col-lg-12 col-md-12">
								<button type="submit" class="default-btn">
										Envoyer votre message
								</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div>
								<div class="clearfix"></div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->
@endsection