<?php 

		public function corrector($dir) {

		$arrFilename = [];
		$arrFilename = explode("-", $dir);
		$size = count($arrFilename);

		$fileLastName = $arrFilename[$size - 1];
		if(!(preg_match('/^[a-z0-9-]+\.ext$/', $fileLastName))){
			
			echo "The last phase of file name itself is incorrect. Please provide the valid filename.";
		}
		else{

			$correctFileName = $customerName. '-' .$projectName. '-' .$fileLastName;

			echo "Correct File Name: ".$correctFileName;
		}	
	}
?>	