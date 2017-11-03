<?php
function convention($dir,$customerName,$projectName){
	$arrFilename = explode("-", $dir);
	echo "<td>".$dir."</td>";
	$size = count($arrFilename);
	if($size == 3) {
		if ($customerName==$arrFilename[0] && $projectName == $arrFilename[1]) {
				echo "<td> Correct </td>";
		} else{

				corrector($dir,$customerName,$projectName);
		}
			
	} else {

			corrector($dir,$customerName,$projectName);
		}
	//echo "<td>".$actualPath."</td>";
	}

	function corrector($dir,$customerName,$projectName) {

		$arrFilename = [];
		$arrFilename = explode("-", $dir);
		$size = count($arrFilename);

		$fileLastName = $arrFilename[$size - 1];
		/*if(!(preg_match('/^[a-z0-9-]+\.ext$/', $fileLastName))){
			
			echo "The last phase of file name itself is incorrect. Please provide the valid filename.</br>";
		}
		else{

			
		}*/
		$correctFileName = $customerName. '-' .$projectName. '-' .$fileLastName;

			echo "<td>".$correctFileName."</td>";	
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
</head>
<body>
<?php

	//$dir="C:/xampp/htdocs/Inception/inception-naming-convention/";
	$dir="F:/7th sem/";
	$actualPath = $dir;
	$customerName ="inception";
	$projectName ="convention";
	?>
	<table>
		<tr>
			<th>File Name</th>
			<th>Correct Name</th>
			<th>Path</th>
		</tr>
		<?php
	search($dir,$customerName,$projectName);
	
	function search ($dir,$customerName,$projectName){
		$fnf = scandir($dir,1);
		$len = sizeof($fnf);
		if($len<=2){
			echo "error";
		}
		else{
			for($i = 0; $i < $len - 2; $i++){
				if(is_dir($fnf[$i])){
					echo $actualPath;
					search($dir.$fnf[$i]."/",$customerName,$projectName);
				}
				else{
					echo "<tr>";
					convention($fnf[$i],$customerName,$projectName);
					echo "</tr>";
				}
			}
		}
	}
?>
</body>
</html>
