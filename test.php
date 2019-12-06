
<?php

$login = $_POST[login];
$radio = $_POST[a];

$message = "---------------\n".$login."\n".$radio."\n---------------";

file_put_contents("log.txt",$message);

echo "done";

?>
