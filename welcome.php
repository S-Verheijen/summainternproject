<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welkom <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Log uit</a></h2>
   </body>
   
</html>