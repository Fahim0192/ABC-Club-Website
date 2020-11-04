<?php
   //include external php script
   require_once('fitness_stats.php');   
   require_once('includes/header.php');
   //if user is not logged in then redirect to login page
   if(!isset($_SESSION['login']))
   {
       header("location:login.php");
   }
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
               <!------------Start of search --------------->
<div class="card">
  <div class="card-body">
  <div class="form-group">
    <label for="exampleInputEmail1" class="font-weight-bold">SELECT AN EXERCISE TYPE</label>
    <input type="email" id="search" name="search" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search....">
    <ul class="list-group" id="result" name="result"></ul>
  </div>
  </div>
</div>   
<!------------End of search --------------->   
             <div class="container">

             <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link btn btn-primary" href="logbook.php">Logbook</a>
  </li>
  
</ul>
             <div class="alert alert-success" role="alert">
                    Welcome <?php echo $_SESSION['login']; ?> to myfitness page!
               </div>

       
               
 <div class="row">
    <div class="col-sm">
    <a href="#walking-form" id="walking">
      <img src="images/walking.png">
      <p>Walking</p>
      </a>
      <div id="walking-form">
       <!-------Start of Walking form-------->
  <form action="#" method="post">
  <div class="form-group">
    <label for="amountWalked">Total Amount of Walked (km):</label>
    <input type="text" class="form-control" id="amountWalked" name="amountWalked" aria-describedby="walkHelp">
  </div>
  <div class="form-group">
    <label for="totalTime">Total time spent(min(s)):</label>
    <input type="text" class="form-control" id="totalTime" name="totalTimeWalk" >
  </div>
  <div class="form-group">
    <label for="weight">Weight(kg):</label>
    <input type="text" class="form-control" id="weight" name="walkWeight">
  </div>
  <div class="form-group">
    <label for="age">age:</label>
    <input type="text" class="form-control" id="age" name="walkAge" >
  </div>
  <div class="form-group">
    <label for="bmi">BMI:</label>
    <input type="text" class="form-control" id="bmi" name="walkBmi" >
  </div>
  <div class="form-group">
    <label for="weeklyTarget">Weekly Target(km):</label>
    <input type="text" class="form-control" id="weeklyTarget" name="weeklyTargetWalked" >
  </div>

  <button type="submit" name="walked" class="btn btn-primary">Submit</button>
</form>
          
         
       <!-------End of Walking form---------->
      </div>
    </div>
    <div class="col-sm">
    <a href="#dog-walking-form" id="walkingDog">
    <img src="images/walking-dog.png">
    <p>Walking dog</p>
    </a>
    <!-----------Start of dog walking form ------------------>
    <div id="dog-walking-form">
    <form action="#" method="post">
  <div class="form-group">
    <label for="amountWalked">Total Amount of Walked (km):</label>
    <input type="text" class="form-control" id="amountWalked" name="dogWalked" aria-describedby="walkHelp" >
  </div>
  <div class="form-group">
    <label for="totalTime">Total time spent(min(s)):</label>
    <input type="text" class="form-control" id="totalTime" name="dogTimeSpent" >
  </div>
  <div class="form-group">
    <label for="weight">Weight(kg):</label>
    <input type="text" class="form-control" id="weight" name="dogWeight" >
  </div>
  <div class="form-group">
    <label for="age">age:</label>
    <input type="text" class="form-control" id="age" name="dogAge" >
  </div>
  <div class="form-group">
    <label for="bmi">BMI:</label>
    <input type="text" class="form-control" id="bmi" name="dogBmi" >
  </div>
  <div class="form-group">
    <label for="weeklyTarget">Weekly Target(moves):</label>
    <input type="text" class="form-control" id="weeklyTarget" name="weeklyTargetDog" >
  </div>

  <button type="submit" name="walkingDog" class="btn btn-primary">Submit</button>
</form>
</div>
    <!-----------End of dog walking form ------------------>
    </div>
    <div class="col-sm">
    <a href="#motorcycle-form" id="motorcycling">
    <image src="images/motorcycling.png"></image>
    <p>motorcycling</p>
    </a>
    <!----------Start of motorcycling form --------------->
    <div id="motorcycle-form">
    <form action="#" method="post">
  <div class="form-group">
    <label for="amountWalked">Total Amount of ride done (km):</label>
    <input type="text" class="form-control" id="amountRide" name="amountRide" aria-describedby="walkHelp" >
  </div>
  <div class="form-group">
    <label for="totalTime">Total time spent(min(s)):</label>
    <input type="text" class="form-control" id="totalTimeRide" name="totalTimeRide" >
  </div>
  <div class="form-group">
    <label for="weight">Weight(kg):</label>
    <input type="text" class="form-control" id="weight" name="weightBiki" >
  </div>
  <div class="form-group">
    <label for="age">age:</label>
    <input type="text" class="form-control" id="ageBiki" name="ageBiki" >
  </div>
  <div class="form-group">
    <label for="bmi">BMI:</label>
    <input type="text" class="form-control" id="bmiBiki" name="bmiBiki">
  </div>
  <div class="form-group">
    <label for="weeklyTarget">Weekly Target(km):</label>
    <input type="text" class="form-control" id="weeklyTarget" name="weeklyTargetBiki" >
  </div>

  <button type="submit" name="motorcycling" class="btn btn-primary">Submit</button>
</form>
</div>
<!-----------End of motorcycling form---------------->
    </div>
  </div>
              
  <?php echo $errorWalking; ?> 
  <?php echo $errorWalkingDog; ?>
</div>
</section>



<?php

require_once('includes/footer.php');

?>