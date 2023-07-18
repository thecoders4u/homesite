<?php require APPROOT . '/views/inc/header.php'; ?>
<main id="main">

    <!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
 <!-- End Resume Section -->

    <!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>CODE FOR ME</h2>
            </div>

            <div class="row">

                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form id="non-student" action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <h3 onclick="changeForm('student')"><a href="#">Are you a student?</a></h3>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="name">System Title:</label><input type="text" name="name" class="form-control" id="name" placeholder="Inventory Management App" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label for="email">App/System Owner:</label><input type="email" class="form-control" name="email" id="email" placeholder="Application for Company/Individual" required>
                            </div>
                        </div>
                        <div class="form-group mt-3" style="padding: 2%;">
                            <h5>On What Platform Should the Application be On?:</h5>
                            <input style="height: 20px; border-radius: 40px;" type="radio" class="form-check-input" id="web" name="web" onchange="calculatePrice('web', 'web');">
                            <label for="web">Web</label>
                            <input style="height: 20px; border-radius: 40px;" type="radio" class="form-check-input" id="desktop" name="web" onchange="calculatePrice('desktop', 'desktop');">
                            <label for="web">Desktop</label>
                            <input style="height: 20px; border-radius: 40px;" type="radio" class="form-check-input" id="mobile" name="web" onchange="calculatePrice('mobile', 'mobile');">
                            <label for="web">Mobile</label>
                             <p>
                                 <input style="height: 20px; border-radius: 40px;" type="radio" class="form-check-input" id="cross" name="web" onchange="calculatePrice('cross', 'cross');">
                                 <label for="web">Cross-Platform (More than One Platform)</label>
                             </p>

                            <p>
                                <label>Upload Any Necessary Files(optional):</label>
                                <input type="file" placeholder="Should be In Zip Folder" class="form-control">
                            </p>
                        </div>
                        <p class="form-group">
                        <h5>Your System should available within how many guaranteed days? (Affects Price):</h5>
                        <input style="width: 100%;" max="28" min="7" step="7" value="28" type="range" class="form-range" id="one-week" name="web" onchange="fakedays(this.value);">
                        <label for="web">
                            <span id="days">28</span> days
                        </label>

                        </p>
                        <p style="visibility: hidden;">
                        <span id="og-price">0</span>
                        </p>
                        <p>
                        <h5>Estimated Price For System Creation: $<span id="price">0</span></h5>
                        </p>
                        <P>
                            Please Describe your system:
                        </P>
                        <div class="form-group mt-3">
                            <input style="height: 200px" type="text" class="form-control" name="message" rows="5" placeholder="Please Describe how your system should work" required/>
                        </div>
                        <div class="text-center"><button type="submit">Code 4 Me</button></div>
                    </form>
                    <form id="student" action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <h3 onclick="changeForm('non-student')"><a href="#">Not a Student?</a></h3>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="name">System Title:</label><input type="text" name="name" class="form-control" id="name" placeholder="Inventory Management App" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label for="email">App/System Owner:</label><input type="email" class="form-control" name="email" id="email" placeholder="Application for Company/Individual" required>
                            </div>
                        </div>
                        <div class="form-group mt-3" style="padding: 2%;">
                            <h5>On What Platform Should the Application be On?:</h5>
                            <input style="height: 20px; border-radius: 40px;" type="radio" class="form-check-input" id="web" name="web" onchange="calculatePrice('student', 'student');">
                            <label for="web">Web</label>
                            <input style="height: 20px; border-radius: 40px;" type="radio" class="form-check-input" id="desktop" name="web" onchange="calculatePrice('student', 'student');">
                            <label for="web">Desktop</label>
                            <input style="height: 20px; border-radius: 40px;" type="radio" class="form-check-input" id="mobile" name="web" onchange="calculatePrice('student', 'student');">
                            <label for="web">Mobile</label>
                            <p>
                                <input style="height: 20px; border-radius: 40px;" type="radio" class="form-check-input" id="cross" name="web" onchange="calculatePrice('student', 'student');">
                                <label for="web">Cross-Platform (More than One Platform)</label>
                            </p>

                            <p>
                                <label>Upload Any Necessary Files(optional):</label>
                                <input type="file" placeholder="Should be In Zip Folder" class="form-control">
                            </p>
                        </div>
                        <p class="form-group">
                        <h5>Your System should available within how many guaranteed days? (Affects Price):</h5>
                        <input style="width: 100%;" max="28" min="7" step="7" value="28" type="range" class="form-range" id="one-week" name="web" onchange="fakedays(this.value);">
                        <label for="web">
                            <span id="days">28</span> days
                        </label>

                        </p>
                        <p style="visibility: hidden;">
                            <span id="og-price">0</span>
                        </p>
                        <p>
                        <h5>Estimated Price For System Creation: $<span id="price">0</span></h5>
                        </p>
                        <P>
                            Please Describe your system:
                        </P>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Please Describe how your system should work according to your selected
options and files uploaded(if you uploaded)" required></textarea>
                        </div>
                        <div class="text-center"><button type="submit">Code 4 Me</button></div>
                    </form>

                </div>
                <div class="col-sm-2">
                </div>
            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
<?php require APPROOT . '/views/inc/header.php'; ?>