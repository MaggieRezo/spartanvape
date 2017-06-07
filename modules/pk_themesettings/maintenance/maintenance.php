<?php
if ($_POST["cs-email"]) {
	if (!$fileHolder = @fopen("emails.txt", 'a+')) {
		$mes = "cantopenstorage";
	} else {					
		if (!fwrite($fileHolder, $_POST["cs-email"].";")) {
			$mes = "cantsaveemail";			
		}				
		fclose($fileHolder);	
		$mes = "Gracias!";
	}
} else {
	$mes = "fillemail";
	}
header( 'Location: '.$_POST["mainURL"]."?message=".$mes );
?>