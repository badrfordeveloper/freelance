@extends('layouts.public')

@section('content')
<main class="browse-section">				
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8">
				<div class="view_details">
					<ul>

						<li>
							<div class="vw_items">
								<i class="fas fa-users"></i>
								<div class="vw_item_text">
									<h6>Applicants</h6>
									<span>{{ $projet->commandes->count() }}</span>
								</div>
							</div>
						</li>
						<li>
							<div class="vw_items">
								<i class="fas fa-briefcase"></i>
								<div class="vw_item_text">
									<h6>Catégorie</h6>
									<span>{{ $projet->categorie->libelle }}</span>
								</div>
							</div>
						</li>
						<li>
							<div class="vw_items">
								<i class="far fa-money-bill-alt"></i>
								<div class="vw_item_text">
									<h6>Prix</h6>
									<span>{{ $projet->prix }} DH</span>
								</div>
							</div>
						</li>
						<li>
							<div class="vw_items">
								<i class="far fa-clock"></i>
								<div class="vw_item_text">
									<h6>Date de publication</h6>
								<?php

							
									$diff_in_days = \Carbon\Carbon::createFromTimeStamp(strtotime($projet->updated_at))->diffForHumans()
							
									?>



									<span>{{$diff_in_days}}</span>
								</div>
							</div>
						</li>								
					</ul>
				</div>
				<div class="job-item ptrl_2 mt-20">
					<div class="job-top-dt">
						<div class="job-left-dt">
							<img src="{{ asset('storage/'.$projet->user->photo) }}" alt="">
							<div class="job-ut-dts">
								<a href="#"><h4>{{ $projet->user->prenom}}  {{ $projet->user->nom }}</h4></a>

							</div>
						</div>
						<div class="job-right-dt">
							<div class="job-price">{{ $projet->prix }} DH</div>
						</div>
					</div>
					<div class="job-des-dt">
						<h4>{{ $projet->titre }}</h4>
						<p>{{ $projet->description }}</p>
					</div>
					<div class="job_dts">
						<h4>Requirements</h4>
						<ul>

							<li>
								<div class="job_dt_1">
									<h6>Catégorie : </h6>

									<a href="#"> {{ $projet->categorie->libelle }}</a>

								</div>
							</li>
							<li>
								<div class="job_dt_1">
									<h6>Compétences : </h6>
									
									@forelse($projet->skills as $skill)	

									&nbsp; <a href="#">{{$skill->libelle}}</a>&nbsp; , 

									@empty

									No Compétences

									@endforelse

								</div>
							</li>

						</ul>
					</div>

				</div>

			</div>
			<div class="col-lg-3 col-md-4 mainpage">
				<button class="apply_job_rt mtp_30" type="button" data-toggle="modal" data-target="#applyjobModal">APPLY NOW</button>
			<!-- 	<ul class="social-links">
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
				<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
			</ul> -->
			</div>
			@if($projets->count()!=0)
			<div class="col-12">						
				<div class="find-lts-jobs10 ">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-12">
								<div class="main-heading">
									<h2>Emplois similaires</h2>
									<div class="line-shape1">
										<img src="images/line.svg" alt="">
									</div>
								</div>
							</div>

							
							<div class="col-md-12 col-12">
								<div class="lts-jobs-slider">
									<div class="owl-carousel jobs-owl owl-theme">


										@foreach($projets as $item)

										<div class="item">
											<div class="job-item">
												<div class="job-top-dt">
													<div class="job-left-dt">
														<img src="{{ asset('storage/'.$item->user->photo) }}" alt="">
														<div class="job-ut-dts">
															<a href="#"><h4>{{ $item->user->prenom}}  {{ $item->user->nom }} </h4></a>
														</div>
													</div>
													<div class="job-right-dt">
														<div class="job-price">{{ $item->prix }} DH </div>
													</div>
												</div>
												<div class="job-des-dt">
													<h4>{{ $item->titre }}</h4>
													<p>{{ $item->description }}</p>
												</div>
												<div class="job-buttons">
													<ul >
														
														<li><a href="{{ url('/show-job/'.$item->id) }}" class="link-j1" title="View Job">Voir offre</a></li>
													</ul>
												</div>
											</div>
										</div>	

										@endforeach



									</div>
								</div>						
							</div>						
						</div>
					</div>
				</div>														
			</div>
			@endif


		</div>
	</div>					
</main>
@endsection