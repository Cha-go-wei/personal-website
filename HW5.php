<!DOCTYPE html>
<html>
<body>
  <?php
  settype($_GET["Birthdaycode"],"Integer");
  $x=$_GET["Birthdaycode"];
  $y=0;
  $z=0;
  while($x>9){
    $y=$x%10;
    $z=floor($x/10);
    $x=$y+$z;
  }
  print("Birthday = $x");
   ?>
 </body>
 </html>
