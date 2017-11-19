<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sms_hostel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM photo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "id: " . $row["id"]. " - Name: " . $row["roll"]. " " . $row["lastname"]. "<br>";
	    
		//echo "id: " . $row["id"]. " - Name: " . $row["roll"]. " <br>";
		
		
		if($row["id"] !=0 && $row["roll"]!="")
		{
		//echo "id: " . $row["id"]. " - Name: " . $row["roll"]. " <br>";
		}
		
//$directory = 'E:\\sethuraman\\SBU_SMS_HOSTEL\\Images_Conversion_07-09-2016\\Images_Conversion_07-09-2016\\';

$fileFolder="sms_hostel/stu_img";  // location of the application and the image directory.
$directory = $_SERVER['DOCUMENT_ROOT'].$fileFolder.'/';

//echo $directory;
		
if ($handle = opendir($directory)) {

$i=0;
    while (false !== ($fileName = readdir($handle))) {
	
	
	if(strlen($fileName)== 13 && substr($fileName,1,8) == $row["id"]."_3")
	{
	$i++;
	
	/*$newName = substr($fileName,1,6);
	$newName1 = $newName."_3";
	$data1=$row["id"]."_3";
		if($newName1==$data1)
		{
		

        //$newName = str_replace("SKU#","",$fileName);
        //rename($fileName, $newName); 
		//rename($fileName,$row["roll"]); 
		}
		echo $newName1."<br>";*/
		$data=$row['roll'];
		
		echo $data.".jpg"; 
		echo "<br>";
		
		//rename(substr($fileName,0,9).".jpg",$data.".jpg");
		rename($directory . substr($fileName,0,9).".jpg", $directory . $data.".jpg");
		
	//echo $fileName."<br>";
	}	
    }
	//echo $i;
    closedir($handle);
}
		
		
		
		
    }
} else {
    echo "0 results";
}
$conn->close();
?>