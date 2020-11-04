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

<section id="main">
         <div class="container">
         
<nav id="sitemaps">

  <ul>
  <li> <a href="index.php">Home</a></li>
  <li> <a href="services.php">Services</a></li>
  <li><a href="contact.php">Contact Us</a></li>
  <li><a href="register.php">Register</a>
  <ul>

          <li><a href="login.php">login</a></li>
            <ul>
              <li><a href="myfitness.php">myfitness</a></li>

            </ul>
           </li>

          </ul>

        </li>

      </ul>

    </li>
    <li><a href="diary.php">Health Diary</a></li>
  </ul>

</nav>

</div>
</section>
<?php

require_once('includes/footer.php');

?>