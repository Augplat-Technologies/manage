<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'zentao');
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
date_default_timezone_set('UTC');
require('XLSXReader.php');
$test=$_FILES['fileName']['name'];
$xlsx = new XLSXReader($test);
$sheetNames = $xlsx->getSheetNames();
?>
<!DOCTYPE html>
<html>
<head>
	<title>XLSXReader Sample</title>
	<style>
		body {
			font-family: Helvetica, sans-serif;
			font-size: 12px;
		}

		table, td {
			border: 1px solid #000;
			border-collapse: collapse;
			padding: 2px 4px;
		}
	</style>
</head>
<body>

<h1>XLSXReader Examples</h1>

<h2>Sheet Names</h2>

<p>List of the sheets in this workbook (indexed by sheetId):</p>

<?=debug($sheetNames);?>
<hr>


<h2>All Sheets</h2>

<p>Loop through all sheets, printing the sheet name and all of the sheet data in a table</p>

<?
foreach($sheetNames as $sheetName) {
	$sheet = $xlsx->getSheet($sheetName);
	?>
	<h3><?=escape($sheetName);?></h3>
	<?
	array2Table($sheet->getData());

	echo '<pre>';
	

//Step 1 or Module 1:
	/*for ($x = 0; $x <3; $x++) {

    echo "The number is: $x <br>";
    $check=mysqli_query($conn,"select * from zt_task where name= '".$tmp[0][16+$x][1]."' and openedBy='".$tmp[0][16+$x][2]."' and project=1");
    $checkrows=mysqli_num_rows($check);
 if($checkrows>0) {
     
   }else{
    $query = "insert into zt_task(project,module,name,type,openedBy) values(1,1,'".$tmp[0][16+$x][1]."','step1','".$tmp[0][16+$x][2]."')";
	mysqli_query($conn,$query);
	} 
	}
//step 2 or module 2
for ($x = 0; $x <=3; $x++) {

    echo "The number is: $x <br>";
    $check=mysqli_query($conn,"select * from zt_task where name= '".$tmp[0][20+$x][1]."' and openedBy='".$tmp[0][20+$x][2]."' and project=2");
    $checkrows=mysqli_num_rows($check);
 if($checkrows>0) {
     
   }else{
    $query = "insert into zt_task(project,module,name,type,openedBy) values(1,2,'".$tmp[0][20+$x][1]."','step1','".$tmp[0][20+$x][2]."')";
	mysqli_query($conn,$query);
	} 
	}
//Step 3 or Module 3

for ($x = 0; $x <=10; $x++) {

    echo "The number is: $x <br>";
    $check=mysqli_query($conn,"select * from zt_task where name= '".$tmp[0][25+$x][1]."' and openedBy='".$tmp[0][25+$x][2]."' and project=3");
    $checkrows=mysqli_num_rows($check);
 if($checkrows>0) {
     
   }else{
    $query = "insert into zt_task(project,module,name,type,openedBy) values(1,3,'".$tmp[0][25+$x][1]."','step1','".$tmp[0][25+$x][2]."')";
	mysqli_query($conn,$query);
	} 
	}

*/
	echo '</pre>';
}

?>
<hr>

<h2>Date Handling</h2>
<p>Excel dates are returned as integers and need to be converted to Unix timestamps for ease of use in PHP.  
This examples takes the data in the 'Dates' sheet and modifies it to include columns for the Excel date,
the converted Unix Timestamp, the timestamp in ISO 8601 format, and the data from the second column in the sheet.</p>

<p>XLSXReader does not do automatic conversion of dates to Unix Timestamps, instead you must call the static function 
<code>XLSXReader::toUnixTimeStamp</code> on an Excel date (integer) to convert it.</p>


<?
$data = array_map(function($row) {
	$converted = XLSXReader::toUnixTimeStamp($row[0]);
	return array($row[0], $converted, date('c', $converted), $row[1]);
}, $xlsx->getSheetData('Dates'));
//array_unshift($data, array('Excel Date', 'Unix Timestamp', 'Formatted Date', 'Data'));
//array2Table($data);


?>

</body>
</html>


<?
function array2Table($data) {
	echo '<table>';
	foreach($data as $row) {
		echo "<tr>";
		foreach($row as $cell) {
			echo "<td>" . escape($cell) . "</td>";
		}
		echo "</tr>";
	}
	echo '</table>';

}

function debug($data) {
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}

function escape($string) {
	return htmlspecialchars($string, ENT_QUOTES);
}
