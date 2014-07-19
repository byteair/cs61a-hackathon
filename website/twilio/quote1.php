	<?php
	$host="mysql.biteair.com"; // Host name 
	$username="biteair"; // Mysql username 
	$password="hansen1"; // Mysql password 
	$db_name="ngswag"; // Database name 
	$tbl_name="jokes"; // Table name 
	
	$connection = mysql_connect("$host", "$username", "$password"); 
		
	mysql_select_db("$db_name");

	$query = "SELECT * FROM jokes ORDER BY RAND() LIMIT 1";
	$result = mysql_query($query);
	
	while ($row = mysql_fetch_array($result)):
    	echo $row['quote'];
	endwhile; 
	
	mysql_close();