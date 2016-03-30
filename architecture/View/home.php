<?php $micro_time_start = microtime(true); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" http-equiv="content-type" content="width=device-width, initial-scale=1.0" charset="utf-8"/>
    <title>Welcome</title>
    <link  href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link  href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].'/less13/css/materialize.min.css';?>" rel="stylesheet" type="text/css">
    <link  href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].'/less13/css/style.css';          ?>" rel="stylesheet" type="text/css">
    <script src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].'/less13/js/jquery-2.2.2.min.js'; ?>" type="text/javascript" ></script>
    <script src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].'/less13/js/materialize.min.js';  ?>" type="text/javascript" ></script>
    <script src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].'/less13/js/main.js ';            ?>" type="text/javascript" ></script>
</head>
<body>
<?php include 'components/header.php'; ?>
 <main>
   <div class="container">
 <!--Home page start-->
     <div class="page-content home-page col s6 m6 l4 offset-m4">
      <div class="row card-panel center grey lighten-5 z-depth-1 center">
       <div class="row">
        <img class="welcome-image" src="<?php echo 'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER["SERVER_PORT"] . '/less13/components/image/welcome.jpg'?>" />
       </div>
      </div>
     </div>
 <!--Home page end-->

 <!--Login page start-->
     <div class="page-content login-page col s6 m6 l4 offset-m4">
      <div class="row card-panel center grey lighten-5 z-depth-1 center">
       <form class="col s12">
        <div class="row">
<?php require "components/login.php"; ?>
        </div>
       </form>
      </div>
     </div>
 <!--Login page end-->

<!--Logout page start-->
       <div class="page-content logout-page col s6 m6 l4 offset-m4">
        <div class="row card-panel center grey lighten-5 z-depth-1 center">
         <form class="col s12">
          <div class="row">
<?php require "components/logout.php"; ?>
          </div>
         </form>
        </div>
       </div>
<!--Logout page end-->

 <!--About Us page start-->
      <div class="page-content about-us-page col s6 m6 l4 offset-m4">
       <div class="row  card-panel center grey lighten-5 z-depth-1 center">
        <form class="col s12">
         <div class="row">
<?php require "components/about_us.php"; ?>
         </div>
        </form>
       </div>
      </div>
 <!--About Us page end-->
  </div>
 </main>
<?php include "components/footer.php"; ?>
</body>
</html>