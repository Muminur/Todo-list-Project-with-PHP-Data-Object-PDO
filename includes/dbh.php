<?php

	try{
		$DBH= new PDO("mysql:host=localhost;dbname=todo",'root','');
		$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}
	catch(PDOException $e){
		echo "Something Wrong with connecting to database! I will tell Munna about this Error!";
		file_put_contents('PDOErrors.txt',$e->getMessage(),FILE_APPEND);
	}
