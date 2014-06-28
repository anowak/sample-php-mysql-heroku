<?php
require_once("sql.php");
$sql = new SQL();
$doc = $sql->main();
$row = mysqli_fetch_row($doc);
echo 'Hello world, ' . $row[0] . '!';
?>
