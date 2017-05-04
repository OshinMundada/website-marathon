<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Thank you!</title>
<link rel="stylesheet" type="text/css" href="css/report.css">
</head>

<body>
		<div id="container">
			<div id="content">
			
<?php
	$UPLOAD_DIR = 'tasvir/';
    $COMPUTER_DIR = '/home/jadrn032/public_html/proj3/tasvir/';
$db = get_db_handle();

   /* $sql = "SELECT photo, lastname, firstname, FLOOR(DATEDIFF(CURRENT_DATE, STR_TO_DATE(dob, '%d/%m/%Y'))/365.25) as age, explevel FROM MarReg GROUP BY category ORDER BY lastname;";*/

    $sql = "SELECT photo, lastname, firstname, TIMESTAMPDIFF(YEAR, STR_TO_DATE(dob, '%m/%d/%Y'), CURDATE()) as age, explevel, category FROM MarReg ORDER BY category, lastname;";
    
    $result = mysqli_query($db, $sql);
    if(!$result) {
    	echo "Error in query".mysqli_error($db);
    }
    echo "<table>\n<tr><td>Picture</td><td>Last Name</td><td>First Name</td><td>Age</td><td>Experience</td><td>Category</td>\n";
    while($row=mysqli_fetch_row($result)) {
    	echo "<tr>";
    	foreach($row as $item) {

    		$d = dir($COMPUTER_DIR.'/');
    		while($fname = $d->read()) {
        $data[$fname] = $fname;
        }
    foreach ($data as $fname => $fvalue) {
        if($fname == "." || $fname == "..") {
            ;
            }
        else {
        	if($fname == $item) {
            echo "<td><img src=\"$UPLOAD_DIR/$fname\""." width='120px' /></td>\n";
            break;
        }
        }
    	}
    	if($fname != $item) 
		echo "<td>$item</td>";
    	}
    	echo "</tr>\n";
    }

    close_connector($db);


function get_db_handle() {
    $server = 'opatija.sdsu.edu:3306';
    $user = 'jadrn032';
    $password = 'pipe';
    $database = 'jadrn032';   
    if(!($db = mysqli_connect($server, $user, $password, $database))) {
        echo "SQL ERROR: Connection failed: ".mysqli_error($db);
        }
    return $db; 
    }        
       
function close_connector($db) {
    mysqli_close($db);
 }

?>


      		</div>
		</div>

</body>
</html>