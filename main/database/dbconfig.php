
<?php
$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "adminpanel";


$connection = mysqli_connect($server_name, $db_username, $db_password);
$dbconfig = mysqli_select_db($connection, $db_name);

if ($dbconfig) {
    // echo "Database Connected";
    // echo 'I am coing from dbconfig';
} 
else {
    echo ' Error Connecting Database';
}

?>


