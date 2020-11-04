<?php
   require_once('includes/header.php');
?>

			<!-- Header -->
				<section id="header">

					<!-- Logo -->
					<h1 class="logo">
						<span class="word1">ABC </span>
						<span class="word2">Club</span>
						<a href="index.html"></a>
					</h1>

					<!-- Nav -->
					<?php
                    require_once('includes/navigation_bar.php')
					?>

				</section>

				<!-- Start All Title Box -->
				<div class="all-title-box">
						<div class="container">
								<div class="row">
										<div class="col-lg-12">
												<h2>CONTACT</h2>
												<ul class="breadcrumb">
														<li class="breadcrumb-item"><a href="index.html">Home</a></li>
														<li class="breadcrumb-item active">/ CONTACT</li>
												</ul>
										</div>
								</div>
						</div>
				</div>
				<!-- End All Title Box -->

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<section class="box">
										<a href="#" class="image featured"><img src="images/contact-bg.jpg" alt="" /></a>
										<header>
											<h3>CONTACT INFO</h3>
										</header>
										<p>Address: City of Casey, Australia</p>
										<hr>
										<p>Phone: <a href="tel:03 9705 5200">** 9705 5200</a></p>
										<hr>
										<p>Email: <a href="mailto:admin@abcgym.com.au">admin@abcgym.com.au</a></p>
										<hr>
									</section>

							</div>
							<div class="col-8 col-12-medium imp-medium">
                             
								<!-- Content -->
									<article class="box post">
										<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
										<header>
											<h2>Any Query? Contact Us:</h2>
										</header>
										<form method="post" id="contact-us"  action="mailto:admin@abcgym.com.au">
											<fieldset>
												<label for="mail">Your Email:</label>
												<input type="email" id="mail" name="email">
											</fieldset>
											<fieldset>
								        <label for="bio">Your Message:</label>
								        <textarea id="bio" name="bio" ></textarea>
								      </fieldset>
											<button id="send-message" class="button" type="submit">Send Message</button>
										</form>
										<section>
									</article>

							</div>
						</div>
					</div>
				</section>


				<?php
   require_once('includes/footer.php');
?>

	
