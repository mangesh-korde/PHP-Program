write a Function to find the length of given string without inbuild function???
<html>
<body>
<form method="post" action="length_count.php">
 <br><br>Enter String:
 <input type="text" name="t1"><br>
 <input type="submit" value="check">
</form>
</body>
</html>
<?php
 $s=$_POST["t1"];
 function len_count($s)
 {
  $c=0;
   for($i=0;$s[$i]!=null;$i++)
  {
    $c=$c+1;
  }
   
 echo("length of string=".$c);
 }
 len_count($s);
?>