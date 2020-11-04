<?php



//start session
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
$errMsg="";
$incorrectLoginDetails="";
//check if submit request is post request, if yes then proceed furthur
if(isset($_POST['submit']))
{
	//check the input fields if empty then show error
	if(empty($_POST['email']) && empty($_POST['password']))
	{
		$errMsg ="<div class='alert alert-danger' role='alert'>Please enter your email and password</div>";

	}
	else
	{
		// get users details from form input
		$username = $_POST['email'];
		$password = $_POST['password'];
		//read the json file
		$data = file_get_contents('data/user.json');
       // decode json strings
	   $users = json_decode($data, TRUE);
       //iterate through users
	   foreach ($users as $user) {
		   //check if username and password matched
		   if($user['email'] == $username &&  $user['password'] == $password) {
			//if username and password matched then store into session
			$_SESSION['login'] = $username;
			//redirect to myfitness.php page
			header("location:myfitness.php");
			 
			 //break the loop 
			   break;
		   }
		   else
		   {
			   //if does not match then display error
			   $incorrectLoginDetails ="<div class='alert alert-danger' role='alert'>Please check your email and password</div>"; 
		   }
	   }
      
    
  
    
}
        
	}


?>
<?php
   require_once('includes/header.php');
?>

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


<!-------Login form--------->

<section id="main">
					<div class="container">
					
						<?php echo $errMsg; ?>
						<?php echo $incorrectLoginDetails; ?>
                    
						<div class="row">
							<div class="col-8 col-12-medium">

								<!-- Content -->
									<article>
									<!------------Start of login form------------------->
									<form method="POST" action="#main" style="background:inherit">
										<section class="form">
	
								      <div class="item email">
										<label for="name">Username: *</label>
								        <input type="email" name="email" value="" placeholder="Enter your Email">
								        <!-- <span id="email" class="small" style="color:red;"><?php echo $emailError; ?></span> -->
								      </div>
									  <div class="item password">
										<label for="password">Password: *</label>
								        <input type="password" id="password" name="password" value="" placeholder="Enter your password">
								        <!-- <span id="email" class="small" style="color:red;"><?php echo $passwordError; ?></span> -->
								      </div>
								     
	
								    </section>
								    <div style="text-align:center" >
								      <input type="submit" id="submit" name="submit" class="button alt" value="Login"> 

											<a href="register.php" name="button" class="button" >Sign Up</a>
								    </div>
									</form>
									<!------------End of login form------------------->
										<section>

									</article>

							</div>
						</div>
					</div>
				</section>



<?php

require_once('includes/footer.php');

?>