<?php
	require_once('dbconnection.php');
	if(isset($_FILES["fileToUpload"]))
	{
		if($_FILES["fileToUpload"]["size"] > 0)
		{
			$filename = $_FILES['fileToUpload']['tmp_name'];
			$file = fopen($filename, "r");
			$header = null;

			$success_data = 0;
			$error_data = 0;

			while (($getData = fgetcsv($file)) !== FALSE)
					{
						if(!$header){
							$header = $getData;
							continue;
						}
						$temp_data = array_combine($header, $getData);

						
						foreach ($temp_data as $key => $value) {
							# code...
							$temp_data[$key] = '"' . $value . '"';
							
						}
						
						$headerKey = array_keys($temp_data);
						foreach ($headerKey as $key => $value) {
							# code...
							$value = str_replace(' ', '', $value);
							$headerKey[$key] = strtolower($value);

						}
						$columns = implode(", ", $headerKey);

					
					
						$values  = implode(", ", array_values($temp_data));


						$sql = "INSERT INTO `mo_tacts`($columns) VALUES ($values)";
						if ($conn->query($sql) === TRUE) {
						    $success_data ++;
						} else {
						   $error_data ++;
						   echo $sql . "<br/>";

						}
						// var_dump($sql);

					}
			echo $success_data . " rows were created." . "<br/>";
			
			if($error_data > 0)
				echo $error_data . " rows has error and couldn't insert them." . "<br/>";





		}
		else{
			echo "Error :  no file";
		}
	}
	
?>