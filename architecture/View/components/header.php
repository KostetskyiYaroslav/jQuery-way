<?php
if(isset($_COOKIE['login'])){
 $login_page = '<li><button class="btn btn-nav light-blue" id="logout-page">Logout</button></li>';
} else
 $login_page = '<li><button class="btn btn-nav light-blue" id="login-page">Login</button></li>';
echo <<<HEADER
 <!--HEADER START--!>
 <nav>
   <div class="nav-wrapper">
     <a href="index.php" class="brand-logo">SoftGroup Academy</a>
     <ul id="nav-mobile" class="right hide-on-med-and-down">
       <li><button class="btn btn-nav light-blue" id="home-page">Home</button></li>
       $login_page
       <li><button class="btn btn-nav light-blue" id="upload-page">Upload</button></li>
       <li><button class="btn btn-nav light-blue" id="about-us-page">About Us</button></li>
     </ul>
   </div>
 </nav>
 <!--HEADER END--!>
 
HEADER;
