<!DOCTYPE html>
<html>
<head>
	<title>
	emloyeedetails	
	</title>
	<script type="text/javascript">
		function val()
		{
			var flag=true;
			 if ((document.f.name.value)=="")
			 {
			 	document.getElementByID("error1").innerHtml="Name is mandatory";
			 	flag=false;
			 }
			 else
			 {
			 	document.getElementByID("error1").innerHtml="";
			 }
			 if((document.f.number.value)=="")
			 {
			 	document.getElementByID("error2").innerHtml="Enter Phonenumber";
			 	flag=false;
			 }
			 else
			 {
			 	document.getElementByID("error2").innerHtml="";
			 }
			  if((document.f.Email.value)=="")
			 {
			 	document.getElementByID("error3").innerHtml="Enter Email";
			 	flag=false;
			 }
			 else
			 {
			 	document.getElementByID("error3").innerHtml="";
			 }
			  if(!isset(document.f.m.value))
			 {
			 	if(!isset(document.f.fm.value))
			 	document.getElementByID("error4").innerHtml="select Gender";
			 flag=false;
			 }
			 else
			 {
			 	document.getElementByID("error4").innerHtml="";
			 }

			   if(!isset(document.f.country.value))
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

 if (val()) 
 {
 	$servername="localhost";
 	$dbname="empolyee";
 	$connect=mysqli_connect($servername,"root","",$dbname);
 	if($connect)
 	{
 		connected;
 	}
 	$qr="insert into empolyee_det(Name,Phone,Email)values(Name,number,Email)";
 	if(mysqli_query($connect,$qr))
 	{
 		inserted;
 	}
 }



	</script>
	
</head>
<body>
<link rel="stylesheet" type="text/css" href="">
<table align="center" style="width: 700px;height: ">
	<tr>
	<td  style="text-align: center;">Add Empolyee</td></tr>
<form name="f" method="post" onsubmit="return val()" >

<tr>
<td>
Name<input type="text" name="Name" value="" placeholder="Name" style="width: 200px;height: 25px">
<label id="erro1"></label></td></tr>
<tr><td>
Phone number<input type="text" name="number" value="" placeholder="Phonenumber" style="width: 200px;height: 25px">
<label id="error2"></label></td></tr>
<tr><td>
Email<input type="text" name="Email" value="" placeholder="Email" style="width: 200px;height: 25px">
<label id="error3"></label></td></tr>
<tr><td>
Gender<input type="radio" name=m>Male<input type="radio" name="fm">female<label id="error4"></label>
</td></tr>
<tr><td>
Hobbies<input type="checkbox" name="">Listening to Music
</td></tr><tr><td style="width: 80px">
<input type="checkbox" name="">Reading</td></tr>
<tr><td style="width: 80px"><input type="checkbox" name="">Browsing</td></tr>
<tr><td style="width: 80px"><input type="checkbox" name="">Playing</td></tr>
<!-- <select name="Hobbies"> -->
</td></tr>
<tr><td>
Profilepic<input type="text" name=""><input type="button" name="Browse" value="browse" style="background-color: blue">
</td></tr>
<tr><td>
Country<select name="country">
	<option value="0">country</option>
	<option value="1">India</option>
	<option value="2">USA</option>
	<option value="3">England</option>
	<option value="4">France</option>
	<option value="5">Italy</option>
</select><label id="error5"></label></td></tr>
<tr><td>
<input type="button" name="Update" value="save" style="background-color: blue">
</td></tr>
<!-- </table> -->
</form>
</table>
</body>

</html>