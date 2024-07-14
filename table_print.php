Q.. Write a PHP script to display a multiplication 
    table of a number?

<html>
<body>
 <form method="post" action="table_print.php">
 <br><br> Enter no:
 <input type="number" name="t1"><br>
  <input type="submit" value="Click">
 </form>
</body>
</html>

<?php
 $n=$_POST["t1"];
 echo("multiplication table=<br>");
 for($i=1;$i<=10;$i++)
 {
    printf("<br>%dx%d=%d",$n,$i,$i*$n);
 }
?>