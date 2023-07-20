<?php
$con = mysqli_connect('localhost','root','12345678','login');

$uname=$_POST[uname];
$password=$_POST[password];
$sql="select* from users where user_name='$uname' and password='$password'";

$rs=mysqli_query($con,$sql);
$result=mysqli_num_rows($rs);

if($result==1)
{
        system("/var/www/html/script.sh");
	header("Location: http://localhost/home.php");
}
else
{
echo"Wrong details!!";
}

?>

