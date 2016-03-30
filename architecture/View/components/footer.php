<?php
$date           = date('h:i:s A');
$micro_time_end = microtime(true);
$create_on_time = ($micro_time_end - $micro_time_start);

echo <<<FOOTER
 <footer class="page-footer blue">
   <div class="container">
     <div class="row">
       <div class="col l6 s12">
         <h5 class="footer-date white-text">$date</h5>
         <p class="grey-text text-lighten-4">Page render in $create_on_time seconds.</p>
       </div>
       <div class="col l4 offset-l2 s12">
        <button class="btn-to-top" id="to-top"><i class="large material-icons">navigation</i></button>
       </div>
     </div>
   </div>
   <div class="footer-copyright blue darken-1">
     <div class="container">
       © 2016 SoftGroup PHP Academy
     </div>
   </div>
 </footer>
 
FOOTER;
