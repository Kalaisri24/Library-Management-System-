<html>
<br>
<br>
<br>
<br>
<br>
<h1 style="color:Blue;text-align:center;margin-left:30px;">CUSTOMER ACCOUNT</h1>
<center>
<body background="image1.jpg" height="1000" width="1000"> 
<form method="POST" action="">
<table border="0">
<center>
<tr>
<td><h2 style="color:Black;text-align:center;margin-left:30px">Username:</h2></td>
<td><input name="Username" type="text" size="20" required></td>
</tr>
<tr>
<td><h3 style="color:Black;text-align:center;margin-left:30px">Password:</h3></td>
<td><input name="Password" type="password" size="20" required></td>
</tr>
</center>
</table>
<input name="Submit" type="Submit" value="Submit">
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<input type="reset" value="Clear" >
</form>
</body>
</html>
<?php
if(isset($_POST["Submit"]))
{
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"kalaisri");
$sql="select username,password from kalaisri";
$unget=$_POST["Username"];
$psget=$_POST["Password"];
$result=mysqli_query($con,$sql);
$temp=0;
while($row=mysqli_fetch_array($result,MYSQL_NUM))
{
	$un=$row[0];
	$ps=$row[1];
if($un==$unget&&$ps==$psget)
{header('Location:Available Books.html');
$temp=1;
break;
}
}
if($temp==0)
{
header("Location:notuser.html");
}
}
?>