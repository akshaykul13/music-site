<?php
$ds          = DIRECTORY_SEPARATOR;  //1
 
$storeFolder = 'uploads';   //2
 
if (!empty($_FILES)) {     
    $tempFile = $_FILES['file']['tmp_name'];          //3                   
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5 
    move_uploaded_file($tempFile, $targetFile); //6
}

/*
	1. Store directory separator (DIRECTORY_SEPARATOR) to a simple variable. This is just a personal preference as we hate to type long variable name.
	2. Declare a variable for destination folder.
	3. If file is sent to the page, store the file object to a temporary variable.
	4. Create the absolute path of the destination folder.
	5. Create the absolute path of the uploaded file destination.
	6. Move uploaded file to destination.
*/

?>