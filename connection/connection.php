<?php
$servername = "localhost"; // your host name.69.195.124.192

$username = "root"; // database user name.longrich_adaptx

$password = "";  //database password.Joff123!!!

$dbname = "adaptinventorydb_1_0_3"; // database name.

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get compaany info
$sql1 = "SELECT * FROM setting where setting_id='1'";
	$result1 = $conn->query($sql1);
	while($row1 = $result1->fetch_assoc()) 
	{
		$setting_id1=$row1['setting_id'];
		$setting_name1=$row1['setting_name'];
		$setting_logo1=$row1['setting_logo'];
		$setting_address1=$row1['setting_address'];
		$setting_city1=$row1['setting_city'];
		$setting_country1=$row1['setting_country'];
		$setting_phone1=$row1['setting_phone'];
		$setting_fax1=$row1['setting_fax'];
		$setting_web1=$row1['setting_web'];
		$setting_currency=$row1['setting_currency'];
	}
	



?>