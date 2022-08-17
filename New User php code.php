<?php
if(isset($_POST['Submit']))
{


$a=$_POST['Username'];
$b=$_POST['Password'];

$c=$_POST['RollNo'];

$d=$_POST['Email'];
$e=$_POST['Gender'];
$f=$_POST['PhoneNumber'];


$dbname="kalaisri";
$usr="root";
$l="localhost";
$pass="";
$conn = mysqli_connect($l,$usr,$pass,$dbname);

$query="INSERT INTO kalaisri VALUES('$a','$b','$c','$d','$e','$f')";
if(mysqli_query($conn,$query))
{
header('Location:Existing User.php');
}


mysqli_close($conn);         
}
?>
<html>
<head>
<style type="text/css">



.error
{color: yellow;}
</style>
<body background="pink.jpg"> 
<?php
$Username =$Password = $RollNo=$Email=$Gender=$PhoneNumber=""; 
$Usernameerr =$Passworderr = $RollNoerr=$Emailerr=$Gendererr=$PhoneNumbererr="";
	  
	  $target_dir = "desktop/";



if (isset($_POST["Submit"])) {

 if (empty($_POST["Username"])) 
{
$Usernameerr = "Name is required"; }

  else { $Username =input($_POST["Username"]);
if(!preg_match("/^[a-zA-Z]*$/",$Username))
{$Usernameerr="only letters";}
 }


  if (empty($_POST["Password"]))

  { $Passworderr = "Password is required"; } 

  else { $Password =input($_POST["Password"]);
if(!preg_match("/^[0-9]{5}$/",$Password))
{$Passworderr="Enter letters and numbers Password";}} 
  
 
    
    if (empty($_POST["RollNo"])) 
  { $Rollerr = "RollNo is required"; }
   else { $Roll= input($_POST["Roll"]);
if(!preg_match("/^[0-9]{10}$/",$Roll))
{$Rollerr="Enter valid RollNo";} }

 
     if (empty($_POST["PhoneNumber"])) 
  { $Phoneerr = "PhoneNumber is required"; }
   else { $Phoneerr= input($_POST["PhoneNumber"]);
if(!preg_match("/^[0-9]{10}$/",$Phoneerr))
{$Phoneerr="Enter valid PhoneNumber";} }
   
    if(empty($_POST["email"]))
	 { $emailerr = "Email required"; }
	 else { $email =input($_POST["email"]); 
if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
$Emailerr="Enter valid email";} 
	 
	
}
function input($d)
{
$d=trim($d);
$d=htmlspecialchars($d);
return $d;}



?>
<form  method="POST" action="">
<h1 style="color:Blue;text-align:center;margin-left:30px;">CREATE ACCOUNT</h1>
<center>
<body background="pink.jpg">  
<table border="0">
<tr><td>Username:</td> 
<td><input name="Username" type="text"  size="20" required autofocus></td>
<td class="error" ><?php {echo $Usernameerr;}?></td></tr>
<tr><td>Password:</td> 
<td><input name="Password" type="password" size="20" required></td>
<td class="error" ><?php {echo $Passworderr;}?></td></tr>
<tr><td>RollNo:</td>
<td><input name="RollNo" type="text"  size="5" required></td>
<td class="error" ><?php {echo $RollNoerr;}?></td></tr>
<tr><td>Email:</td>
<td><input type="Email" name="Email"  size="30"></td>
<td class="error" ><?php {echo $Emailerr;}?></td></tr>
<tr><td>Gender:</td>
<td><input type="radio" name="Gender"  value="male" >male<input type="radio"  name="Gender"  value="female">female</td></tr>
<tr><td>PhoneNumber:</td><td><input name="PhoneNumber" type="text"  size="10" required></td>
<td class="error" ><?php {echo $PhoneNumbererr;}?></td></tr>
</table>
<br>
<br>
<input name="Submit" type="Submit" value="Submit">
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<input type="reset" value="Clear">
</form>
</body></html>