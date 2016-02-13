<?php
	


	try{
		$DBH = new PDO("mysql:host=localhost",'root','');
		$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$DBH->setAttribute(PDO::ATTR_AUTOCOMMIT,FALSE);

		$DBH->query("CREATE DATABASE IF NOT EXISTS todo1");
		$DBH = null;
		//database is created, Now select it to create new table
		$DBH = new PDO("mysql:host=localhost;dbname=todo1",'root','');
		
		/// MAN, YOU MUST SET AUTO_INCREMENT AS PRIMARY KEY 
		
		$sql = "CREATE TABLE `todo1`.`todo_table`(
				id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
					title varchar(255) NOT NULL); ";
		$try=$DBH->query($sql);

		if($try)  print("Created todo_table Table. \n");


	}
	catch(PDOException $e){
		echo $e->getMessage();
	}

?>