
<?php

	$fileName = "input.txt";
	$fileHandle = fopen($fileName,"r");
		if($fileHandle){
				while(!feof($fileHandle)){ //While end of file
					$buffer = fgets($fileHandle);   //get all content of file
					$exploded_data = explode(" ", $buffer);  //fucn return array form buffer divide by " "
					foreach ($exploded_data as $key => $value) {
					echo removeSymbol($value);	
					echo "<br>";
					}
				}
			}
		else{
			echo "error: unexpected fgets()  fail\n";
		}	
	fclose($handle);


function removeSymbol($str){
	$str =	str_replace("?","",$str);
	$str =	str_replace(".","",$str);
	$str =	str_replace(",","",$str);
	//add more
	return $str;
}

?>

