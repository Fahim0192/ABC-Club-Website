<?php

//check if session is set. if not then start session
if(!isset($_SESSION)) 
{ 
    session_start(); 
}



// Read JSON file
$data = file_get_contents('data/user_stats.json');

//Decode JSON
$user_stats = json_decode($data,true);

//create new arrays to store fetched data
$walk = array();
$dogWalk = array();
$motorcycleData =array();

//check if data is exists then proceed furthur

if($data){
  //using foreach loop to iterate assocative array
foreach ($user_stats as $key1 => $value1) {
    //get walking data associated with specific username 
    if($user_stats[$key1]["Exercise Type"]=='Walking' && $user_stats[$key1]["username"] == $_SESSION['login']){
        $walk = $user_stats[$key1];
    }

}

//using foreach loop to iterate assocative array
foreach ($user_stats as $key1 => $value1) {

    //get walking the dog data associated with specific username 
    if($user_stats[$key1]["Exercise Type"]=='Walking the dog' && $user_stats[$key1]["username"] == $_SESSION['login']){
        $dogWalk = $user_stats[$key1];
    }

}

//using foreach loop to iterate assocative array
foreach ($user_stats as $key1 => $value1) {
        //get walking the dog data associated with specific username
    if($user_stats[$key1]["Exercise Type"]=='motorcycling' && $user_stats[$key1]["username"] == $_SESSION['login']){
        $motorcycleData = $user_stats[$key1];
    }

}

}  
   
   require_once('includes/header.php');
   //check if user is not logged in then redirect to login page
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
<div class="container">

<div class="row">
    <div class="col-sm">


      <h3 class="p-3 mb-2 text-center bg-secondary text-white text-uppercase" >Walk</h3>
      <!---------start of cards------------>
     
      <?php if(empty($walk)) { ?>
 <!------------Check if we dot not have any walking data then display below message-------------------->
       <div class="alert alert-warning" role="alert">
         You do not have data. Please back <a href="myfitness.php">myfitness</a> and add walk data.
       </div>
       <?php } else {?>
       
       <div class="card border-secondary mb-3" style="max-width: 18rem;">
       <span><?php echo $walk['Last Access']?></span>  
        
         <div class="card-body border border-info border-bottom-20 text-secondary">
           <h5 class="card-title">Total amount of Walked</h5>
           <p class="card-text">You excercised for  in <?php echo $walk['Amount of Walk']; ?> km in <?php echo $walk['Total time spend'];?> doing <?php echo $walk['Weekly Target']; ?> km.</p>
         </div>

         <div class="card-body border border-info border-bottom-20 text-secondary">
           <h5 class="card-title">Weight</h5>
           <p class="card-text">Your new weight is <?php echo $walk['Weight']; ?> kg</p>
         </div>

         <div class="card-body border border-info border-bottom-20 text-secondary">
           <h5 class="card-title">BMI</h5>
           <p class="card-text">Your current BMI is <?php echo $walk['BMI']; ?></p>
         </div>
       
       </div>
       <?php } ?>
   
      <!-----------end of cards--------------------->

      <!-------------Start of Weekly activity -------------------->
   <div class="card bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header"><h1>WEEKLY ACTIVITY<h1></div>
  <div class="card-body">
    <h5 class="card-title">Last activity on <?php echo $walk['Last Access']?></h5>
    <p class="card-text font-weight-bold">YOUR WEEKLY GOAL:<?php echo $walk['Weekly Target']; ?> kms </p>
  </div>
</div>


      <!-------------End of Weekly activity --------------------->

    </div>
    <div class="col-sm">
    <h3 class="p-3 mb-2 text-center bg-secondary text-white text-uppercase" >Walking the Dog</h3>
          <!---------start of cards------------>
          <?php if(empty($dogWalk)) { ?>
             <!------------Check if we dot not have any walking the dog data then display below message-------------------->

          <div class="alert alert-warning" role="alert">
            You do not have data. Please back <a href="myfitness.php">myfitness</a> and add walk data.
          </div>
          <?php } else {?>
    
   <div class="card border-secondary mb-3" style="max-width: 18rem;">
   <span><?php echo $dogWalk['Last Access']?></span>  
           
   <div class="card-body border border-info border-bottom-20 text-secondary">
     <h5 class="card-title">Total amount of Walked</h5>
     <p class="card-text">You excercised for  in <?php echo $dogWalk['Amount of Walk'];?> km in <?php echo $dogWalk['Total time spend'];?> min  doing <?php echo $dogWalk['Weekly Target']; ?> Moves.</p>
   </div>

  <div class="card-body border border-info border-bottom-20 text-secondary">
    <h5 class="card-title">Weight</h5>
    <p class="card-text">Your new weight is <?php echo $dogWalk['Weight']; ?> kg</p>
  </div>
  
  <div class="card-body border border-info border-bottom-20 text-secondary">
    <h5 class="card-title">BMI</h5>
    <p class="card-text">Your current BMI is <?php echo $dogWalk['BMI']; ?></p>
  </div>
         
</div>
      <!-------------Start of Weekly activity -------------------->
  <div class="card bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header"><h1>WEEKLY ACTIVITY<h1></div>
  <div class="card-body">
    <h5 class="card-title">Last activity on <?php echo $dogWalk['Last Access']?></h5>
    <p class="card-text font-weight-bold">YOUR WEEKLY GOAL:<?php echo $dogWalk['Weekly Target']; ?> Moves </p>
  </div>
<?php } ?>

<!-----------end of cards--------------------->

</div>


      <!-------------End of Weekly activity --------------------->
    </div>
    <div class="col-sm">
    <h3 class="p-3 mb-2 text-center bg-secondary text-white text-uppercase" >Motorcycling</h3>
                  <!---------start of cards------------>
    <?php if(empty($motorcycleData)) { ?>
     <!------------Check if we dot not have any motorcycle data then display below message-------------------->
    <div class="alert alert-warning" role="alert">
      You do not have data. Please back <a href="myfitness.php">myfitness</a> and add walk data.
    </div>
    <?php } else {?>
        
<div class="card border-secondary mb-3" style="max-width: 18rem;">
<span><?php echo $motorcycleData['Last Access']?></span>  
        
<div class="card-body border border-info border-bottom-20 text-secondary">
  <h5 class="card-title">Total amount of Walked</h5>
  <p class="card-text">You excercised for  in <?php echo $motorcycleData['Ride Done'];?> km in <?php echo $motorcycleData['Total time spend'];?> min  doing <?php echo $motorcycleData['Weekly Target']; ?> kms.</p>
</div>

<div class="card-body border border-info border-bottom-20 text-secondary">
  <h5 class="card-title">Weight</h5>
  <p class="card-text">Your new weight is <?php echo $motorcycleData['Weight']; ?> kg</p>
</div>

<div class="card-body border border-info border-bottom-20 text-secondary">
  <h5 class="card-title">BMI</h5>
  <p class="card-text">Your current BMI is <?php echo $motorcycleData['BMI']; ?></p>
</div>

</div>


<!-----------end of cards--------------------->
      <!-------------Start of Weekly activity -------------------->
 <div class="card bg-light mb-3" style="max-width: 18rem;">
   <div class="card-header"><h1>WEEKLY ACTIVITY<h1></div>
   <div class="card-body">
     <h5 class="card-title">Last activity on <?php echo $motorcycleData['Last Access']?></h5>
     <p class="card-text font-weight-bold">YOUR WEEKLY GOAL:<?php echo $motorcycleData['Weekly Target']; ?> kms </p>
   </div>
 </div>

      <!-------------End of Weekly activity --------------------->
    
    </div>
    <?php } ?>
  </div>
<!------------------------>  

</div>
</section>



<?php

require_once('includes/footer.php');

?>