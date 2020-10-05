<html>
<form action="md5.php" method="POST">
	Username:<input type="text" name="name"><br>
	Password:<input type="text" name="pass"><br>
	<input type="submit">
</form>
</html>
<?php
require("connect.php");
if(isset($_POST['name'],$_POST['pass']))
{
	$usrname=$_POST['name'];
	$pass=$_POST['pass'];
	$encpass=md5($pass);
	if($usrname && $pass)
    {
		$query ="INSERT INTO user (name,pass)VALUES('$usrname','$encpass')";
		$up=mysqli_query($connect,$query);
		if($up)
		{  	echo"<br>"; 
			echo "Table updated successfully";
		}
		else
		{
			echo "<br/>";
			echo "Error:".mysqli_error($connect);
		} 
    }
}

?>