<?php 

		public function corrector($dir) {

		$arrFilename = [];
		$arrFilename = explode("-", $dir);
		$size = count($arrFilename);

		$fileLastName = $arrFilename[$size - 1];
		if(is_numeric($filename[0])){
			echo "The file name can not start from number";
		}elseif (strlen($filename)==1) {
			echo "The file name should be more then a single letter";
		}
		else{

			$correctFileName = $customerName. '-' .$projectName. '-' .$fileLastName;

			echo "Correct File Name: ".$correctFileName;
		}	
	}
?>	