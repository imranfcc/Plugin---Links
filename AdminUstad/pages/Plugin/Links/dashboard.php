<?php 
if(isset($_GET["ShowInId"])){ 
	$ShowInId=$_GET["ShowInId"]; 
	$ShowName=\P\Links\Id_to_Name($_GET["ShowInId"]);
} else {  
	$ShowInId="0";
	$ShowName="root";
}

?><!DOCTYPE html>
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
<style>
	.card-hover:hover{
		background-color:#F0FFF0;
	}
</style>
<main class="<?php echo \template\cfg("WebWidth"); ?>">
	<div class="row">
		<div class="card border-0 p-0">
			<div class="card-header p-2 bg-white fw-bold" style="color: var(--bs-green);">
				<?php if($ShowInId>"0"){ ?><i class="fad fa-edit float-end text-dark"></i><?php } ?>
				<?php echo $ShowName; ?>:
			</div>

			<?php
				$result=\P\Links\lists(array("Id"=>$ShowInId));
				while($row = $result->fetch_assoc()) { ?>
					<div class="card-body d-none card-hover border-bottom p-2 text-decoration-none text-body">
						
						<a class="p-2 ">
							title
						</a>
						<a class="p-2 d-none">
							<i class="fas fa-caret-down"></i>
						</a>
					</div>
					<a class="card-body card-hover border-bottom p-2 text-decoration-none text-body" href="<?php echo"$AdminFolder"; ?>/Plugin/<?php echo"$Plugin"; ?>/dashboard?ShowInId=<?php echo $row["Id"]; ?>" >
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