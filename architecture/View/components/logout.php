<?php
if(isset($_COOKIE['login'])) {
    echo <<<"LOGOUT"
         <form class="col s12">
          <button type="button" id="btn-login" class="btn waves-effect">Log out</button>
         </form>\n
LOGOUT;
}
