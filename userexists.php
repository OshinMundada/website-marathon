<?php

$server = 'opatija.sdsu.edu:3306';
    $user = 'jadrn032';
    $password = 'pipe';
    $database = 'jadrn032';   

    if(!($db = mysqli_connect($server, $user, $password, $database))) {
        echo "SQL ERROR: Connection failed: ".mysqli_error($db);
        }
$email =$_GET['email'];
        $sql = "SELECT * FROM MarReg where email='$email';";
    
    $result = mysqli_query($db, $sql);

$how_many = mysqli_affected_rows($db);
mysqli_close($db);
if($how_many > 0) {
    echo "dup";
}
else if($how_many == 0) {
    echo "OK";
}
else {
    echo "ERROR, failure ".$how_many;
}
?>
