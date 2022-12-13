<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php

phpinfo(); ?>

<?php
echo "Tomorrow I \'ll learn PHP global variables."."\n"; 
echo "This is a bad command : del c:\\*.*"."\n"; 
?>


 <form method='POST'>
   <h2>Please input your name:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form>
<?php
//Retrieve name from query string and store to a local variable
$name = $_POST['name'];
echo "<h3> Hello $name </h3>";
?>


<?php  
echo 'User IP Address - '.$_SERVER['REMOTE_ADDR'];  
?> 


<br>
<?php
$current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name."\n";
?>

<br>
<?php
$url = 'https://www.w3schools.com/php/default.asp';
$url=parse_url($url);
echo 'Scheme : '.$url['scheme']."\n";
echo `<br>`;
echo 'Host : '.$url['host']."\n";
echo `<br>`;
echo 'Path : '.$url['path']."\n";
?>

<br>
<?php
$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo $text;
?>

<br>
<?php
header('Location: https://www.w3resource.com/');
?>
</body>
</html>
