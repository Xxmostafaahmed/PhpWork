<?php  
$x = 1;
 
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
} 
do {
    echo "The number is: $x <br>";
    $x++;
  } while ($x <= 5);
  
  for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }

  // randomNumber
$randNumber=rand();
echo $randNumber;
?>