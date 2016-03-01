<table border = "1">
<?php
  $a;
  $k=$_POST['game'];
  $l=$k*60;	
  $j=$_POST['mgsgame'];
  $v=$j*35;	
  $m=$_POST['blopsgame'];
  $o=$m*50;	
  $q=$_POST['pass1'];
  $b=$_POST['ship'];
  $h;
  if($b == 'free')
  {
			$a="Free 7 day";
			$h=0;
  }
  else if($b == 'night')
  {
     $a="$50.00 over night";
     $h=50;
  }
  else if($b == 'three')
  {
     $a="$5.00 three day";
     $h=5;
  }
  echo("Welcome! Your Password is: ".$q);
  echo "<br>";
  $total=$l+$v+$o+$h;
  echo "<tr>".PHP_EOL;
  echo "<td>"." "."</td>".PHP_EOL;
  echo "<td>"."Quantity"."</td>".PHP_EOL;
  echo "<td>"."Cost Per Item"."</td>".PHP_EOL;
  echo "<td>"."Sub Total"."</td>".PHP_EOL;
  echo "</tr>".PHP_EOL;  
  echo "<tr>".PHP_EOL;
  echo "<td>"."Witcher 3: Wild Hunt"."</td>".PHP_EOL;
  echo "<td>".$k."</td>".PHP_EOL;
  echo "<td>"."$60"."</td>".PHP_EOL; 
  echo "<td>"."$".$l."</td>".PHP_EOL; 
  echo "</tr>".PHP_EOL; 
  echo "<tr>".PHP_EOL;
  echo "<td>"."Metal Gear Solid: Phantom Pain"."</td>".PHP_EOL;
  echo "<td>".$j."</td>".PHP_EOL;
  echo "<td>"."$35"."</td>".PHP_EOL; 
  echo "<td>"."$".$v."</td>".PHP_EOL;  
  echo "</tr>".PHP_EOL; 
  echo "<tr>".PHP_EOL;
  echo "<td>"."Call of Duty: Black Ops 3"."</td>".PHP_EOL;
  echo "<td>".$m."</td>".PHP_EOL;
  echo "<td>"."$50"."</td>".PHP_EOL; 
  echo "<td>"."$".$o."</td>".PHP_EOL; 
  echo "</tr>".PHP_EOL; 
  echo "<tr>".PHP_EOL;
  echo "<td>"."Shipping"."</td>".PHP_EOL; 
  echo "<td>".$a."</td>".PHP_EOL; 
  echo "<td>"."$".$h."</td>".PHP_EOL;
  echo "</tr>".PHP_EOL; 
  echo "<tr>".PHP_EOL;
  echo "<td>"."Total Cost"."</td>".PHP_EOL; 
  echo "<td>"."$".$total."</td>".PHP_EOL; 
  echo "</tr>".PHP_EOL; 
  

?>
