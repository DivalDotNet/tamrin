<!DOCTYPE HTML>
<html> 
 <head>
<meta charset=”UTF-8″>
</head>
<body>

<form action="امتحان.html" method="POST" target="_blank">
اسم: <input type="text" name="name"><br>
E-میل: <input type="text" name="email"><br>
<input type="submit">
/*<input onclick="window.location.href =امتحان.html;" type="submit" value="Submit request" />*/

</form>

</body>
</html>



<?php
header('Content-Type: text/html; charset=utf-8');

        
if(isset($_POST['name']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$info = $name . PHP_EOL . $email;




    $fileCount = count (glob ('*.txt'));
    $data = ( $fileCount + 1) . '.txt';
    $tf = fopen($data, 'w');
	fwrite($tf, $info);
    fclose($tf);



}




?>


