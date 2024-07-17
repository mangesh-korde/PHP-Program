write a Function to count the total no of vowels in string??
<html>
<body>
<form method="post" action="vowel_count.php">
 <br>Enter String:
 <input type="text" name="t1"><br>
 <input type="submit" value="check">
</form>
</body>
</html>
<?php
 $s=$_POST["t1"];
 function vowel_count($s)
 {
  $c=0;
  for($i=0;$i<strlen($s);$i++)
  {
    if($s[$i]=='a' ||$s[$i]=='e'||$s[$i]=='i'||$s[$i]=='o'||$s[$i]=='u')
    {
     $c=$c+1;
    }
  }
 return $c;
 }
 echo("counted vowel=".vowel_count($s));
?>