@extends('layouts.public')

@section('content')

        <div class="banner_single version_4">
                <div class="wrapper">
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-md-10">
                                <div class="banner_text">
                                    <h2>New Provider Jobs Added Every Day</h2>
                                </div>
                                <div class="banner_form">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-4">
                                            <div class="form-group">
                                                <label class="label15">Job Type*</label>
                                                <div class="ui fluid search selection dropdown skills-search">
                                                    <input name="tags" type="hidden" value="">
                                                    <i class="dropdown icon"></i>
                                                    <input class="search" autocomplete="off" tabindex="0">
                                                    <span class="sizer" style=""></span>
                                                    <div class="default text">Select a job</div>
                                                    <div class="menu transition hidden" tabindex="-1">
                                                        <div class="item selected" data-value="Job1">Doctors</div>                                      
                                                        <div class="item" data-value="Job2">Nurses</div>                                        
                                                        <div class="item" data-value="Job3">Dentists</div>                                      
                                                        <div class="item" data-value="Job4">Technicians</div>                                       
                                                        <div class="item" data-value="Job5">Pharmacy</div>                                      
                                                        <div class="item" data-value="Job6">Optician</div>                                      
                                                        <div class="item" data-value="Job7">Allopathy </div>                                        
                                                        <div class="item" data-value="Job8">Homeopathy</div>                                        
                                                        <div class="item" data-value="Job9">Pharmaceutical</div>                                        
                                                        <div class="item" data-value="Job10">Medical Officer</div>                                      
                                                        <div class="item" data-value="Job11">Hospital Staff</div>                                       
                                                        <div class="item" data-value="Job12">Dietian & Nutritionst</div>                                        
                                                        <div class="item" data-value="Job13">Other</div>                                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5 col-lg-5">
                                            <div class="form-group">
                                                <label class="label15">Location*</label>
                                                <div class="smm_input">
                                                    <input type="text" class="job-input" placeholder="Location (e.g. City, Country...)">
                                                    <div class="loc_icon"><i class="fas fa-crosshairs"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3">
                                            <button class="srch-btn" type="submit">Search Now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="most_searchs">
                                    <h6>Most Searches :</h6>
                                    <ul>
                                        <li><a href="#" class="most_link">Doctors</a></li>
                                        <li><a href="#" class="most_link">Dentists</a></li>
                                        <li><a href="#" class="most_link">Technician</a></li>
                                        <li><a href="#" class="most_link">Pharmacy</a></li>
                                        <li><a href="#" class="most_link">Dietain / Nutritionist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="we-offers">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="main-heading">
                                <h2>What We Offers</h2>
                                <span>Offering the Best Deal</span>
                                <div class="line-shape1">
                                    <img src="{{ asset('assets/publics/images/line.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="offer-step">
                                <div class="offer-text-dt">
                                    <h4>Searching the Best Jobs</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum commodo mi.</p>
                                    <a href="#">Read More<i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="offer-step">
                                <div class="offer-text-dt">
                                    <h4>Apply for a Good Job</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum commodo mi.</p>
                                    <a href="#">Read More<i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="offer-step">
                                <div class="offer-text-dt">
                                    <h4>More Quality Hires</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum commodo mi.</p>
                                    <a href="#">Read More<i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="offer-step">
                                <div class="offer-text-dt">
                                    <h4>Post a Job Free</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum commodo mi.</p>
                                    <a href="#">Read More<i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="all-categories">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="main-heading">
                                <h2>Choose Job Category</h2>
                                <span>Best Jobs All Categories</span>
                                <div class="line-shape1">
                                    <img src="{{ asset('assets/publics/images/line.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="job-categories mt-30">
                                <div class="row no-gutters">
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
                                                <img src="{{ asset('assets/publics/images/homepage/categories/icon-1.svg') }}" alt="">
                                                <span>Doctors</span>
                                                <p>150 Jobs</p>
                                            </a>
                                        </div>                      
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
                                                <img src="{{ asset('assets/publics/images/homepage/categories/icon-2.svg') }}" alt="">
                                                <span>Nurses</span>
                                                <p>120 Jobs</p>
                                            </a>
                                        </div>                      
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
                                                <img src="{{ asset('assets/publics/images/homepage/categories/icon-3.svg') }}" alt="">
                                                <span>Dentists</span>
                                                <p>290 Jobs</p>
                                            </a>
                                        </div>                      
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
                                                <img src="{{ asset('assets/publics/images/homepage/categories/icon-4.svg') }}" alt="">
                                                <span>Technicians</span>
                                                <p>250 Jobs</p>
                                            </a>
                                        </div>                      
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
                                                <img src="{{ asset('assets/publics/images/homepage/categories/icon-5.svg') }}" alt="">
                                                <span>Pharmacy</span>
                                                <p>350 Jobs</p>
                                            </a>
                                        </div>                      
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
                                                <img src="{{ asset('assets/publics/images/homepage/categories/icon-6.svg') }}" alt="">
                                                <span>Optician</span>
                                                <p>90 Jobs</p>
                                            </a>
                                        </div>                      
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
                                                <img src="{{ asset('assets/publics/images/homepage/categories/icon-7.svg') }}" alt="">
                                                <span>Allopathy </span>
                                                <p>250 Jobs</p>
                                            </a>
                                        </div>                      
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
                                                <img src="{{ asset('assets/publics/images/homepage/categories/icon-8.svg') }}" alt="">
                                                <span>Homeopathy</span>
                                                <p>150 Jobs</p>
                                            </a>
                                        </div>                      
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
                                                <img src="{{ asset('assets/publics/images/homepage/categories/icon-9.svg') }}" alt="">
                                                <span>Pharmaceutical</span>
                                                <p>110 Jobs</p>
                                            </a>
                                        </div>                      
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
                                                <img src="{{ asset('assets/publics/images/homepage/categories/icon-10.svg') }}" alt="">
                                                <span>Medical Officer</span>
                                                <p>310 Jobs</p>
                                            </a>
                                        </div>                      
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
                                                <img src="{{ asset('assets/publics/images/homepage/categories/icon-11.svg') }}" alt="">
                                                <span>Hospitals</span>
                                                <p>410 Jobs</p>
                                            </a>
                                        </div>                      
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="p-category">
                                            <a href="#" title="">
                                                <img src="{{ asset('assets/publics/images/homepage/categories/icon-12.svg') }}" alt="">
                                                <span>Dietian &amp; Nutritionst</span>
                                                <p>190 Jobs</p>
                                            </a>
                                        </div>                      
                                    </div>
                                </div>                      
                            </div>                                                  
                        </div>                      
                    </div>
                </div>
            </div>
            <div class="find-lts-jobs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="main-heading">
                                <h2>Find Latest Jobs</h2>
                                <span>Your Job for a Future</span>
                                <div class="line-shape1">
                                    <img src="{{ asset('assets/publics/images/line.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="lts-jobs-slider">
                                <div class="owl-carousel jobs-owl owl-theme">
                                    <div class="item">
                                        <div class="job-item">
                                            <div class="job-top-dt">
                                                <div class="job-left-dt">
                                                    <img src="{{ asset('assets/publics/images/homepage/latest-jobs/img-1.jpg') }}" alt="">
                                                    <div class="job-ut-dts">
                                                        <a href="#"><h4>John Doe</h4></a>
                                                        <span><i class="fas fa-map-marker-alt"></i> New York City</span>
                                                    </div>
                                                </div>
                                                <div class="job-right-dt">
                                                    <div class="job-price">$599</div>
                                                </div>
                                            </div>
                                            <div class="job-des-dt">
                                                <h4>Nurse</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                <div class="exp145">
                                                    Experience Level : <span>Intermediate (3 year - 5 year)</span>                                          
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
                                    </div>  
                                    <div class="item">
                                        <div class="job-item">
                                            <div class="job-top-dt">
                                                <div class="job-left-dt">
                                                    <img src="{{ asset('assets/publics/images/homepage/latest-jobs/img-2.jpg') }}" alt="">
                                                    <div class="job-ut-dts">
                                                        <a href="#"><h4>Johnson Smith</h4></a>
                                                        <span><i class="fas fa-map-marker-alt"></i> India</span>
                                                    </div>
                                                </div>
                                                <div class="job-right-dt">
                                                    <div class="job-price">$458</div>
                                                </div>
                                            </div>
                                            <div class="job-des-dt">
                                                <h4>Technician</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                <div class="exp145">
                                                    Experience Level : <span>Intermediate (3 year - 5 year)</span>                                          
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
                                    </div>
                                    <div class="item">
                                        <div class="job-item">
                                            <div class="job-top-dt">
                                                <div class="job-left-dt">
                                                    <img src="{{ asset('assets/publics/images/homepage/latest-jobs/img-3.jpg') }}" alt="">
                                                    <div class="job-ut-dts">
                                                        <a href="#"><h4>Apollo Hospital</h4></a>
                                                        <span><i class="fas fa-map-marker-alt"></i> Australia</span>
                                                    </div>
                                                </div>
                                                <div class="job-right-dt">
                                                    <div class="job-price">$2599</div>
                                                </div>
                                            </div>
                                            <div class="job-des-dt">
                                                <h4>Senior Doctor</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                <div class="exp145">
                                                    Experience Level : <span>Intermediate (3 year - 5 year)</span>                                          
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
                                    </div>
                                    <div class="item">
                                        <div class="job-item">
                                            <div class="job-top-dt">
                                                <div class="job-left-dt">
                                                    <img src="{{ asset('assets/publics/images/homepage/latest-jobs/img-4.jpg') }}" alt="">
                                                    <div class="job-ut-dts">
                                                        <a href="#"><h4>Joy Smith</h4></a>
                                                        <span><i class="fas fa-map-marker-alt"></i> India</span>
                                                    </div>
                                                </div>
                                                <div class="job-right-dt">
                                                    <div class="job-price">$599</div>
                                                </div>
                                            </div>
                                            <div class="job-des-dt">
                                                <h4>Nurse</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                <div class="exp145">
                                                    Experience Level : <span>Intermediate (3 year - 5 year)</span>                                          
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
                                    </div>
                                    <div class="item">
                                        <div class="job-item">
                                            <div class="job-top-dt">
                                                <div class="job-left-dt">
                                                    <img src="{{ asset('assets/publics/images/homepage/latest-jobs/img-5.jpg') }}" alt="">
                                                    <div class="job-ut-dts">
                                                        <a href="#"><h4>Jassica William</h4></a>
                                                        <span><i class="fas fa-map-marker-alt"></i> Australia</span>
                                                    </div>
                                                </div>
                                                <div class="job-right-dt">
                                                    <div class="job-price">$300</div>
                                                </div>
                                            </div>
                                            <div class="job-des-dt">
                                                <h4>Optician Specilist</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                <div class="exp145">
                                                    Experience Level : <span>Intermediate (3 year - 5 year)</span>                                          
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
                                    </div>
                                    <div class="item">
                                        <div class="job-item">
                                            <div class="job-top-dt">
                                                <div class="job-left-dt">
                                                    <img src="{{ asset('assets/publics/images/homepage/latest-jobs/img-6.jpg') }}" alt="">
                                                    <div class="job-ut-dts">
                                                        <a href="#"><h4>Gambolthemes</h4></a>
                                                        <span><i class="fas fa-map-marker-alt"></i> India</span>
                                                    </div>
                                                </div>
                                                <div class="job-right-dt">
                                                    <div class="job-price">$600</div>
                                                </div>
                                            </div>
                                            <div class="job-des-dt">
                                                <h4>Medical Officer</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                <div class="exp145">
                                                    Experience Level : <span>Intermediate (3 year - 5 year)</span>                                          
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
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="view-links" onclick="window.location.href = '#';">BROWSE ALL JOBS</button>
                                </div>
                            </div>                      
                        </div>                      
                    </div>
                </div>
            </div>          
            <div class="featured-candidates">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="main-heading">
                                <h2>Featured Profiles &amp; Hospitals</h2>
                                <span>Discover, Intelligent, Experienced, Professional, Trustworthy, Profiles &amp; Hospitals</span>
                                <div class="line-shape1">
                                    <img src="{{ asset('assets/publics/images/line.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="lts-jobs-slider">
                                <div class="owl-carousel jobs-owl owl-theme">
                                    <div class="item">
                                        <div class="job-item">
                                            <div class="job-top-dt1 text-center">
                                                <div class="job-center-dt">
                                                    <img src="{{ asset('assets/publics/images/homepage/candidates/img-1.jpg') }}" alt="">
                                                    <div class="job-urs-dts">
                                                        <a href="#"><h4>John Doe</h4></a>
                                                        <span>Doctor</span>
                                                        <div class="exp145 text-center mt-2">
                                                            Experience Level : <span>5 year</span>                                          
                                                        </div>
                                                    </div>                                                  
                                                </div>  
                                            </div>
                                            <div class="rating-location">
                                                <div class="left-rating">
                                                    <div class="rtitle">Rating</div>
                                                    <div class="star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>                             
                                                        <span>4.9</span> 
                                                    </div>
                                                </div>
                                                <div class="right-location">
                                                    <div class="text-left">
                                                        <div class="rtitle">Location</div>
                                                        <span><i class="fas fa-map-marker-alt"></i> New York City</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="job-buttons">
                                                <ul class="link-btn">
                                                    <li><a href="other_doctor_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
                                                    <li><a href="#" class="link-j1" title="Hire Me">Message</a></li>
                                                    <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="job-item">
                                            <div class="job-top-dt1 text-center">
                                                <div class="job-center-dt">
                                                    <img src="{{ asset('assets/publics/images/homepage/candidates/img-8.jpg') }}" alt="">
                                                    <div class="job-urs-dts">
                                                        <a href="#"><h4>Jassica William</h4></a>
                                                        <span>Doctor</span>
                                                        <div class="exp145 text-center mt-2">
                                                            Experience Level : <span>2 year</span>                                          
                                                        </div>
                                                    </div>                                                  
                                                </div>  
                                            </div>
                                            <div class="rating-location">
                                                <div class="left-rating">
                                                    <div class="rtitle">Rating</div>
                                                    <div class="star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>                             
                                                        <span>4.9</span> 
                                                    </div>
                                                </div>
                                                <div class="right-location">
                                                    <div class="text-left">
                                                        <div class="rtitle">Location</div>
                                                        <span><i class="fas fa-map-marker-alt"></i> India</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="job-buttons">
                                                <ul class="link-btn">
                                                    <li><a href="other_doctor_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
                                                    <li><a href="#" class="link-j1" title="Hire Me">Message</a></li>
                                                    <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="job-item">
                                            <div class="job-top-dt1 text-center">
                                                <div class="job-center-dt">
                                                    <img src="{{ asset('assets/publics/images/homepage/candidates/img-4.jpg') }}" alt="">
                                                    <div class="job-urs-dts">
                                                        <a href="#"><h4>Joginder Singh</h4></a>
                                                        <span>Eye Specilist</span>
                                                        <div class="exp145 text-center mt-2">
                                                            Experience Level : <span>5 year</span>                                          
                                                        </div>
                                                    </div>                                                  
                                                </div>  
                                            </div>
                                            <div class="rating-location">
                                                <div class="left-rating">
                                                    <div class="rtitle">Rating</div>
                                                    <div class="star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>                             
                                                        <span>5.0</span> 
                                                    </div>
                                                </div>
                                                <div class="right-location">
                                                    <div class="text-left">
                                                        <div class="rtitle">Location</div>
                                                        <span><i class="fas fa-map-marker-alt"></i> New York City</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="job-buttons">
                                                <ul class="link-btn">
                                                    <li><a href="other_doctor_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
                                                    <li><a href="#" class="link-j1" title="Hire Me">Message</a></li>
                                                    <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="job-item">
                                            <div class="job-top-dt1 text-center">
                                                <div class="job-center-dt">
                                                    <img src="{{ asset('assets/publics/images/homepage/candidates/img-3.jpg') }}" alt="">
                                                    <div class="job-urs-dts">
                                                        <a href="#"><h4>Rock Smith</h4></a>
                                                        <span>Homeopathy Doctor</span>
                                                        <div class="exp145 text-center mt-2">
                                                            Experience Level : <span>3 year</span>                                          
                                                        </div>
                                                    </div>                                                  
                                                </div>  
                                            </div>
                                            <div class="rating-location">
                                                <div class="left-rating">
                                                    <div class="rtitle">Rating</div>
                                                    <div class="star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>                             
                                                        <span>5.0</span> 
                                                    </div>
                                                </div>
                                                <div class="right-location">
                                                    <div class="text-left">
                                                        <div class="rtitle">Location</div>
                                                        <span><i class="fas fa-map-marker-alt"></i> India</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="job-buttons">
                                                <ul class="link-btn">
                                                    <li><a href="other_doctor_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
                                                    <li><a href="#" class="link-j1" title="Hire Me">Message</a></li>
                                                    <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="job-item">
                                            <div class="job-top-dt1 text-center">
                                                <div class="job-center-dt">
                                                    <img src="{{ asset('assets/publics/images/homepage/candidates/img-11.jpg') }}" alt="">
                                                    <div class="job-urs-dts">
                                                        <a href="#"><h4>Apollo Hospital</h4></a>
                                                        <span>Hospital</span>
                                                        <div class="exp145 text-center mt-2">
                                                            Since : <span>1985</span>                                           
                                                        </div>
                                                    </div>                                                  
                                                </div>  
                                            </div>
                                            <div class="rating-location">
                                                <div class="left-rating">
                                                    <div class="rtitle">Rating</div>
                                                    <div class="star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>                             
                                                        <span>4.0</span> 
                                                    </div>
                                                </div>
                                                <div class="right-location">
                                                    <div class="text-left">
                                                        <div class="rtitle">Location</div>
                                                        <span><i class="fas fa-map-marker-alt"></i> India</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="job-buttons">
                                                <ul class="link-btn">
                                                    <li><a href="other_hospital_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
                                                    <li><a href="#" class="link-j1" title="Hire Me">Message</a></li>
                                                    <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="job-item">
                                            <div class="job-top-dt1 text-center">
                                                <div class="job-center-dt">
                                                    <img src="{{ asset('assets/publics/images/homepage/candidates/img-13.jpg') }}" alt="">
                                                    <div class="job-urs-dts">
                                                        <a href="#"><h4>Puri Clinic</h4></a>
                                                        <span>Eye Clinic</span>
                                                        <div class="exp145 text-center mt-2">
                                                            Since : <span>1965</span>                                           
                                                        </div>
                                                    </div>                                                  
                                                </div>  
                                            </div>
                                            <div class="rating-location">
                                                <div class="left-rating">
                                                    <div class="rtitle">Rating</div>
                                                    <div class="star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>                             
                                                        <span>5.0</span> 
                                                    </div>
                                                </div>
                                                <div class="right-location">
                                                    <div class="text-left">
                                                        <div class="rtitle">Location</div>
                                                        <span><i class="fas fa-map-marker-alt"></i> India</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="job-buttons">
                                                <ul class="link-btn">
                                                    <li><a href="other_hospital_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
                                                    <li><a href="#" class="link-j1" title="Hire Me">Message</a></li>
                                                    <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>                                  
                                </div>
                                <div class="text-center">
                                    <button class="view-links" onclick="window.location.href = '#';">SEE ALL CANDIDATES</button>
                                </div>                      
                            </div>                      
                        </div>                      
                    </div>
                </div>
            </div>
            <div class="all-categories">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="rsgfree125">
                                <h4>Looking &amp; Post Your Jobs!</h4>
                                <p>Free Sign Up, Job Posting &amp Resume Posting is Absolutely Free!</p>
                                <button class="rsbtn14" onclick="window.location.href = 'sign_up.html';">Register Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog_sec21">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="main-heading">
                                <h2>Our Blog</h2>
                                <span>Latest News and Resources</span>
                                <div class="line-shape1">
                                    <img src="{{ asset('assets/publics/images/line.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="blog_item">
                                <div class="blog_img1">
                                    <img src="{{ asset('assets/publics/images/homepage/blog/img-1.jpg') }}" alt="">
                                </div>
                                <div class="blog_dt1">
                                    <div class="blog_body">
                                        <div class="blog_left">
                                            <p>By <a href="#">John Doe</a></p>
                                        </div>
                                        <div class="blog_right">
                                            <span>2 October 2018</span>
                                        </div>
                                        <h4>Quisque non ipsum at lacus luctus volutpat id ac odio.</h4>
                                        <p>Mauris sit amet lacus vel purus facilisis cursus sed dignissim dolor. Proin at accumsan augue...</p>
                                        <a href="blog_single_view.html" class="read_btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="blog_item">
                                <div class="blog_img1">
                                    <img src="{{ asset('assets/publics/images/homepage/blog/img-2.jpg') }}" alt="">
                                </div>
                                <div class="blog_dt1">
                                    <div class="blog_body">
                                        <div class="blog_left">
                                            <p>By <a href="#">John Doe</a></p>
                                        </div>
                                        <div class="blog_right">
                                            <span>2 October 2018</span>
                                        </div>
                                        <h4>Quisque non ipsum at lacus luctus volutpat id ac odio.</h4>
                                        <p>Mauris sit amet lacus vel purus facilisis cursus sed dignissim dolor. Proin at accumsan augue...</p>
                                        <a href="blog_single_view.html" class="read_btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="blog_item">
                                <div class="blog_img1">
                                    <img src="{{ asset('assets/publics/images/homepage/blog/img-3.jpg') }}" alt="">
                                </div>
                                <div class="blog_dt1">
                                    <div class="blog_body">
                                        <div class="blog_left">
                                            <p>By <a href="#">John Doe</a></p>
                                        </div>
                                        <div class="blog_right">
                                            <span>2 October 2018</span>
                                        </div>
                                        <h4>Quisque non ipsum at lacus luctus volutpat id ac odio.</h4>
                                        <p>Mauris sit amet lacus vel purus facilisis cursus sed dignissim dolor. Proin at accumsan augue...</p>
                                        <a href="blog_single_view.html" class="read_btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>                      
                    </div>
                </div>
            </div>
@endsection

