<?php
include 'connect.php';

$req="insert into users values ('".$_POST['username']."','".$_POST['email']."','".$_POST['password']."');";
$reqverif="select * from users where username like '".$_POST['username']."' or email like '".$_POST['email']."'; ";
$resverif=$conn->query($reqverif);


if (mysqli_num_rows($resverif)!=0)
{
?>
<h1 style="color:red">This Username Or This Email Has Been Taken</h1>
<a href="http://localhost/tchat"><button>Back To Register</button><a>
<?php

}
else{
$res=$conn->query($req);
session_start();
$_SESSION["username"] = $_POST['username'];
header('Location:room.php');
}
?>