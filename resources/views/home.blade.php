@extends('master')
@section('title')
Accueil - CDDH
@endsection

@section('content')

		<!-- Start Banner Area -->
		<section class="banner-area banner-area-style-three">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="col-lg-6">
								<div class="banner-content">
									<span class="top-title">Les actions de CDDH </span>
									<h1>Appui à la réalisation des infrastructures viables,   Sensibilisation et la conscientisation</h1>
									<p>La réinsertion, Sensibilisation sur la lutte contre le trafic des enfants ; l’éducation, la formation préprofessionnelle, le recueil de la parole de l’enfant, l’accompagnement psycho-social, l’accueil, la protection, l’assistance juridique et médicale.</p>
		
									<div class="slider-btn">
										<a href="about.html" class="default-btn">
											Lire Plus
										</a>
									</div>
								</div>
							</div>

							<div class="col-lg-6 pr-0">
								<div class="banner-img">
									<img src="{{asset('dassets/b2.jpg')}}" alt="Image">

									<div class="shape banner-shape-3">
										<img src="assets/images/banner/banner-shape-3.png" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Banner Area -->

		<!-- Start Services Area -->
		<section class="services-area services-area-style-three bg-color pt-100 pb-70">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6">
						<div class="single-services-box">
							<span class="flaticon-group"></span>

							<h3>
								<a href="services-details.html">
									Promotion des droits humains
								</a>
							</h3>

							<p>Promotion des droits humains des enfants, jeunes et femmes.</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-services-box">
							<span class="flaticon-buildings"></span>

							<h3>
								<a href="services-details.html">
									Santé descente aux populations 
								</a>
							</h3>

							<p>Santé descente aux populations les plus défavorisées</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-services-box">
							<span class="flaticon-government"></span>

							<h3>
								<a href="services-details.html">
									Appuis/Conseils aux Organisations 
								</a>
							</h3>

							<p>Appuis/Conseils aux Organisations de Développement à la Base</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Services Area -->

		<!-- Stat Who We Are Area -->
		<section class="who-we-are-area pt-100 pb-70">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="who-we-are-img who-we-are-img-3 pr-15">
							<img src="dassets/who-we-are-img-3.png" alt="Image">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="who-we-are-content who-we-are-content-two pl-15">
							<span class="top-title">Qui sommes-nous ?</span>
							<h2>L’Association Convergence Démocratique et Droits de l’Homme (CDDH)</h2>

							<p>En vue de mieux s’imposer sur le terrain en tant qu’organisation de la société civile et de rendre ses actions plus efficaces auprès des communautés, l’association (C.D.D.H) a signé des protocoles d’accords et de partenariats avec des organisations internationales : ONG ELIM ITALIA ODV basé en Italie.</p>

							<h3>Nos actions sont :</h3>
							<ul>
								<li>Niveau appui direct aux enfants .</li>
								<li>Niveau appui direct aux femmes .</li>
								<li>Niveau communautaire .</li>
								<li>Niveau société civile .</li>
								<li>Niveau politique .</li>
							</ul>

							<a href="{{route('valeurs')}}" class="default-btn">
								Lire plus
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Who We Are Area -->
        
        
        <div class="page-title-area bg-19">
			<div class="container">
				<div class="page-title-content">
					<h2>Convergence Démocratique et Droits de l’Homme</h2>

					<ul>
						<li>
							<a href="index.html">
								Reconnaissance officielle 
							</a>
						</li>

						<li class="active">20 Aout 2020</li>
					</ul>
				</div>
			</div>
		</div>
	

	

	

		<!-- Start Project Area -->
		<section class="project-area bg-color pt-100 pb-70">
			<div class="container-fluid p-0">
				<div class="section-title">
					<h2>Actualités</h2>
					<p>Au plan financier, notons que l’exécution de ces projets est axée sur une comptabilité analytique locale rigoureuse permettant d’identifier les dépenses effectuées.</p>
				</div>

				<div class="project-slider owl-carousel owl-theme">
					<div class="single-project">
						<img src="assets/images/projects/p1.jpg" alt="Image">

						<div class="project-content">
							<a href="project-details.html">Droits des enfants</a>
						</div>
					</div>

					<div class="single-project">
						<img src="assets/images/projects/p2.jpg" alt="Image">

						<div class="project-content">
							<a href="project-details.html">Droits des jeunes</a>
						</div>
					</div>

					<div class="single-project">
						<img src="assets/images/projects/p3.jpg" alt="Image">

						<div class="project-content">
							<a href="project-details.html">Droits de l'homme</a>
						</div>
					</div>

					<div class="single-project">
						<img src="assets/images/projects/p4.jpg" alt="Image">

						<div class="project-content">
							<a href="project-details.html">Droits des femmes</a>
						</div>
					</div>

				
				</div>
			</div>
		</section>
		<!-- End Project Area -->

	ss

		
@endsection