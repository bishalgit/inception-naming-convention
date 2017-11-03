<?php 
	
	//$_POST take the input from the post
	/*var customerName= $_POST["customer"];
	var projectName= $_POST["project"];
	var fileName= $_POST["file"];*/

	//Testing the input file
	$customerName= "susan";
	$projectName= "inception";

	$fileName= "susan-inception-susan.doc";

	//$conven = $customerName . "-" . $projectName . "-" .$fileName;
	$arrFilename = [];

	$arrFilename = explode("-", $fileName);

	$size = count($arrFilename);

	for($i = 0; $i < $size; $i++ ) {

		echo $arrFilename[$i];
	}
?>