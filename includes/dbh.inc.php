<?php 

// dbh stands for database handler
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='root';
$DATABASENAME='user_database';


$conn=mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASENAME);



if (!$conn) {
    die("Connection Failed : " . mysqli_connect_error());
} else {
    echo "connected successfully!";
}
?>