
<?php
include_once("class.php");

	$obj = new ClassCode;

	$db = mysql_connect('localhost', 'root', '');
	if (!$db) {
	    die('Could not connect: ' . mysql_error());
	}

	//echo "Connected successfully\n";
	mysql_select_db('couponcode');

	$ncodes = $argv[1];
	for ($i = $ncodes; $i > 0; ) {
		$code   = $obj->getcode();
		$q      = "SELECT * FROM tablecode p WHERE p.Code='$code'";
		$result = mysql_query($q);
		$count  = mysql_num_rows($result);
		echo "count =".$count."\n";
		//echo "Code = ".$code." q =".$q." result = ".$result." count = ".$count."\n";
		if ($count == 0) {
			$i--;

			$q  = "INSERT INTO tablecode (Code)";
			$q .= "VALUES('$code')";
			echo "q =".$q."\n";
			mysql_query($q);
		}
	}
?>