<?php

function check_prime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}
$num = $_POST['number'];
$flag_val = check_prime($num);
if ($flag_val == 1)
   echo "$num is a prime number";
else
   echo "$num is a non-prime number";
?>