<?php


// Task 8
function isPrime($num)
{
    if($num == 1)
        return 0;

 for($i=2; $i<=$num/2; $i++)
   {
      if($num % $i ==0)
	      {
		   return 0;
		  }
    }
  return 1;
}

$status = isPrime(4);
if ($status)
    echo 'The number is a prime';
else
    echo 'The number is not a prime';


