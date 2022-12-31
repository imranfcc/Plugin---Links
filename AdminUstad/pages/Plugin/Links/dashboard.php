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
<main class="<?php echo \template\cfg("WebWidth"); ?>">
	<div class="row">
		<div class="card border-0 p-0">
			<?php
				$result=\P\Links\lists(array("Id"=>"0"));
				while($row = $result->fetch_assoc()) { ?>
					<a class="card-body card-hover border-bottom p-2 text-decoration-none text-body" href="<?php echo"$AdminFolder"; ?>/Plugin/<?php echo"$Plugin"; ?>/Pages/edit?EditID=<?php echo $row["Id"]; ?>" >
						<div class="">
							<?php echo $row["Title"]; ?>
						</div>
					</a>
			<?php } ?>			
		</div>
	</div>
</main>
<!-- End : Your Page Source -->
<?php include("pages/inc/bs4_bottombar.php"); ?>
</body>
</html>
