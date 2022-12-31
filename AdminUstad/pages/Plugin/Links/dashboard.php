<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("pages/inc/Header.php"); ?>
</head>
<body class="v3">
<?php \template\navbar(array("Btn_Search"=>false,"Btn_BackLink"=>"$AdminFolder/Plugin/$Plugin/dashboard")); ?>
<?php if(is_file("pages/Plugin/".$Plugin."/Sidebar.php")){ include("pages/Plugin/".$Plugin."/Sidebar.php"); } ?>
<div class="modal" id="sh-Modal-Ajax"></div>
<div class="modal" id="sh-Modal-Waiting"><div class="modal-dialog modal-dialog-centered text-center"><i class="fas fa-cog fa-spin fa-5x mx-auto"></i></div></div>
<!-- Start : Your Page Source -->
<div class="container">
	<div class="row">
	<div class="row">
	<div class="card">
<?php
	$result=\P\Links\lists("0");
	while($row = $result->fetch_assoc()) {
		echo"<div class='card-body border-bottom'>";
		echo $row["Title"]."<br>";
		echo $row["Link"]."<br>";
		echo $row["Target"]."<br>";
		echo $row["InId"]."<br></div>";
	}
 ?>
</div>
</div>
</div>


<!-- End : Your Page Source -->
<?php include("pages/inc/bs4_bottombar.php"); ?>
</body>
</html>
