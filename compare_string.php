<html>
<body>
<form method="post" action="compare_string.php">
 Enter String 1:
 <input type="text" name="t1"><br>
 <br>Enter string 2:
 <input type="text" name="t2"><br>
 <br><input type="submit" value="Check">
</form>
</body>
</html>

<?php
 $s1=$_POST["t1"];
 $s2=$_POST["t2"];
 $k=(strcmp($s1,$s2));
 if($k==0)
 echo("Both are equal..");
 if($k>0)
 echo("First string is greater..");
 if($k<0)
 echo("Second string is greater..");
?>