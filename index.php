<?php
include("pages/meta.php");
$page = $_GET['page'];
if(!isset($page)) {
	$page = "fooldal";
}
$metatags = getMeta($page);
if(file_exists("pages/".$page.".php")) {
	$pageUrl = "pages/".$page.".php";
}
else {
	header("Location: kezdolap.html");
	exit;
}
?>
       	
<?php include("includes/header.php"); ?>
<?php include($pageUrl); ?>       
<?php include("includes/footer.php"); ?>


