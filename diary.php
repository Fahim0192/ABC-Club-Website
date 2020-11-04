<?php
   require_once('includes/header.php');
?>
<div id="page-wrapper">
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
												<h2>HEALTH DIARY</h2>
												<ul class="breadcrumb">
														<li class="breadcrumb-item"><a href="index.php">Home</a></li>
														<li class="breadcrumb-item active">/ HEALTH DIARY  </li>
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
							<div class="col-8 col-12-medium">

								<!-- Content -->
									<article>
										<section name="frm" action="" class='frms noborders'>
											Age:
											<input type="text" name="age" id="age" align="left" size="3" maxlength="2" onkeypress="return cknum(event,age)">

											Height (in ft/in):
											<div class="row">
											<div class="col-md-6 mb-3">
												<div class="form-group item">
													<select name="foot" id="foot" onchange="hcon()">
															<option value="1">1'</option>
															<option value="2">2'</option>
															<option value="3">3'</option>
															<option value="4">4'</option>
															<option value="5">5'</option>
															<option value="6">6'</option>
															<option value="7">7'</option>
														</select>
													</div>
											</div>
											<div class="col-md-6 mb-3">
												<div class="form-group item">
													<select name="inch" id="inch" onchange="hcon()">
														<option value="1">1"</option>
														<option value="2">2"</option>
														<option value="3">3"</option>
														<option value="4">4"</option>
														<option value="5">5"</option>
														<option value="6">6"</option>
														<option value="7">7"</option>
														<option value="8">8"</option>
														<option value="9">9"</option>
														<option value="10">10"</option>
														<option value="11">11"</option>
													</select>
													</div>
											</div>
											</div>
											Height (in cm):
											<input type="text" name="cen" id="cen" size="4" onkeyup="con(cen)">
											<div>
												Weight:
											<div class="row">
											<div class="col-md-6 mb-3">
												<div class="form-group item">
													<input type="text" name="weight" id="weight" maxlength="3" size="3" onkeyup="isNumberKey(this.id)">
												</div>
											</div>
											<div class="col-md-6 mb-3">
												<div class="form-group item">
													<select name="wtype" id="wtype">
														<option value="kg">Kg</option>
														<option value="pounds">Pounds</option>
													</select>
												</div>
											</div>
											</div>
											Activeness:
											<select name="loa" id="loa">
												<option value="1">Sedentary</option>
												<option value="2">Light Active</option>
												<option value="3">Moderately Active</option>
												<option value="4">Very Active</option>
												<option value="5">Extra Active</option>
											</select>
											Gender:
											<input type="radio" name="gen" id="gen" checked><font color="#3D366F" size="0.7">Male</font><input type="radio" name="gen" id="gen"><font color="#3D366F" size="0.7">Female</font></td></tr><tr><td style="color: #3D366F; font-size:13px;">

											<div>
											<button class="button alt" type="button" value="Calculate BMI" onclick="cc()">Calculate the Calorie</button>
											<button type="reset" name="button" class="button" onclick="window.location.reload();">Reset</button>
									    </div>
											<div id="chartContainer" style="height: 370px; width: 100%;"></div>

											<div style="padding: 10px;background:white;">
											<h1 id="demoHeading"></h1>
											<p id="demoExercise"></p></div>
										</section>
										<section>
										</article>
										</div>
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<section class="box">
										<div class="order-box">
												<div class="title-left">
														<h3>Your Health Info</h3>
												</div>
												<hr>
												<h1>Calorie Needed : </h1>
												<input type="text" id="rc" style="background-color:powderblue;" readonly>
												<select name="caltype" id="caltype" onChange="convert()">
													<option value="g">Grams</option>
													<option value="kg">Kilograms</option>
													<option value="pounds">Pounds</option>
												</select>
												<hr class="my-1">
												<h1>Your BMI : </h1>
												<h1 id="bmi" style="background-color:powderblue;">0.0</h1>
												<h1>This Means : </h1>
												<h1 id="meaning" style="background-color:powderblue;">0.0</h1>
												<hr class="my-1">
												<div style="color: #3D366F; font-size:13px;">You Must Intake The Following Daily</div>
												Fat:
												<input type="text" id="rf" style="font-size:13px;background-color:powderblue;" size="10" readonly>
												<font color="#3D366F" size="2" style='float:right'>
													<label id="l1"></label> per day</font>
													Protein:
													<input type="text" id="rp" style="font-size:13px;background-color:powderblue;" size="10" readonly>
													<font color="#3D366F" size="2" style='float:right'>
														<label id="l2"></label> per day</font>
														Carbohydrate:
														<input type="text" id="rh" style="font-size:13px;background-color:powderblue;" size="10" readonly>
														<font color="#3D366F" size="2" style='float:right'>
															<label id="l3"></label> per day</font>
															Alcohol:
															<input type="text" id="ra" style="font-size:13px;background-color:powderblue;" size="10" readonly>
															<font color="#3D366F" size="2" style='float:right'>
																<label id="l4"></label> per day</font>
																<hr class="my-1">
												</div>
								</div>
									</section>

							</div>
						</div>
					</div>

				</section>
				<section class="container">

				</section>
</div>
<?php
   require_once('includes/footer.php');
?>
