<?php 
	
	//$_POST take the input from the post
	$customerName= $_POST["customer"];
	$projectName= $_POST["project"];
	$folderName= $_POST["file"];

	//Testing the input file
	

	//$conven = $customerName . "-" . $projectName . "-" .$fileName;
	function Convention($dir){
	$arrFilename = [];
	$arrFilename = explode("-", $dir);
	
	$size = count($arrFilename);

	if($size >= 3) {

		echo "***File out of convention order ***";	
	} else {

		if ($customerName==$arrFilename[0] && $projectName = $arrFilename[1]) {
				echo "File is in order";
		} else{
				echo "File is not in order";
				
		}
	}
}

	// }
	// for($i = 0; $i < $size; $i++ ) {

	// 	echo $arrFilename[0];
	// }
?>