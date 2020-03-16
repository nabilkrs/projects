<?php
session_start();
include "connect.php";
$req="insert into message (name,message) values ('".$_SESSION['username']."','".$_POST['message']."');";

$res=$conn->query($req);

header('Location:room.php');


?>