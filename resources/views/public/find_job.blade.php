@extends('layouts.public')

@section('content')

		<!-- Title Start -->
		<div class="title-bar">			
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ol class="title-bar-text">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Browser Jobs</li>
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
					<div class="col-lg-4 col-md-5">
						<div class="browser-job-filters">
							<div class="filter-heading">
								<div class="fh-left">
									Filters
								</div>
								<div class="fh-right">
									<a href="#">Clear All Filters</a>
								</div>
							</div>
							<div class="fltr-group">
								<div class="fltr-items-heading">
									<div class="fltr-item-left">
										<h6>Skills</h6>
									</div>
									<div class="fltr-item-right">
										<a href="#">Clear</a>
									</div>
								</div>								
								<div class="ui fluid multiple search selection dropdown skills-search">
									<input name="tags" type="hidden" value="">
									<i class="dropdown icon"></i>
									<input class="search" autocomplete="off" tabindex="0"><span class="sizer" style=""></span><div class="default text">Skills</div>
									<div class="menu transition hidden" tabindex="-1">
										<div class="item selected" data-value="angular">Angular</div>
										<div class="item" data-value="css">CSS</div>
										<div class="item" data-value="design">Graphic Design</div>
										<div class="item" data-value="ember">Ember</div>
										<div class="item" data-value="html">HTML</div>
										<div class="item" data-value="ia">Information Architecture</div>
										<div class="item" data-value="javascript">Javascript</div>
										<div class="item" data-value="mech">Mechanical Engineering</div>
										<div class="item" data-value="meteor">Meteor</div>
										<div class="item" data-value="node">NodeJS</div>
										<div class="item" data-value="plumbing">Plumbing</div>
										<div class="item" data-value="python">Python</div>
										<div class="item" data-value="rails">Rails</div>
										<div class="item" data-value="react">React</div>
										<div class="item" data-value="repair">Kitchen Repair</div>
										<div class="item" data-value="ruby">Ruby</div>
										<div class="item" data-value="ui">UI Design</div>
										<div class="item" data-value="ux">User Experience</div>
									</div>
								</div>
							</div>
						
							<div class="fltr-group">
								<div class="fltr-items-heading">
									<div class="fltr-item-left">
										<h6>Job Type</h6>
									</div>
									<div class="fltr-item-right">
										<a href="#">Clear</a>
									</div>
								</div>								
								<div class="ui fluid search selection dropdown skills-search">
									<input name="tags" type="hidden" value="">
									<i class="dropdown icon"></i>
									<input class="search" autocomplete="off" tabindex="0">
									<span class="sizer" style=""></span>
									<div class="default text">Select a job</div>
									<div class="menu transition hidden" tabindex="-1">
										<div class="item selected" data-value="Job1">Job 01</div>										
										<div class="item" data-value="Job2">Job 02</div>										
										<div class="item" data-value="Job3">Job 03</div>										
										<div class="item" data-value="Job4">Job 04</div>										
										<div class="item" data-value="Job5">Job 05</div>										
										<div class="item" data-value="Job6">Job 06</div>										
										<div class="item" data-value="Job7">Job 07</div>										
										<div class="item" data-value="Job8">Job 08</div>										
										<div class="item" data-value="Job9">Job 09</div>										
										<div class="item" data-value="Job10">Job 10</div>										
										<div class="item" data-value="Job11">Job 11</div>										
										<div class="item" data-value="Job12">Job 12</div>										
										<div class="item" data-value="Job13">Job 13</div>										
										<div class="item" data-value="Job14">Job 14</div>										
										<div class="item" data-value="Job15">Job 15</div>										
									</div>
								</div>
							</div>
					
							<div class="filter-button">
								<button class="flr-btn">Search Now</button>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-md-7 mainpage">
						<div class="browse-banner">
							<div class="bbnr-left">
								<img src="{{ asset('assets/publics/images/browse/trophy.png') }}" alt="">
								<div class="bbnr-text">
									<h4>Upgrade to Pro</h4>
									<p>Unlimited Job Posts and Apply.</p>
								</div>
							</div>
							<div class="bbnr-right">
								<button class="plan-btn">Upgrade Plan</button>
							</div>
						</div>
						<div class="main-tabs">
							<div class="res-tabs">
								<div class=" mtab-left">
									<ul class="nav nav-tabs" id="myTab" role="tablist">
										<li class="nav-item">
											<a href="#tab-1" class="nav-link active" data-toggle="tab">Newest Jobs</a>
										</li>
																		
									</ul>
								</div>
								<div class=" mtab-right">
									<ul>
										<li class="sort-list-dt">
											<div class="ui selection dropdown skills-search sort-dropdown">
												<input name="gender" type="hidden" value="default">
												<i class="dropdown icon d-icon"></i>
												<div class="text">Sort By</div>
												<div class="menu">
													<div class="item" data-value="0">Relevance</div>
													<div class="item" data-value="1">New</div>
													<div class="item" data-value="2">Old</div>
													<div class="item" data-value="3">Last 15 Days</div>
												</div>
											</div>
										</li>
										<li class="grid-list">									
											<button class="gl-btn" id="grid"><i class="fas fa-th-large"></i></button> 
											<button class="gl-btn" id="list"><i class="fas fa-th-list"></i></button>
										</li>
									</ul>
								</div>
							</div>
							<div class="tab-content">
								<div class="tab-pane active" id="tab-1">
									<div class="row  view-group" id="products">

										@foreach($projets as $item)

										<div class="lg-item col-lg-6 col-xs-6 grid-group-item1">
											<div class="job-item mt-30">
												<div class="job-top-dt">
													<div class="job-left-dt">
														<img src="{{ asset('storage/'.$item->user->photo) }}" alt="">
														<div class="job-ut-dts">
															<a href="#"><h4>{{ $item->user->prenom}}  {{ $item->user->nom }} </h4></a>
														<!-- 	<span><i class="fas fa-map-marker-alt"></i> New York City</span> -->
														</div>
													</div>
													<div class="job-right-dt">
														<div class="job-price">{{ $item->prix }} DH </div>
														
													</div>
												</div>
												<div class="job-des-dt">
													<h4>{{ $item->titre }}</h4>
													<p>{{ $item->description }}</p>
													<div class="job-skills">

														<a href="#">Catégorie : {{$item->categorie->libelle}}</a>
											
													</div>
												</div>

												<div class="job-buttons">
													<ul >
														
														<li><a href="{{ url('/show-job/'.$item->id) }}" class="link-j1" title="View Job">Voir offre</a></li>
														
													</ul>
												</div>
											</div>
										</div>

										@endforeach

									<!-- 	<div class="lg-item col-lg-6 col-xs-6 grid-group-item1">
										<div class="job-item mt-30">
											<div class="job-top-dt">
												<div class="job-left-dt">
													<img src="{{ asset('assets/publics/images/homepage/latest-jobs/img-2.jpg') }}" alt="">
													<div class="job-ut-dts">
														<a href="#"><h4>Johnson Smith</h4></a>
														<span><i class="fas fa-map-marker-alt"></i> India</span>
													</div>
												</div>
												<div class="job-right-dt">
													<div class="job-price">$50/hr</div>
													<div class="job-fp job-prt">Part Time</div>
												</div>
											</div>
											<div class="job-des-dt">
												<h4>PHP Developer</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
												<div class="job-skills">
													<a href="#">Php</a>
													<a href="#">Sql</a>
													<a href="#">Javascript</a>
													<a href="#" class="more-skills">+4</a>
												</div>
											</div>
											<div class="job-buttons">
												<ul class="link-btn">
													<li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
													<li><a href="job_single_view.html" class="link-j1" title="View Job">View Job</a></li>
													<li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
												</ul>
											</div>
										</div>
									</div> -->
							
										<div class="col-12">
											<div class="main-p-pagination">
												<nav aria-label="Page navigation example">
													<ul class="pagination">

														{{ $projets->links() }}
														
													</ul>
												</nav>
											</div>
										</div>										
									</div>
								</div>		
						
								
							</div>														
						</div>														
					</div>													
				</div>
			</div>					
		</main>
		<!-- Body End -->

@endsection