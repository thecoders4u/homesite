<!-- ======= Mobile nav toggle button ======= -->
<!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
<i class="bi bi-list mobile-nav-toggle d-lg-none" style="color: white;"></i>
<!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center">


  <nav id="navbar" class="navbar nav-menu">
    <ul>
      <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
<!--        <li><a href="<?php echo URLROOT; ?>/pages/code" class="nav-link scrollto code"><i class="bx bx-code"></i> <span>Code for Me</span></a></li>-->
      <li><a href="<?php echo URLROOT; ?>/users/signin" class="nav-link scrollto code"><i class="bx bx-log-in"></i> <span>Login</span></a></li>
      <li><a href="<?php echo URLROOT; ?>/pages/sample" class="nav-link scrollto"><i class="bx bx-trophy"></i> <span>Our Sample Work</span></a></li>
      <li><a href="<?php echo URLROOT; ?>/pages/info" class="nav-link scrollto"><i class="bx bx-info-circle"></i> <span>Who are We?</span></a></li>
      <li><a href="<?php echo URLROOT; ?>/pages/members" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Members</span></a></li>
      <li><a href="<?php echo URLROOT; ?>/pages/contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact Us</span></a></li>
<!--        <li><a href="<?php echo URLROOT; ?>" class="nav-link scrollto"><i class="bx bx-log-out"></i> <span>Log Out</span></a></li>-->
      <?php if(isset($_SESSION['user_id'])) : ?>
        <li class="nav-item">
          <a class="nav-link" href="#">Welcome <?php echo $_SESSION['name'] ;?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout"><i class="bx bx-user"></i>Logout</a>
        </li>
      <?php else : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/users/register"><i class="bx bx-user"></i>Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/users/login"><i class="bx bx-user"></i>Login</a>
          </li>
        </ul>
      <?php endif ;?>
    </ul>
  </nav><!-- .nav-menu -->

</header><!-- End Header -->