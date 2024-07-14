Write a PHP scriptto display prime nos upto limit???
<html>
 <body>
  <form method="post" action="prime_no.php">
   <br>Enter limit:
  <input type="number" name="t1"><br>
  <input type="submit" value="Click">
  </form>
 </body>
</html>

<?php
 $n=$_POST["t1"];
 for($k=2;$k<=$n;$k++)
 {
 for($i=2;$i<=$k;$i++)
 {
   if($k%$i==0)
   {
       break;
   }
 }
 if($i==$k)
 echo("<br>prime=".$k);
 
}

?>