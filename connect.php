<?php
$servername="sql9.freesqldatabase.com";
$username="sql9327478";
$password="J1n33bLyR9";
$dbname="sql9327478";
try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }





?>