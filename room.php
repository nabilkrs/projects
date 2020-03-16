<?php
session_start();
//echo $_SESSION['username'];




?>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<form method="POST" action="ajouter.php">

<textarea rows="10" cols="30" name="message" placeholder="Write a message"></textarea>
<button type="submit">Send</button>
</form>

<table style="height: 200px;" width="540" border=2>
<tbody>
<tr>
<td style="width: 500px;" id="message">
rfr
readfilerf
readfilefr


</td>
</tr>
</tbody>
</table>
<script>
$(document).ready(function(){
setInterval(function(){
$('#message').load('messages.php');


});


});


</script>
<a href="disconnect.php" style="right:60px"><button>Disconnect</button></a>


</html>