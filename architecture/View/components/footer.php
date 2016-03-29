<?php
$date           = date('h:i:s A');
$end            = microtime(true);
$create_on_time = ($end - $start);

echo <<<FOOTER
 <footer class="page-footer blue">
   <div class="container">
     <div class="row">
       <div class="col l6 s12">
         <h5 class="footer-date white-text">$date</h5>
         <p class="grey-text text-lighten-4">Page render in $create_on_time seconds.</p>
       </div>
       <div class="col l4 offset-l2 s12">
         <h5 class="white-text">Links</h5>
         <ul>
          <li class="gray-text" id="home-page">Home</li>
          <li class="gray-text" id="login-page">Login</li>
          <li class="gray-text" id="upload-page">Upload</li>
          <li class="gray-text" id="about-us-page">About Us</li>
         </ul>
       </div>
     </div>
   </div>
   <div class="footer-copyright blue darken-1">
     <div class="container ">
       © 2016 SoftGroup PHP Academy
     </div>
   </div>
 </footer>
 
FOOTER;
