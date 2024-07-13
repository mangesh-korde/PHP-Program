Write a PHP script to check wheather a number is positive or negative??

<html>
 <body>
  <form method="post" action="pos_neg.php">
    <br>Enter no:
    <input type="number" name="t1"><br>
    <input type="submit" value="OK">
  </form>
 </body>
</html>

<?php
 $a=$_POST["t1"];
  if($a>0)
   echo("<h3>Number is positive..");
  else
  echo("<h3>Number is negative..");

?>