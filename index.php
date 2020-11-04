
<?php
   
   require_once('includes/header.php');
?>

			<!-- Header -->
				<section id="header">
				<div id="weatherUpdates" class="text-uppercase " >
                <span id="celsius" ></span>
				<span>&#8451;</span>
				-<span id="description" class="font-weight-bolder"></span>-
				    in
				<span id="city"></span>
				.
				<q id="todayQuote" class="font-italic"></q>
				</div>
				
				
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
                  
					<!-- Banner -->
						<section id="banner">
							<header>
								<div class="banner_bg">
									<div class="banner_txt">
										<h2>Live & On-Demand Fitness Plan - At Home</h2>
										<ul class="actions">
											<li><a href="register.php" class="button altt">Join Now</a></li>
										</ul>
									</div>
								</div>

							</header>
						</section>
						<hr>
					<!-- Intro -->
						<section id="intro" class="container">
							<header class="major">
								<h2>No Judgments are the Best Kind</h2>
								<p>Differences are encouraged. Quirks are welcomed.</p>
							</header>
							<div class="row">
								<div class="col-4 col-12-medium">
									<section class="first">
										<img src="images/categories_img_01.png" alt="">
										<header>
											<h2>POSITIVITY</h2>
										</header>
										<p>We are nurturers: we seek only to encourage, entertain, and empower.</p>
									</section>
								</div>
								<div class="col-4 col-12-medium">
									<section class="middle">
										<img src="images/categories_img_02.png" alt="">
										<header>
											<h2>INCLUSIVITY</h2>
										</header>
										<p>Here we keep open minds. There is no one type or way in our diverse community. Come as you are!</p>
									</section>
								</div>
								<div class="col-4 col-12-medium">
									<section class="last">
										<img src="images/categories_img_03.png" alt="">
										<header>
											<h2>FUN</h2>
										</header>
										<p>We know serious fitness is hard, but that doesn’t mean it can’t be an edge-of-your-seat, can’t-get-enough, look-forward-to-your-workouts party.</p>
									</section>
								</div>
							</div>
						</section>

				</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Portfolio -->
									<section>
										<header class="major">
											<h2>COVID-19 Member Update</h2>
											<p>We continue to follow the requirements and recommendations from government public health agencies on when and how to safety and responsibly re-open clubs.</p>
										</header>
										<div class="row">
											<div class="col-4 col-6-medium col-12-small">
												<section class="box">
													<a href="#" class="image featured"><img src="images/blog-img.jpg" alt="" /></a>
													<header>
														<h3>New Health & Safety Measures</h3>
													</header>
													<p>We've reimagined your club experience – from our new workout reservation system and touch-free club check-in, to stringent cleaning and social distancing protocols – to support the health and safety of our club community.</p>
												</section>
											</div>
											<div class="col-4 col-6-medium col-12-small">
												<section class="box">
													<a href="#" class="image featured"><img src="images/blog-img-01.jpg" alt="" /></a>
													<header>
														<h3>Virtual, Group & Personal Training</h3>
													</header>
													<p>Train from anywhere with 24 Hour Fitness coaches! Meet us online for more than 50 virtual group training sessions each week, offered to target different goals. Or get back on track to results in-club with 1-on-1 sessions.</p>
												</section>
											</div>
											<div class="col-4 col-6-medium col-12-small">
												<section class="box">
													<a href="#" class="image featured"><img src="images/blog-img-02.jpg" alt="" /></a>
													<header>
														<h3>ABC Club Classes</h3>
													</header>
													<p>We're offering a modified selection of fitness classes in our clubs. Expect a few classes each day with limited sizes, placed in carefully chosen locations to allow for social distancing, as well as enhanced cleaning measures. Remain safe & fit with our ABC Classes.</p>
												</section>
											</div>
										</div>
									</section>

							</div>
							<div class="col-12">

								<!-- Blog -->
									<section>
										<header class="major">
											<h2>ABC Club is Your Club</h2>
											<p>Kick your feet up! With a gym designed around you, we think you’ll love it here.</p>
										</header>
										<div class="row">
											<div class="col-6 col-12-small">
												<section class="box">
													<a href="#" class="image featured"><img src="images/add-img-01.jpg" alt="" /></a>
													<header>
														<h3>Join ABC Club Family</h3>
														<p>Some may call it a tagline, but for us, it’s a way of life. It’s our Monday-thru-every-day mantra. An unfiltered philosophy that drives us to create a community and a gym for all.</p>
													</header>
													</section>
											</div>
											<div class="col-6 col-12-small">
												<section class="box">
													<a href="#" class="image featured"><img src="images/add-img-02.jpg" alt="" /></a>
													<header>
														<h3>No Judgments</h3>
														<p>No judgments means room for everyone, regardless of shape, size, age, race, gender or fitness level. No matter your workout of choice, we want you to feel good while reaching your goals.</p>
													</header>
												</section>
											</div>
										</div>
									</section>

							</div>
						</div>
					</div>
				</section>

<?php
   require_once('includes/footer.php');
?>

