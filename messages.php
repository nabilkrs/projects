<?php
include 'connect.php';
$req="select * from message order by id desc limit 10;";
$res=$conn->query($req);
while ($row=$res->fetch_assoc())
{

echo "<mark>".$row['name']."</mark>"." : ".$row['message']."<br>";

}
?>