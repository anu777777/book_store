<!DOCTYPE html>
<head>
<title> Write a simple calculator program in PHP using the switch statement by T4Tutorials.com
 </title>
</head>
<h1>Prininting the fibonacci series!</h1>
<?php  
// PHP code to get the Fibonacci series
// Recursive function for fibonacci series.
function Fibonacci($number){
      
    // if and else if to generate first two numbers
    if ($number == 0)
        return 0;    
    else if ($number == 1)
        return 1;    
      
    // Recursive Call to get the upcoming numbers
    else
        return (Fibonacci($number-1) + 
                Fibonacci($number-2));
}
  
// Driver Code
$number = 10;
for ($counter = 0; $counter < $number; $counter++){  
    echo Fibonacci($counter),' ';
}
?> 
</body>
</html>