<?php
// uppercase letters
echo "<br>";
print(strtoupper("the quick brown fox jumps over the lazy dog."))."\n";
// lowercase letters
echo "<br>";
print(strtolower("THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG"))."\n";
// make a string's first character uppercase
echo "<br>";
print(ucfirst("the quick brown fox jumps over the lazy dog."))."\n";
// make a string's first character of all the words uppercase
echo "<br>";
print(ucwords("the quick brown fox jumps over the lazy dog."))."\n";
?>


<?php
echo "<br>";
$dt = DateTime::createFromFormat('m-d-Y', '12-08-2004')->format('Y-m-d');
echo $dt;
?>



<?php
echo "<br>";
$time_input = strtotime("2011/05/21"); 
$date_input = getDate($time_input); 
print_r($date_input);                
?>


<?php
echo "<br>";
$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; // "index.php"
?>


<?php
echo "<br>";
$mailid  = 'info@example.com';
$user = strstr($mailid, '@', true);
echo $user."\n";
?>

<br>
<?php
$str1 = 'rayy@example.com';
echo substr($str1, -3)."\n";
?>

<br>
<?php
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."\n";
?>
