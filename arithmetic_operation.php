Write a PHP script which will perform the Addition,Suntraction,Multiplication,Division of two numbers
as per the choice(use Switch case..)??

<html>
<body>
 <form method="post" action="arithmetic_operation.php">
 <br><br> Enter First no:
  <input type="number" name="t1"><br>
  <br>Enter Second no:
  <input type="number" name="t2"><br>
 Enter choice 1-4:
  <ol>
   <li>Addition
   <li>subtraction
   <li>multiplication 
   <li>divison
  </ol>
  <input type="number" name="t3"><br>
 <br><input type="submit" value="Click">
 </form>
 </body>
</html>

<?php
 $a=$_POST["t1"];
 $b=$_POST["t2"];
 $ch=$_POST["t3"];
 
 switch($ch)
 {
  case 1:$c=$a+$b;
         echo("<h3>Addition=".$c);
         break;
  case 2:$c=$a-$b;
         echo("<h3>Subtraction=".$c);
         break;
 case 3:$c=$a*$b;
         echo("<h3>multiplication=".$c);
         break;
 case 4:$c=$a/$b;
         echo("<h3>divison=".$c);
         break;

 }
  
?>