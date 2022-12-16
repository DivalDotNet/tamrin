<!DOCTYPE html>
<html>

<head>
<meta charset=”UTF-8″>
<style>

#footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:100px;
   background:#3B373B;
}


body {
  margin: 0;
  font-family: Arial, B nazanin, tahoma;
}

.mymenu {
  overflow: hidden;
  background-color: #3B373B;
}

.mymenu a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.mymenu a:hover {
  background-color: #CAD4DF;
  color: black;
}

.mymenu a.active {
  background-color:  #656E77;
  color: white;
  }
</style>
</head>

<body dir="rtl" bgcolor="#CAD4DF">
<div class="mymenu">

	<a  href="CW-HW1-401106328.php">معرفی</a>
	<a href="مهارت‌ها و توانمندی‌ها.php">مهارت‌ها و توانمندی‌ها</a>
	<a href="افتخارات و دستاورد‌ها.php">افتخارات و دستاورد‌ها</a>
	<a class="active"  href="تماس با من.php">تماس با من</a>

</div>

<center>
	<p>
	<font face="b nazanin , tahoma" size="6.5" padding="14px 16px" >
	لطفا اطلاعات خود را وارد کنید:
	</font>
	</p>
	
	<font size="5">
	<form  method="POST"  action="myfirsttest.php"  target="_blank">
	  <label for="fname">نام:</label><br>
	  <input type="text" id="fname" name="fname"><br>
	  <label for="lname">نام خانوادگی:</label><br>
	  <input type="text" id="lname" name="lname"><br>
	  <label for="lname">آدرس ایمیل:</label><br>
	  <input type="text" id="email" name="email"><br>
	  <label for="lname">توضیحات:</label><br>
	  <input type="text" id="message" name="message"><br>
	  <input onclick="myFunction()" type="submit" value="ثبت اطلاعات" />
	  
	</form>
	</font>
	
	
</center>

<script>
function myFunction() {
  let test = "آیا از درستی اطلاعات وارد شده و ارسال فرم اطمینان دارید؟";
  if (confirm(test) == true) {
    text = "اطلاعات شما با موفقیت ثبت شد";
  } 
  document.getElementById("demo").innerHTML = text;
}
</script>

<div id="footer"> <font size="5" color="#CAD4DF">اطلاعات تماس: <br/> &nbsp آدرس ایمیل: nika_ghaderi@yahoo.com <br/> &nbsp گیت هاب: github.com/DivalDotNet </font></div>





 


</body>
</html>

