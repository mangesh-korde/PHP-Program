1.write a php script to display maximum between two nos??

<html>
 <body>
  <form method="post" action="#.php">
    <br>Enter First no:
    <input type="number" name="t1"><br>
   <br> Enter Second no:
    <input type="number" name="t2"><br>
    <br><input type="submit" value="ok">
  </form>
 </body>
</html>



<?php
 $a=$_POST["t1"];
 $b=$_POST["t2"];
 if($a>$b)
   echo("<h1>First no is greater...");
 else
   echo("<h1>Second no is greater...");
?>