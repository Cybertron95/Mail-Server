<?php
session_start();
$id=$_SESSION['sid'];
include_once('connection.php');

if(isset($_POST['delete'])) 
{
foreach($_POST['ch'] as $v)
{
//echo $v;
$sql=mysql_query("SELECT * FROM usermail where rec_id='$id' and mail_id='$v'");
while($dd=mysql_fetch_array($sql))
	{
	$rec=$dd['rec_id'];
	$sen=$dd['sen_id'];
	$sub=$dd['sub'];
	$msg=$dd['msg'];
	$att=$dd['attachement'];
	//store into trash table
	mysql_query("insert into trash values('','$rec','$sen','$sub','$msg',now())");
	
	//delete form inbox
	
	mysql_query("delete FROM usermail where rec_id='$id' and mail_id='$v'");

	}
	
}
echo "<script>alert('msg deleted');window.location='mailbox.php'</script>";
}
?>
