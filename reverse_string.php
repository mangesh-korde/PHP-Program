<html>
<body>
<form method="post" action="reverse_string.php">
  Enter String :
 <input type="text" name="t1"><br>
<input type="submit" value="click">
 </form>
 </body>
</html>

<?php
 $s=$_POST["t1"];
 function reverse($s1)
 {
 echo("reverse string=");
 for($i=strlen($s1)-1;$i>=0;$i--)
 {
  echo("".$s1[$i]);
 }
 }
 reverse($s);
?>