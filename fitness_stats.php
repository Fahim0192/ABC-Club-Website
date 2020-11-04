<?php

   //check if session is set or not
   if(!isset($_SESSION)) 
   { 
       session_start(); 
   }
   //get the current timezone of Melbourne, Australia
   date_default_timezone_set('Australia/Melbourne');
   // format data and time
   $date = date('m/d/Y h:i:s a', time()); 
    //Walking
    
     $errorWalking = "";
     //check if walk form is post request then proceed furthur
     if(isset($_POST['walked']))
     {
         //get the value from form inputs
         $amountWalked  = $_POST['amountWalked'];
         $totalTimeWalk = $_POST['totalTimeWalk'];
         $walkWeight    = $_POST['walkWeight'];
         $walkAge       = $_POST['walkAge'];
         $walkBmi       = $_POST['walkBmi'];
         $weeklyWalkTarget = $_POST['weeklyTargetWalked'];

         //check if any of the form feild is empty
         if(empty($amountWalked) || empty($totalTimeWalk) || empty($walkWeight) || empty($walkAge) || empty($walkBmi))
         {
           //if any of the form field is empty then display error message
          $errorWalking = "<div class='alert alert-danger' role='alert'>The fields must not be empty. Please check and enter data again.</div>";
         }
         else
         { 
             //check if file exists using file_exists php built in function
  
             if(file_exists('data/user_stats.json'))
             {
               //get the current user
               $current_user = $_SESSION['login'];
               $stats_json = file_get_contents('data/user_stats.json'); // read file 
               $stats_array= json_decode($stats_json,true); // decode json strings and convert it into associative array
               //create new array for new data
               $stats_data= array(
                                     
                                      'Exercise Type' =>'Walking',
                                      'Amount of Walk'=>$amountWalked,
                                      'Total time spend'=>$totalTimeWalk,
                                      'Weight' => $walkWeight,
                                      'Age' => $walkAge,
                                      'BMI' => $walkBmi,
                                      'Weekly Target' => $weeklyWalkTarget,
                                      'username'     => $_SESSION['login'],
                                      'Last Access' =>  $date
               );
               $stats_array[]= $stats_data; // append array 
               $new_stats = json_encode($stats_array); //encode values to json format
               if(file_put_contents('data/user_stats.json',$new_stats)) 
               {
                 //show success message if record is inserted successfully 
                 $success ="<div class='alert alert-success' role='alert'>You have successfully entered your walk stats.</div>";
               }
         
             } 
             else
             {
               //show error message if file does not exists
              $errorWalking = "<div class='alert alert-danger' role='alert'>Unable to find file. Please check the details and try again</div>";
             }   
  
         }
  
  
  
  
     }

     //Walking Dog
     $errorWalkingDog="";
     // //check if walking the dog form is post request then proceed furthur
     if(isset($_POST['walkingDog']))
     {
         //if any of the form field is empty then display error message
         $amountWalked  = $_POST['dogWalked'];
         $totalTimeWalk = $_POST['dogTimeSpent'];
         $walkWeight    = $_POST['dogWeight'];
         $walkAge       = $_POST['dogAge'];
         $walkBmi       = $_POST['dogBmi'];
         $weeklyWalkTarget = $_POST['weeklyTargetDog'];
  
         if(empty($amountWalked) || empty($totalTimeWalk) || empty($walkWeight) || empty($walkAge) || empty($walkBmi))
         {
          // show error if any field is empty
          $errorWalking = "<div class='alert alert-danger' role='alert'>The fields must not be empty. Please check and enter data again.</div>";
         }
         else
         {
              //check if file exists using file_exists php built in function
             if(file_exists('data/user_stats.json'))
             {
               //get the current user
               $current_user = $_SESSION['login'];
               $stats_json = file_get_contents('data/user_stats.json');//read file
               $stats_array = json_decode($stats_json,true); // decode json strings and convert it into associative array
               $stats_data= array(
                                      
                                      'Exercise Type' =>'Walking the dog',
                                      'Amount of Walk'=>$amountWalked,
                                      'Total time spend'=>$totalTimeWalk,
                                      'Weight' => $walkWeight,
                                      'Age' => $walkAge,
                                      'BMI' => $walkBmi,
                                      'Weekly Target' => $weeklyWalkTarget,
                                      'username' => $current_user,
                                      'Last Access' =>  $date
                                      
                                      
  
               );
               $stats_array[] = $stats_data;// append array 
               $new_stats = json_encode($stats_array); //encode values to json format 
               if(file_put_contents('data/user_stats.json',$new_stats))
               {
                 //show success message if record is inserted successfully 
                 $success ="<div class='alert alert-success' role='alert'>You have successfully entered your walking Dog stats.</div>";
               }
         
             } 
             else
             {
               //display error if file does not found
              $errorWalkingDog = "<div class='alert alert-danger' role='alert'>Unable to register. Please check the details and try again</div>";
             }   
  
         }
  
  
  
  
     }
    
     //Motorcycling
     $errorMotorCycling="";
     
     if(isset($_POST['motorcycling']))
     {
         //check if any of the form feild is empty
         $amountWalked  = $_POST['amountRide'];
         $totalTimeWalk = $_POST['totalTimeRide'];
         $walkWeight    = $_POST['weightBiki'];
         $walkAge       = $_POST['ageBiki'];
         $walkBmi       = $_POST['bmiBiki'];
         $weeklyWalkTarget = $_POST['weeklyTargetBiki'];

         //check if any form field is empty
         if(empty($amountWalked) || empty($totalTimeWalk) || empty($walkWeight) || empty($walkAge) || empty($walkBmi))
         {
           //display error if any form field is empty
          $errorWalking = "<div class='alert alert-danger' role='alert'>The fields must not be empty. Please check and enter data again.</div>";
         }
         else
         {
             //using condition to check if file exists or not
             if(file_exists('data/user_stats.json'))
             {

               //get the current user
               $current_user = $_SESSION['login'];
               $stats_json = file_get_contents('data/user_stats.json'); // read file
               $stats_array = json_decode($stats_json,true);// decode json strings and convert it into associative array
               //store form fields data in form of associative array
               $stats_data= array(
                                       
                                       
                                      'Exercise Type'=>'motorcycling',
                                      'Ride Done'=>$amountWalked,
                                      'Total time spend'=>$totalTimeWalk,
                                      'Weight' => $walkWeight,
                                      'Age' => $walkAge,
                                      'BMI' => $walkBmi,
                                      'Weekly Target' => $weeklyWalkTarget,
                                      'username' => $current_user,
                                      'Last Access' =>  $date
                                       
                                      
  
               );
               $stats_array[] = $stats_data; //append array
               $new_stats = json_encode($stats_array); //encode values to json format 
               if(file_put_contents('data/user_stats.json',$new_stats))
               {
                 //if data successfully inserted then show success message
                 $success ="<div class='alert alert-success' role='alert'>You have successfully entered your walking Dog stats.</div>";
               }
         
             } 
             else
             {
               //show error if file does not found
              $errorMotorCycling = "<div class='alert alert-danger' role='alert'>Unable to register. Please check the details and try again</div>";
             }   
  
         }
  
  
  
  
     }

?>