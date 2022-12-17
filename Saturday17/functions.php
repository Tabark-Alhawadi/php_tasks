<?php
function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = IsPrime(3);
if ($a==0)
echo 'This is not a Prime Number.....'."\n";
else
echo 'This is a Prime Number..'."\n";
?>


<br>
<?php  
$string = "remove";  
echo "Reverse string of $string is " .strrev ( $string );  
?>  


<br>

<?php
$string = "remove";

if (ctype_lower($string)) {
    echo  ' Your String is Ok ';
} else {
    echo  ' Your String is not Ok ';
}
?>


