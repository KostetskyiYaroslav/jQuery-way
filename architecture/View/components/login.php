<?php

if(!isset($_COOKIE['login'])) {
    echo <<<"LOGIN"
         <form class="col s12">
          <div class="input-field col s6">
           <i class="material-icons prefix">contacts</i>
           <input id="user-login" name="user-login" type="text" class="valid" placeholder="Login" />
          </div>
          <div class="input-field col s6">
           <i class="material-icons prefix">vpn_key</i>
           <input id="user-password" name="user-password" type="password" class="valid" placeholder="Password" />
          </div>
          <button type="button" id="btn-login" class="btn waves-effect">Log In
           <i class="material-icons right">send</i>
          </button>
         </form>\n
LOGIN;
} else {
    echo <<<"AUTH"
         <div>
             You have already authorized!
         </div>\n
AUTH;
}
