<?php
include 'connect.php';

$reqverif="select * from users where username like '".$_POST['username']."' or password like '".$_POST['password']."'; ";
$resverif=$conn->query($reqverif);


if (mysqli_num_rows($resverif)==0)
{
?>
<h1 style="color:red">There Is No User With These Data</h1>
<a href="http://localhost/tchat"><button>Back To Register</button><a>
<?php

}
else{

session_start();
$_SESSION["username"] = $_POST['username'];
header('Location:room.php');
}


?>