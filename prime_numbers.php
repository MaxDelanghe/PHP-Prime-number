
<?php
function prime_numbers ($n)
{
  $flag;
  $i;
  $flag = 1;
  $i = 2;

  if($n <= 1) {
    return false;
  }
  while ( $i < ($n / 2) +1)  {
    if (($n % $i) == 0) {
      $flag = 0;
    }
    $i = $i +1;
  }
  if ($flag == 0) {
    return false;
  }
  return true;
}
 ?>
