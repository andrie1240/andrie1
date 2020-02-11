<?php

		$host = "dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com"; $username = "admin";
		$password = "root1234";
		$connect = @mysqli_connect($host, $username, $password) or die("Unable to connect to host");
		$db = @mysqli_select_db($connect, "db_1822188") or die("Cannot connect to database");
		$sql = "select * from table2";
		$dbrecords = mysqli_query($connect,$sql) or die("Unable to query data");
	
		
		while($row = mysqli_fetch_object($dbrecords)) {
				
				echo 
					$arr = array('id' => $row->id , 'username' => $row->username , 'password' => $row->password);
				 echo "<br/>";				
					echo json_encode($arr);
							}
							return $list;
				
				mysqli_close($connect);


?>
