<?php
session_start();
$name=$_POST['uname'];
$pass=$_POST=['pass'];

$conn = mysqli_connect("localhost","root","root","blue_care","3307");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
else{
  echo "Connected successfully";}

$query = "select * from login where name='$name' && pass='$pass'";
$result= mysqli_query($conn,$query);
$num=mysqli_num_rows($result);

if($num==0)
{
	if($name=='admin' && $pass='pass@123'){
		$_SESSION['username']=$name;
		header('location:admin_organize.php');
		
	}
	else{
    $_SESSION['username']=$name;
	header('location:index.php');
	}
}
else{
    header('location:login.php');
}

?>

