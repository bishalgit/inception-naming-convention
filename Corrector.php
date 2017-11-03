<?php 

		public function corrector($dir) {

		$arrFilename = [];
		$arrFilename = explode("-", $dir);
		$size = count($arrFilename);

		$fileLastName = $arrFilename[$size - 1];

		$correctFileName = $customerName. '-' .$projectName. '-' .$fileLastName;

		echo "Correct File Name: ".$correctFileName;
	}
?>	