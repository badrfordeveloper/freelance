@extends('layouts.public')

@section('content')
<!-- Title Start -->
		<div class="title-bar">			
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ol class="title-bar-text">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Other Freelancer Profile</li>
						</ol>
					</div>		
				</div>		
			</div>		
		</div>
		<!-- Title Start -->
		<!-- Body Start -->	
		<main class="browse-section">				
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4">
						<div class="account_dt_left">
							<div class="job-center-dt">
								<img src="{{ asset('storage/'.$user->photo) }}" alt="">
								<div class="job-urs-dts">									
									<h4>{{ $user->nom }} {{ $user->prenom }}</h4>
									<span>{{ $user->username }}</span>
								</div>
								<ul class="user_btns">
									<li><button class="hire_btn" type="button">Hire Me</button></li>
									<li><button class="hire_btn" type="button">Message</button></li>
								</ul>
							</div>
							<!-- <div class="my_websites">
								<ul>
									<li><a href="#" class="web_link"><i class="fas fa-globe"></i>www.companysite.com</a></li>
									<li><a href="#" class="web_link"><i class="far fa-edit"></i>www.blogsite.com</a></li>
								</ul>
							</div> -->
							<div class="group_skills_bar">
								<h6>Profile Completeness</h6>
								<div class="group_bar1">
									<span>90%</span>
									<div class="progress skill_process">
										<div class="progress-bar progress_bar_skills" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>								
							</div>
							<div class="rlt_section">
								<div class="rtl_left">
									<h6>Rating</h6>
								</div>
								<div class="rtl_right">
									<div class="star">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>								
										<span>4.9</span> 									
									</div>
								</div>
							</div>
							<div class="rlt_section">
								<ul class="rlt_section2">
									<li>
										<div class="rtl_left2">
											<h6>Age</h6>
										</div>
										<div class="rtl_right2">
											<?php $now = \Carbon\Carbon::now();  ?>
											<span>{{ $now->diffInYears($user->dateNaissance) . " ans" }}</span>
										</div>
									</li>
									<li>
										<div class="rtl_left2">
											<h6>Experenice</h6>
										</div>
										<div class="rtl_right2">
											<span>{{ $user->profile->experience}}</span>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-9 col-md-8 mainpage">
						<div class="account_tabs">
							<ul class="nav nav-tabs">
								<li class="nav-item">
									<a class="nav-link active" href="other_freelancer_profile.html">Profile</a>
								</li>
								<!-- <li class="nav-item">
									<a class="nav-link" href="other_freelancer_portfolio.html">Portfolio</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="other_freelancer_reviews.html">Reviews</a>
								</li> -->
							</ul>
						</div>						
						<div class="view_chart">
							<div class="view_chart_header">
								<h4>A Propos</h4>								
							</div>
							<div class="view_chart_body">
								<p class="user_about_des">
									{{ $user->profile->description }}
								</p>
							</div>
						</div>
						<div class="view_chart">
							<div class="view_chart_header">
								<h4>Skills</h4>								
							</div>
							<div class="view_chart_body">
								<div class="job-skills">
									@foreach( $user->profile->skills as $item)
									<a href="#">{{ $item->libelle }}</a>
									@endforeach								
								</div>
							</div>
						</div>
						<div class="view_chart">
							<div class="view_chart_header">
								<h4>Language</h4>								
							</div>
							<div class="view_chart_body">
								<div class="job-skills">
									<a href="#" class="more-skills">English</a>
									<a href="#" class="more-skills">Punjabi</a>
									<a href="#" class="more-skills">Hindi</a>																	
								</div>
							</div>
						</div>						
					</div>																																						
				</div>
			</div>					
		</main>
		<!-- Body End -->

@endsection