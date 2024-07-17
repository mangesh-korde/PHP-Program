<html>
<body>
<form method="post" action="radio_button.php">
 Enter string:
 <input type="text" name="t1"><br>
 <br><input type="radio" name="r1" value="aa">Length of string
 <br><input type="radio" name="r1" value="bb">Vowels count
 <br><input type="radio" name="r1" value="cc">Lower & Title case
 <br><input type="radio" name="r1" value="dd">remove spaces
 <br><input type="radio" name="r1" value="ff">reverse string
<br><input type="submit" value="click">
 </form>
</body>
</html>
<?php
 $s=$_POST["t1"];
 $ch=$_POST["r1"];
 switch($ch)
 {
   case "aa":echo("length of string=".strlen($s));
              break;
   case "bb":vowels_count($s);
               break;
  case "cc":echo("lowercase string=".strtolower($s));
            $s1=ucwords($s);
            echo("<br>Title case=".$s1);
            break;
 case "dd":$s1=trim($s);
           echo("After deleted space=".$s1);
            break;
 case "ff":$s1=strrev($s);
           echo("Reverse string=".$s1);
           break;
 }
 function vowels_count($s)
 {
  $c=0;
  for($i=0;$i<strlen($s);$i++)
  {
    if($s[$i]=='a'||$s[$i]=='e'||$s[$i]=='i'||$s[$i]=='o'||$s[$i]=='u')
    {
       $c=$c+1;
    }
  }
  echo("counted vowel=".$c);
 }
?>