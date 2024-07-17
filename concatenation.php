<html>
<body>
<form method="post" action="concatenation.php">
 Enter String 1:
 <input type="text" name="t1"><br>
 Enter string 2:
 <input type="text" name="t2"><br>
 <input type="submit" value="click">
</form>
</body>
</html>
<?php
 $s1=$_POST["t1"];
 $s2=$_POST["t2"];
 $s3=$s1.$s2;
 echo("<h1>Concatenation string= $s3");
?>