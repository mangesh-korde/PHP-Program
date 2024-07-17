<html>
<body>
 <form method="post" action="factorial.php">
 Enter no:
 <input type="text" name="t1">
 </form>
</body>
</html>
<?php
 $n=$_POST["t1"];
 function cal_factorial($n)
 {
  $f=1;
  for($i=1;$i<=$n;$i++)
  {
   $f=$f*$i;
  }
  return $f;
 }
 echo("factorial=".cal_factorial($n));

?>