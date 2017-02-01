
<!DOCTYPE html>
<html>
<head>
	<title>
	emloyeedetails	
	</title>
	
	<script type="text/javascript">
		function validation()
		{
            bhbbd
			var flag=true;
			 if ((document.f1.Name.value)=="")
			 {
			 	document.getElementByID("error1").innerHtml="Name is mandatory";
			 	flag=false;
			 }
			 else if(/[0-9]/.test(document.f1.name.value)==true)
			 {
			 	document.getElementByID("error1").innerHtml="Name must contain only letters";
			 }
			 else
			 {
			 	document.getElementByID("error1").innerHtml="";
			 }
			 if((document.f1.number.value)=="")
			 {
			 	document.getElementByID("error2").innerHtml="Enter Phonenumber";
			 	flag=false;
			 }
			 else if ((/[a-z]/).test(document.f1.number)==true)
			  {
			  	document.getElementByID("error2").innerHtml="Invalid mobilenumber";
			  }
			 else
			 {
			 	document.getElementByID("error2").innerHtml="";
			 }
			  if((document.f1.Email.value)=="")
			 {
			 	document.getElementByID("error3").innerHtml="Enter Email";
			 	flag=false;
			 }
			 else
			 {
			 	document.getElementByID("error3").innerHtml="";
			 }
			  if(!isset(document.f1.m.value))
			 {
			 	if(!isset(document.f1.fm.value))
			 	document.getElementByID("error4").innerHtml="select Gender";
			 flag=false;
			 }
			 else
			 {
			 	document.getElementByID("error4").innerHtml="";
			 }

			   if(!isset(document.f1.country.value))
			 {
			 	
			 	document.getElementByID("error5").innerHtml="select country";
			 	flag=false;
			 }
			 else
			 {
			 	document.getElementByID("error5").innerHtml="";
			 }

           return flag;
		}


<?php
 if (validation()) 
 {
 	$servername="localhost";
 	$dbname="empolyee";
 	$connect=mysqli_connect("localhost","root","","empolyee");
 	if($connect)
 	{
 	  $qr="insert into empolyee_det(Name,Phone,Email,Pic)values(Name,number,Email)";
 	   if(mysqli_query($connect,$qr))
 	   {
 		inserted;
 	   }
 	}   
 }

?>



	</script>
	
</head>
<body>
<link rel="stylesheet" type="text/css" href="">

<form name="f1" method="post" onsubmit="valiadtion()">

<table border="0" align="center" style="width: 700px;height: ">
	<tr>
	<td  style="font-size: 30px">Add Empolyee</td></tr>
	<tr></tr>

<tr>
<td>
Name   <input type="text" name="Name" value="" placeholder="Name" style="width: 200px;height: 25px;padding-left: 15px">
<label id="erro1"></label></td></tr><tr></tr>
<tr><td>
Phone number<input type="text" name="number" value="" placeholder="Phonenumber" style="width: 200px;height: 25px;padding-left: 15px">
<label id="error2"></label></td></tr><tr></tr>
<tr><td>
Email<input type="text" name="Email" value="" placeholder="Email" style="width: 200px;height: 25px;padding-left: 15px;padding-left: 15px">
<label id="error3"></label></td></tr><tr></tr>
<tr><td>
Gender<input type="radio" name=m>Male<input type="radio" name="fm">female<label id="error4"></label>
</td></tr><tr></tr>
<tr><td>
Hobbies<input type="checkbox" name="">Listening to Music
</td></tr><tr><td style="width: 300px;padding-left: 55px">
<input type="checkbox" name="">Reading</td></tr>
<tr><td style="width: 100px;padding-left: 55px"><input type="checkbox" name="">Browsing</td></tr>
<tr><td style="width: 100px;padding-left: 55px"><input type="checkbox" name="">Playing</td></tr>
<!-- <select name="Hobbies"> -->
</td></tr><tr></tr>
<tr><td>
Profilepic<input type="text" name="">
<!-- <input type="button" name="Browse" value="browse" style="background-color: blue;width: 80px;height: 25px"> -->
</td></tr><tr></tr>
<tr><td>
Country<select name="country" style="height: 25px;width: 200px">
	<!-- <option value="0">country</option> -->
	<option value="1">India</option>
	<option value="2">USA</option>
	<option value="3">England</option>
	<option value="4">France</option>
	<option value="5">Italy</option>
	<option value="6"></option>
	<option value="6"></option>
	<option value="6"></option>
</select><label id="error5"></label></td></tr>
<tr><td>
<!-- <button type="submit" name="save" value="save" style="background-color: blue;height: 25px;width: 80px"></button> -->
<input type="button" name="save" value="save" style="background-color: blue;height: 25px;width: 80px" >
</td></tr>
<!-- </table> -->
<!-- </form> -->
</table>
</form>
</body>

</html>