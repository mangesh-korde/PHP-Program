Write a PHP script to check wheather a year is leap year or not??

<html>
<body>
<form method="post" action="leap_year.php">
  <br>Enter year:
  <input type="text" name="t1"><br>
 <input type="submit" value="check">
 </form>
</body>
</html>


<?php
 $y=$_POST["t1"];
 if($y%4==0)
 echo("<h3>Year is Leap year...");
 else
 echo("<h3> Year is not Leap year...");

?>