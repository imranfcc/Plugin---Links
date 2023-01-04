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
		<form action='' Method='POST'>
			<div class="form-floating">
  				<select class="form-select" id="sel1" name="sellist">
   					<option>Enable</option>
   					<option>Disable</option>
  				</select>
  				<label for="sel1" class="form-abel">Select list (select one):</label>
			</div>
			<div class="form-floating mb-3 mt-3">
      			<input name="Title" class="form-control" id="email" placeholder="Type Title">
      			<label for="Title">Title</label>
			</div>
			<div class="form-floating mb-3 mt-3">
      			<input name="Link" class="form-control"  placeholder="Link" >
      			<label for="Link">Link</label>
   			</div>
			<div class="form-floating mb-3 mt-3">
      			<input name="Target" class="form-control"  placeholder="Target">
      			<label for="Target">Target</label>
   			</div>
			<div class="form-floating mb-3 mt-3">
      			<input name="InId" class="form-control"  placeholder"InId" value="<?php if(isset($_GET["AutoFill_InId"])){ echo $_GET["AutoFill_InId"]; } ?>">
      			<label for="InId">InId</label>
    		</div>
			<div class="form-floating mb-3 mt-3">
      			<input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
      			<label for="email">Icon</label>
    		</div>
  			<button type="submit" class="btn btn-primary">Submit</button> 
		</form>
	</div>
</main>
<?php

//$insert = mysqli_query("INSERT INTO sh_pl_links (Status, Title, Link, Target, InId, Icon)
//	VALUES ('Enable','Computer' ,'Laptop','Sale' ,15)");


$T=$_POST["Title"];
$l=$_POST["Link"];
$tt=$_POST["Target"];
$i=$_POST["InId"];
$sql = "INSERT INTO sh_pl_links (`Title`,`Link`,`Target`,`InId`)
VALUES ('$T','$l','$tt','$i')";

$con->query($sql);
?>	


<!-- End : Your Page Source -->
<?php include("pages/inc/bs4_bottombar.php"); ?>
</body>
</html>