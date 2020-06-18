<?php
$conn_string="host=ec2-52-20-248-222.compute-1.amazonaws.com
port=5432 dbname=ddc85nc2h8o0pu user=jnayszatzckgxb password=70607644d558c502b6fc31462b280adfd5b3e10d068c569afc911b5a39520f1c
";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}
if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM tblAccount WHERE _user='".$username."' AND _pass='".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if($row==1)
{
	echo "Login Success";
}
else
{
	echo "Login Failed";
}
?>
