<?php
      //initialised the error variables
	  $fnameError = $lnameError = $emailError = $passwordError = $addressError = $categoryError = 
	  $membershipError = $isGymError = "";
	  $success="";
	  $messageError="";

	  //check if submit request is post
	  if(isset($_POST['submit']))
	  {
		  //capture the form data
	  $firstName = trim($_POST['fname']);
	  $lastName = trim($_POST['lname']);
	  $email = trim($_POST['email']);
	  $password =trim($_POST['password']);
	  $address = trim($_POST['address']);
	  $category = trim($_POST['category']);
	  $membership = trim($_POST['membership']);
	  $isGymMember = trim($_POST['chkitem']);
	  //validate the password using regular expression
	  $validated_password = preg_match('/^(?=.{6}).*[!^&].*[0-9]$/', $password);
	  //perform validation to check if any of the form field is empty if yes then show error
	  if(empty($firstName))
	  {
		  $fnameError ="*Please enter first Name";
	  }
	  else if(empty($lastName))
	  {
		$lnameError ="*Please enter last Name";
	  }
	  else if(empty($email))
	  {
		$emailError ="*Please enter your email";
	  }
	  else if(empty($password) || !$validated_password )
	  {
		$passwordError ="*Please enter your password";
	  }
	  else if(empty($address) )
	  {
		$addressError ="*Please enter your address";
	  }
	  
	  else if(empty($category))
	  {
		$categoryError ="*Please select a membership category";
	  }
	  else if(empty($membership))
	  {
		$membershipError ="*Please select a membership plan";
	  }
	  else if(empty($isGymMember))
	  {
		$isGymError="*Please select yes or no";
	  }
	  else {
          //check if files exists
		if(file_exists('data/user.json'))
		{
			$user_data = file_get_contents('data/user.json');// read file 
			$user_array = json_decode($user_data,true);// decode json strings and convert it into associative array
		    //create new array for new data
			$add_user = array(

				'firstName'  => $firstName,
				'lastName'  => $lastName,
				'email'  => $email,
				'password' => $password,
				 'address' => $address,
				 'category' => $category,
				 'membership' => $membership,
				 'isGymMember' => $isGymMember

			);

			$user_array[] = $add_user;//append array
			
			$new_user = json_encode($user_array);//encode values to json format
			if(file_put_contents('data/user.json',$new_user))
			{
				//if registeration is successfull then show success message
				$success ="<div class='alert alert-success' role='alert'>You have register successfully!Please click <a href='login.php' class='alert-link' style='font-size:30px'>here</a> to login</div>";
			}

		}
		else
		{
			//if file is not found then show error
			$messageError = "<div class='alert alert-danger' role='alert'>Unable to register. Please check the details and try again</div>";
		}

	  } 
	  

	  
	  }
	  
	  
 
?>
<?php
   require_once('includes/header.php');
  
?>
      
			<!-- Header -->
				<section id="header">

					<!-- Logo -->
					<h1 class="logo">
						<span class="word1">ABC </span>
						<span class="word2">Club</span>
						<a href="index.php"></a>
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
												<h2>REGISTER</h2>
												<ul class="breadcrumb">
														<li class="breadcrumb-item"><a href="index.php">Home</a></li>
														<li class="breadcrumb-item active">/ REGISTER  </li>
												</ul>
										</div>
								</div>
						</div>
				</div>
				<!-- End All Title Box -->

			<!-- Main -->
				<section id="main">
					<div class="container">
					<?php echo $success; ?>
					<?php echo $messageError; ?>
						<div class="row">
							<div class="col-8 col-12-medium">

								<!-- Content -->
									<article>
									<form method="POST" action="#main" style="background:inherit">
										<section class="form">
										
											<div class="row">
													<div class="col-md-6 mb-3">
														<div class="form-group item">
																<label for="firstname">First name *</label>
															<input placeholder="Enter Your First Name" class="form-control" name="fname" type="text" value="" />
															<span id="fname" class="small" style="color:red;"><?php echo $fnameError; ?></span>
														</div>
													</div>

													<div class="col-md-6 mb-3">
														<div class="form-group item">
															<label for="lname">Last name *</label>
															<input placeholder="Enter Your Last Name" id="lname" value="" class="form-control" name="lname" type="text" />
															<span id="sname" class="small" style="color:red;"><?php echo $lnameError; ?></span>
															</div>
													</div>
											</div>
								      <div class="item email">
										<label for="name">Email: *</label>
								        <input type="email" name="email" value="" placeholder="Enter your Email">
								        <span id="email" class="small" style="color:red;"><?php echo $emailError; ?></span>
								      </div>
									  <div class="item password">
										<label for="password">Password: *</label>
								        <input type="password" id="password" name="password" value="" placeholder="Enter your password">
								        <span id="email" class="small" style="color:red;"><?php echo $passwordError; ?></span>
								      </div>
								      <div class="item Add">
												<label for="address">Address: *</label>
								        <textarea id="address" name="address" placeholder="Enter your Address"></textarea>
										<span id="email" class="small" style="color:red;"><?php echo $addressError; ?></span>
								      </div>
											<div class="row">
													<div class="col-md-6 mb-3">
													<div class="item" id="categoryy">
													<h4>Choose a Membership Plan *</h4>
											        <label for="Category"></label>
											        <select name="category" id="category">
											          <option selected value="0">Choose</option>
											          <option value="1">Individual Membership Plan</option>
											          <option value="2">Family Membership Plan</option>
											        </select>
											        <span id="cat" class="small" style="color:red;"><?php echo $categoryError ?></span>
											        <input id="nmem" style="display:none;"type="textbox" name="nmem" value="1" placeholder="Number Of Members">
											        <label id="nummem" class="small" style="color:red;display:none;">*Please enter a valid number (2 or more than 2)</label>
											      </div>
											      <div class="item" id="ageSlider">
											        <h4>Age: *</h4>
											        <div id="ages">
											        </div>
											      </div>
													</div>

													<div class="col-md-6 mb-3">
														<div class="item member" >
															<h4>Choose a Duration Plan *</h4>
															 <label for="Membership"></label>
														 <select name="membership" id="Membership">
															 <option selected value="0">Choose</option>
															 <option value="1">Ongoing</option>
															 <option value="3">3 Months</option>
															 <option value="6">6 Months</option>
															 <option value="12">12 Months</option>
														 </select>
														 <p id="mem" class="small" style="color:red;"><?php echo $membershipError; ?></p>
													 </div>
													</div>
											</div>

											<div class="check">
												<h4>Referred by a gym member? *</h4>
												<input type="radio" name="chkitem" value="1" > Yes</input>
												<input type="radio" checked="true" name="chkitem" value="2" placeholder="No"> No </input>
											</div>
								    </section>
									<div style="text-align:center" >
									
								      <input type="submit" id="register" name="submit" class="button alt" value="Register"> 

									  <button type="reset" name="button" class="button" onclick="window.location.reload();">Refresh</button>

								    </div>
									</form>
										<section>

									</article>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<section class="box">
										<div class="order-box">
												<div class="title-left">
														<h3>Your bill Info</h3>
												</div>
												<hr>
												<section class="Fees" style="text-align:center" >
										      <h1>Total Fees : </h1>
										      <h2 id="fees">$0</h2>
										    </section>
												<hr class="my-1">
												<button id="cal" name="cal" class="button alt" onclick="calculate()">Calculate</button>
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