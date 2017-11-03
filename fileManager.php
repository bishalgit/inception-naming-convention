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
	echo $arrFilename[0];
	echo $arrFilename[1];

	$size = count($arrFilename);

	if($size > 3) {

		echo "***File out of convention order ***";	
	} else {

		if ($customerName==$arrFilename[0] && $projectName = $arrFilename[1]) {
				echo "File is in order";
		} else{
				echo "File is not in order";
		}
	}

	// }
	// for($i = 0; $i < $size; $i++ ) {

	// 	echo $arrFilename[0];
	// }
?>