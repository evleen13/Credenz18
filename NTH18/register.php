<?php
$servername = "localhost";
$username = "credenz_nthadmin";
$password = "pisbcredenz2017";
$dbname = "credenz_nthdb";

try {
    $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$username=$_POST['username'];
$password1=$_POST['password'];
$password2=$_POST['pass_2'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phn_no=$_POST['phn_no'];
$college=$_POST['college'];

if( !filter_var($email,FILTER_VALIDATE_EMAIL))
{
	echo 'Invalid Email';
	//echo '<script>alert("Invalid Email");window.location.href = "/nth2";</script>';
	exit();
}

$user=$con->prepare("select * from nth where username=:un");
$user->bindParam(':un',$username);
$user->execute();
if ($user->rowCount() > 0)
{
	echo "Username already exists";
	//echo '<script>alert("Username already exists");window.location.href = "/nth2";</script>';
	exit();
}
/*if ( $password1 != $password2 ) {
	echo '<script>alert("Passwords do not match");window.location.href = "/nth2";</script>';
	exit();
}*/
else{
$sql=$con->prepare("INSERT INTO nth(fname,lname,phn_no,username,password,email,college)VALUES('$fname','$lname','$phn_no','$username','$password1','$email','$college')");
	//echo "insert";
}

if (!$sql->execute())
{
	 echo "Registration Failed!";
	 //echo '<script>alert("Registration Failed!");window.location.href = "/nth2";</script>';
	 die();
}

else
{
session_start();
$_SESSION['username']=$username;
$_SESSION['level']=0;
$_SESSION['fname']=$fname;
$_SESSION['lname']=$lname;
echo "Registration Successfull";
//echo '<script>alert("Registration Successfull");window.location.href = "/nth2";</script>';
//header('Location:index.php');
}
}
catch(PDOException $e)
    {
    echo "Connection Error: " . $e->getMessage();
    }
//$con = null;
?>