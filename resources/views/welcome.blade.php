<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Dev -- Personal Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><span>N</span>elsonJohn</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
	          <!-- <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li> -->
	          <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
	          <li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
			  <li>
				@if (Route::has('login'))
				@auth
					<li class="nav-item">
						<a class="nav-link" href="{{ route('home') }}">Dashboard</a>
					</li>
				@else
					<li class="nav-item">
						<a class="nav-link" href="{{ route('login') }}">Login</a>
					</li>
				@endauth
				@endif
			  </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <section class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
          	<div class="text text-center">
          		<span class="subheading">Hey! I am</span>
		  				<h1>Nelson John Montezo 1</h1>
			  				<h2>I'm a 
								  <span
								     class="txt-rotate"
								     data-period="2000"
								     data-rotate='[ "Web Developer.", "Editor.", "Photographer." ]'></span>
								</h2>
							</div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
				</a>
			</div> -->
    </section>

    <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 col-lg-6 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(assets/images/me.png);">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-6 pl-md-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
					@foreach($admin as $users)
		          	<h1 class="big">About</h1>
		            <h2 class="mb-4">About Me</h2>
		            <p>I'm Nelson John, a skilled web developer adept at translating ideas into functional and visually appealing websites. With a keen eye for design and a passion for clean, efficient code, I specialize in creating engaging and user-friendly websites that meet clients' needs and exceed expectations.</p>
		            <ul class="about-info mt-4 px-md-0 px-2">
						<li class="d-flex"><span>Name:</span> <span>{{ $users->name }}</span></li>
						<li class="d-flex"><span>Date of birth:</span> <span>{{ $users->birthday }}</span></li>
						<li class="d-flex"><span>Address:</span> <span>{{ $users->address }}</span></li>
						<li class="d-flex"><span>Zip code:</span> <span>{{ $users->zip_code }}</span></li>
						<li class="d-flex"><span>Email:</span> <span>{{ $users->email }}</span></li>
						<li class="d-flex"><span>Phone:</span> <span>{{ $users->phone }}</span></li>
					</ul>
					@endforeach
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-partner">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="assets/images/partner-1.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="assets/images/partner-2.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="assets/images/partner-3.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="assets/images/partner-4.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-3">
				    <nav id="navi">
					    <ul>
					      <li><a href="#page-1">Education</a></li>
					      <li><a href="#page-2">Experience</a></li>
					      <li><a href="#page-3">Skills</a></li>
					    </ul>
					  </nav>
					</div>
					<div class="col-md-9">
					  <div id="page-1" class= "page one">
					  	<h2 class="heading">Education</h2>
					    <div class="resume-wrap d-flex ftco-animate">
					    	<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2014-2015</span>
		    					<h2>Primary Education</h2>
		    					<span class="position">Hilongos South Central School (HSCS)</span>
		    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	    					</div>
	    				</div>
	    				<div class="resume-wrap d-flex ftco-animate">
	    					<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2014-2015</span>
		    					<h2>Secondary Education</h2>
		    					<span class="position">Mapandan National High School (MNHS)</span><br>
                                <span class="position">MLG College of Learning Inc.</span><br>
                                <span class="position">Hilongos National Vocational School (HNVS)</span>
		    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		    				</div>
	    				</div>
	    				<div class="resume-wrap d-flex ftco-animate">
	    					<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2014-2015</span>
		    					<h2>Tertiary Education</h2>
		    					<span class="position">MLG College of Learning Inc.</span>
		    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		    				</div>
	    				</div>
					  </div>

					  <div id="page-2" class= "page two">
					  	<h2 class="heading">Experience</h2>
					    <div class="resume-wrap d-flex ftco-animate">
					    	<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2014-2015</span>
		    					<h2>Software Developer</h2>
		    					<span class="position">Cambridge University</span>
		    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		    				</div>
	    				</div>
	    				<div class="resume-wrap d-flex ftco-animate">
	    					<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2014-2015</span>
		    					<h2>Tertiary Education</h2>
		    					<span class="position">MLG College of Learning Inc.</span>
		    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		    				</div>
	    				</div>
					  <div id="page-3" class= "page three">
					  	<h2 class="heading">Skills</h2>
					  	<div class="row progress-circle mb-5">
					  		<div class="col-lg-4 mb-4">
						      <div class="bg-white rounded-lg shadow p-4">
						        <h2 class="h5 font-weight-bold text-center mb-4">HTML</h2>

						        <!-- Progress bar 1 -->
						        <div class="progress mx-auto" data-value='25'>
						            <span class="progress-left">
                                        <span class="progress-bar border-primary"></span>
						            </span>
						            <span class="progress-right">
                                        <span class="progress-bar border-primary"></span>
						            </span>
						            <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
						                <div class="h2 font-weight-bold">25<sup class="small">%</sup></div>
						            </div>
						        </div>
						        <!-- END -->
						      </div>
						    </div>

						    <div class="col-lg-4 mb-4">
						      <div class="bg-white rounded-lg shadow p-4">
						        <h2 class="h5 font-weight-bold text-center mb-4">CSS</h2>

						        <!-- Progress bar 2 -->
						        <div class="progress mx-auto" data-value='25'>
						            <span class="progress-left">
                                        <span class="progress-bar border-primary"></span>
						            </span>
						            <span class="progress-right">
                                        <span class="progress-bar border-primary"></span>
						            </span>
						            <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
						                <div class="h2 font-weight-bold">25<sup class="small">%</sup></div>
						            </div>
						        </div>
						        <!-- END -->
						      </div>
						    </div>

						    <div class="col-lg-4 mb-4">
						      <div class="bg-white rounded-lg shadow p-4">
						        <h2 class="h5 font-weight-bold text-center mb-4">Javascript</h2>

						        <!-- Progress bar 3 -->
						        <div class="progress mx-auto" data-value='15'>
						            <span class="progress-left">
                                        <span class="progress-bar border-primary"></span>
						            </span>
						            <span class="progress-right">
                                        <span class="progress-bar border-primary"></span>
						            </span>
						            <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
						                <div class="h2 font-weight-bold">15<sup class="small">%</sup></div>
						            </div>
						        </div>
						        <!-- END -->
						      </div>
						    </div>
					  	</div>

					  	<!-- <div class="row">
					  		<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>HTML</h3>
										<div class="progress">
										 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="25"
										  	aria-valuemin="0" aria-valuemax="100" style="width:25%">
										    <span>25%</span>
										  	</div>
										</div>
									</div>
								</div>

								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>CSS</h3>
										<div class="progress">
										 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="25"
										  	aria-valuemin="0" aria-valuemax="100" style="width:25%">
										    <span>25%</span>
										  	</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>JS</h3>
										<div class="progress">
										 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="15"
										  	aria-valuemin="0" aria-valuemax="100" style="width:15%">
										    <span>15%</span>
										  	</div>
										</div>
									</div>
								</div>
					  	</div> -->

					  </div>
					</div>
			  </div>
    	</div>
    </section>

    <!-- <section class="ftco-section" id="services-section">
    	<div class="container-fluid px-md-5">
    		<div class="row justify-content-center py-5 mt-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Services</h1>
            <h2 class="mb-4">Services</h2>
            <p>Experience excellence through our unique suite of services. <br>Let us be your partner in achieving your goals efficiently and effectively.</p>
          </div>
        </div>
    		<div class="row">
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1 shadow">
							<span class="icon">
								<i class="flaticon-analysis"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Web Developer</h3>
								<p>As a web developer, I'm the architect behind your online presence. Let's collaborate to turn your vision into a seamless and captivating digital reality.</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1 shadow">
							<span class="icon">
								<i class="flaticon-flasks"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Photography</h3>
								<p>Photography is my passion, freezing moments in time with a click. Let's create memories that last a lifetime, one snapshot at a time.</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1 shadow">
							<span class="icon">
								<i class="flaticon-ideas"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Editor</h3>
								<p> As an editor for both photos and videos, I sprinkle magic to make your visuals pop. Let's turn ordinary moments into extraordinary memories.</p>
							</div>
						</a>
					</div>
				</div>
    	</div>
    </section> -->
 
    <section class="ftco-section ftco-project" id="projects-section">
    	<div class="container-fluid px-md-0">
    		<div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Projects</h1>
            <h2 class="mb-4">Our Projects</h2>
            <p>This project is poised to redefine norms and elevate standards in its respective domain.<br> Its pioneering approach promises to deliver unparalleled value to users</p>
          </div>
        </div>
    		<div class="row no-gutters">
    			<div class="col-md-4">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(assets/images/project.png);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="http://paradise.webactivities.online/">Paradise Island Book & Reservation</a></h3>
	    					<span>Web Design Project</span>
	    				</div>
    				</div>
  				</div>
                  <div class="col-md-4">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(assets/images/project.2.png);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Project Portfolio</a></h3>
	    					<span>HCI Project</span>
	    				</div>
    				</div>
  				</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Blog</h1>
            <h2 class="mb-4">Our Blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="d-flex align-items-center mb-3 meta">
	                <p class="mb-0">
	                	<span class="mr-2">Sept. 12, 2019</span>
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="d-flex align-items-center mb-3 meta">
	                <p class="mb-0">
	                	<span class="mr-2">Sept. 12, 2019</span>
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-hireme img" style="background-image: url(assets/images/bg_1.jpg)">
    	<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-7 ftco-animate text-center">
						<h2>I'm <span>Available</span> for freelancing</h2>
						<p>Open for freelance opportunities, offering quality services tailored to your needs. Let's collaborate and achieve your project goals together</p>
						<p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">Hire me</a></p>
					</div>
				</div>
			</div>
		</section>

    
		<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
					<div class="col-md-7 heading-section text-center ftco-animate">
						<h1 class="big big-2">Contact</h1>
						<h2 class="mb-4">Contact Me</h2>
						<p>Feel free to reach out to me at my Gmail address or phone number for any inquiries or collaborations. I'm always eager to connect and discuss exciting opportunities!</p>
					</div>
				</div>

				<div class="row d-flex contact-info mb-5">
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box text-center p-4 shadow">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-map-signs"></span>
						</div>
						<div>
							<h3 class="mb-4">Address</h3>
							<p>198 West 21th Street, Suite 721 New York NY 10016</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box text-center p-4 shadow">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-phone2"></span>
						</div>
						<div>
							<h3 class="mb-4">Contact Number</h3>
							<p><a href="tel://1234567920">+ 1235 2355 98</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box text-center p-4 shadow">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-paper-plane"></span>
						</div>
						<div>
							<h3 class="mb-4">Email Address</h3>
							<p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box text-center p-4 shadow">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-globe"></span>
						</div>
						<div>
							<h3 class="mb-4">Website</h3>
							<p><a href="#">yoursite.com</a></p>
						</div>
					</div>
				</div>
				</div>

				<div class="row no-gutters block-9">
				<div class="col-md-6 order-md-last d-flex">
					<form action="#" name="submit-to-google-sheet" class="bg-light p-4 p-md-5 contact-form">
						<div class="form-group">
							<input type="text" name="Name" class="form-control" placeholder="Your Name" required><br>
							<input type="email" name="Email" class="form-control" placeholder="Your Email" required><br>
							<textarea name="Message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea><br>
							<button type="submit" value="Send Message" class="btn btn-primary py-3 px-5">Send Message</button>
						</div>
					</form>
				
				</div>

				<div class="col-md-6 d-flex">
					<div class="img" style="background-image: url(assets/images/about.jpg);"></div>
				</div>
				</div>
			</div>

			<script>
				const scriptURL = 'https://script.google.com/macros/s/AKfycby2sFwpWHtqTXpHmGqPyS83w6NM69AvonMphyZ7VuTkKZVf9bxfGPgDG5QUGMbguWHvCQ/exec'
				const form = document.forms['submit-to-google-sheet']

				form.addEventListener('submit', e => {
					e.preventDefault()
					fetch(scriptURL, { method: 'POST', body: new FormData(form)})
					.then(response => console.log('Success!', response))
					.catch(error => console.error('Error!', error.message))
				})
			</script>

    	</section>
		

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md text-center">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About</h2>
              <p>I'm Nelson John, a skilled web developer adept at translating ideas into functional and visually appealing websites. With a keen eye for design and a passion for clean, efficient code, I specialize in creating engaging and user-friendly websites that meet clients' needs and exceed expectations.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://www.linkedin.com/in/nelson-john-montezo-1-6921aa261/"><span class="icon-linkedin"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/nelson.love.3152"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/nhoj.moon/"><span class="icon-instagram"></span></a></li>
                <li class="ftco-animate"><a href="https://www.youtube.com/channel/UCBUEtj6L8JYbEg5I1aI9ZEA"><span class="icon-youtube"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md text-center">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">R.V Vilaflores St. Brgy. Western Pob. Hilongos, Leyte</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+6396 7615 9289</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/scrollax.min.js"></script>
  
  <script src="assets/js/main.js"></script>
    
  </body>
</html>