<form action="" method="post">
<input type="email" placeholder="email" name="email">
<input type="submit" value="submit" name="submit">
</form>
<?php
$server='localhost';
$user='root';
$pass='';
$db='signup';
$conn=mysqli_connect($server,$user,$pass,$db);

if(isset($_POST['submit']))
{
		$email=$_POST['email'];
		$email_query="select * from sign where email='$email'";
	$query=mysqli_query($conn,$email_query);
	$email_count=mysqli_num_rows($query);
	   if($email_count)
	   {
		    $userdata=mysqli_fetch_array($query,MYSQLI_ASSOC);
			$username=$userdata['username'];
			$token=$userdata['token'];
		$to=$email;
    $subject="Thank You";
    $message="haii $username. Thank You for Sign up in my website http://localhost/child_and_women/submit.php?token=$token";
    $header="From:anandsinghara012@gmail.com";
	if(mail($to,$subject,$message,$header))
	{
		echo "mail send";
	}
	else{
		echo "mail not sennd";
	}
	   }
	   else
	   {
		   echo" no email found ";
	   }
     
}
else
{
	echo"not submit";
}

?>