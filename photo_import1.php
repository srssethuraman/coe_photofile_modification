<?php

/*$directory = 'E:\\sethuraman\\SBU_SMS_HOSTEL\\Images_Conversion_07-09-2016\\Images_Conversion_07-09-2016\\';
		
if ($handle = opendir($directory)) {

    while (false !== ($fileName = readdir($handle))) {
        //$newName = str_replace("SKU#","",$fileName);
		//echo $fileName."<br>";
        rename($fileName, "1.jpg");
    }
    closedir($handle);
}
?>
*/


$fileFolder="coe/img";  // location of the application and the image directory.
$directory = $_SERVER['DOCUMENT_ROOT'].$fileFolder.'/';
echo $directory;
$fn=1;
if ($handle = opendir($directory)) {

    while (false !== ($fileName = readdir($handle))) {
 		echo $fileName."<br>";
		$filename_reg=substr($fileName,0,7);
		$nn=$filename_reg. '.jpg';
        rename($directory . $fileName, $directory . $nn);
       // $fn = $fn+1;
    }
    closedir($handle);
}
?>
