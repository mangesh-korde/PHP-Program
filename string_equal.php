<html>
<body>
<form method="post" action="string_equal.php">
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
 if($s1==$s2)
 echo("both strings are equal...");
 else
 echo("both strings are  not equal...");
?>