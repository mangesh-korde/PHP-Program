<html>
<body>
<form method="post" action="greatest_three.php">
 Enter no 1:
 <input type="text" name="t1"><br>
 Enter no 2:
 <input type="text" name="t2"><br>
 Enter no 3:
 <input type="text" name="t3"><br>
 <input type="submit" value="check">
</form>
</body>
</html>
<?php
 $a1=$_POST["t1"];
 $a2=$_POST["t2"];
 $a3=$_POST["t3"];
 function greatest_three($a,$b,$c) 
 {
   if($a>$b && $a>$c)
     return $a;
   if($b>$a && $b>$c)
     return $b;
  if($c>$b && $c>$a)
     return $c;
 }
 echo("Greatest no=".greatest_three($a1,$a2,$a3));
 
?>