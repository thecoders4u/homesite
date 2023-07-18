<?php require APPROOT . '/views/inc/header.php'; ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">
	<div class="container" data-aos="zoom-in" data-aos-delay="100">
	 	<h1>We are TheCoders4u</h1>
	  	<p>You Say it, We <span class="typed" data-typed-items="Code it, Test it, Release it, Upgrade it"></span></p>
	  	<div class="social-links">
		    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
		    <a href="#" class="facebook"><i class="bx bxl-tiktok"></i></a>
		    <a href="#" class="instagram"><i class="bx bxl-github"></i></a>
		    <a href="#" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
		    <a href="#" class="linkedin"><i class="bx bxl-instagram"></i></a>
	  	</div>
	</div>
</section><!-- End Hero -->

<main id="main">
	<!-- ======= Resume Section ======= -->
	<section id="resume" class="resume">
	  <div class="container" data-aos="fade-up">

	    <div class="section-title">
	      <h2>Why Choose Us?</h2>
	      <p>The are several reasons to choose us</p>
	    </div>

	    <div class="row">
	      <div class="col-lg-6">
	        <div class="resume-item pb-0">
	          <h3>Faster Release <i class="bx bx-rocket"></i></h3>
	          <p>Upon the coding (creation of applications) we ensure that we deliver the application even before the agreed timeline</p>
	        </div>
	      </div>
	      <div class="col-lg-6">
	        <div class="resume-item pb-0">
	          <h3>Professional Experience <i class="bx bx-trophy"></i></h3>
	          <p>With high quality designers and programmers who always are up-to-date in todays technology, solutions offered are high quality and are guranteed in fields:</p>
	          <ul>
	            <li>Web Applications</li>
	            <li>Desktop Applications</li>
	            <li>Mobile Applications</li>
	            <li>Cross-Platform Applications</li>
	            <li>Arduino Applications</li>
	          </ul>
	        </div>
	      </div>
	    </div>
	    <div class="row">
	      <div class="col-lg-6">
	        <div class="resume-item pb-0">
	          <h3>Certified Qualifications <i class="bx bx-check-circle"></i></h3>
	          <p>Our Programmers are certified with strong degrees and masters such as from the University of Greenwich
	            and so much more</p>
	        </div>
	      </div>
	      <div class="col-lg-6">
	        <div class="resume-item pb-0">
	          <h3>Reasonable Costs <i class="bx bx-dollar-circle"></i></h3>
	          <p>Compared to other individuals, we charge reasonable costs which you as our customer can understand, because we highly value you and costs
	          can be negotiable</p>
	        </div>
	      </div>
	      <div class="col-lg-6">
	        <div class="resume-item pb-0">
	          <h3>Secure <i class="bx bx-lock"></i></h3>
	          <p>Your code (application) is for you only and it is only between you and us only, this is why such data is highly encrypted and locked by our data privacy and protection rules
	          therefore you do not have to worry.</p>
	        </div>
	      </div>
	    </div>
	  </div>
	</section><!-- End Resume Section -->
	<!-- ======= Contact Section ======= -->
	<section id="contact" class="contact">
	  <div class="container" data-aos="fade-up">

	    <div class="section-title">
	      <h2>Contact</h2>
	    </div>

	    <div class="row mt-1">

	      <div class="col-lg-4">
	        <div class="info">
	          <div class="address">
	            <i class="bi bi-geo-alt"></i>
	            <h4>Locations:</h4>
	            <p>WQ7W+W4R, Bunda Road, Lilongwe, Malawi.</p>
	            <p>70 Flaxland Wy, Corby NN17 5GA.</p>
	          </div>

	          <div class="email">
	            <i class="bi bi-envelope"></i>
	            <h4>Emails:</h4>
	            <p>conradzikomo@gmail.com</p>
	            <p>admin@thecoders4u.com</p>
	          </div>

	          <div class="phone">
	            <i class="bi bi-phone"></i>
	            <h4>Call:</h4>
	            <p>+44-7506-369609</p>
	            <p>+265-99-324-4175</p>
	          </div>

	        </div>

	      </div>

	      <div class="col-lg-8 mt-5 mt-lg-0">

	        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
	          <div class="row">
	            <div class="col-md-6 form-group">
	              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
	            </div>
	            <div class="col-md-6 form-group mt-3 mt-md-0">
	              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
	            </div>
	          </div>
	          <div class="form-group mt-3">
	            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
	          </div>
	          <div class="form-group mt-3">
	            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
	          </div>
	          <div class="my-3">
	            <div class="loading">Loading</div>
	            <div class="error-message"></div>
	            <div class="sent-message">Your message has been sent. Thank you!</div>
	          </div>
	          <div class="text-center"><button type="submit">Send Message</button></div>
	        </form>
	      </div>
	    </div>
	  </div>
	</section><!-- End Contact Section -->
</main><!-- End #main -->
<?php require APPROOT . '/views/inc/footer.php'; ?>