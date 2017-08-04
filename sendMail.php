<?php
$msg = $_GET['Name']."\n".$_GET['Email']."\n\n".$_GET['message'];



// send email
mail("luccote@stmarksschool.org","My subject",$msg);
header("Location: index.html#contact");
exit;
?>