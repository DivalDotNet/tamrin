<?php
header('Content-Type: text/html; charset=utf-8');

        
if(isset($_POST['fname']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$message=$_POST['message'];
$info = $fname . PHP_EOL . $lname . PHP_EOL . $email . PHP_EOL . $message;




    $fileCount = count (glob ('*.txt'));
    $data = ( $fileCount + 1) . '.txt';
    $tf = fopen($data, 'w');
	fwrite($tf, $info);
    fclose($tf);



}

?>

<html>
<body bgcolor="#CAD4DF">

<center> <font face="b nazanin , tahoma" size="35" color="#656E77">
	<p> <br/><br/><br/>پیام شما با موفقیت ارسال شد </p> </font> </center>

</body>
</html>
