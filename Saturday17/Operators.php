<?php  
$year = 2013;  
 
if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400))
{
echo "$year is a Leap Year.";    
}
 
else  
{  
echo "$year is not a Leap Year.";    
}
?> 


<br>
<?php
function test($n) 
{
   return $n % 3 == 0 ;
}

var_dump(test(3));
var_dump(test(14));
var_dump(test(12));
var_dump(test(37));
?>


<br>
<?php
      $num1=1;
      $num2=5;
      $num3=9;
      if($num1>$num2 && $num1>$num3){
        echo $num1;
      }
      else{
        if($num2>$num1 && $num2>$num3){
          echo $num2;
        }
        else
          echo $num3;
      }

?>