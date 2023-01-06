<?php
if(isset($_POST["SubmitForm"])){
	$ValueTitle=mysqli_real_escape_string($con, $_POST["FormLink_Title"]);
	$ValueLink=mysqli_real_escape_string($con, $_POST["FormLink_Link"]);
	$ValueTarget=mysqli_real_escape_string($con, $_POST["FormLink_Target"]);
	$ValueInId=mysqli_real_escape_string($con, $_POST["FormLink_InId"]);
	$ValueIcon=mysqli_real_escape_string($con, $_POST["FormLink_Icon"]);
	$sql = "SELECT Id FROM `sh_pl_links` WHERE `Title`='$ValueTitle' AND `InId`='$ValueInId' ";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		$Error_Title="This Title name is alrady exist!";
		?><script>alert("Error")</script><?php
	}  else {
		// Insert Now
		$sql = "INSERT INTO `sh_pl_links` (`Status`, `Title`,`Link`,`Target`,`InId`, `Icon`)
		VALUES ('Status', '$ValueTitle','$ValueLink','$ValueTarget','$ValueInId', '$ValueIcon')";
		if($con->query($sql)===TRUE){
			header("Location: ".$AdminFolder."/pages/Plugin/".$Plugin."/dashboard?ShowInId=".$ValueInId);
		}
	}
} // Close POST
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

<main class="<?php echo \template\cfg("WebWidth"); ?>">
	<div class="row">
		<?php if(isset($Error_Title)){ ?>
		<div class="alert alert-danger">
    		<strong>Error!</strong> <?php echo $Error_Title; ?>
  		</div><?php } ?>

		<form action='' Method='POST' class="">
			<div class="form-floating">
  				<select class="form-select" id="sel1" name="sellist">
   					<option>Enable</option>
   					<option>Disable</option>
  				</select>
  				<label for="sel1" class="form-abel">Select list (select one):</label>
			</div>
			<div class="form-floating mb-3 mt-3">
      			<input name="FormLink_Title" class="form-control" id="email" placeholder="Type Title">
      			<label for="Title">Title</label>
			</div>
			<div class="form-floating mb-3 mt-3">
      			<input name="FormLink_Link" class="form-control"  placeholder="Link" >
      			<label for="Link">Link</label>
   			</div>
			<div class="form-floating mb-3 mt-3">
      			<input name="FormLink_Target" class="form-control"  placeholder="Target">
      			<label for="Target">Target</label>
   			</div>
			<div class="form-floating mb-3 mt-3">
      			<input name="FormLink_InId" class="form-control"  placeholder"InId" value="<?php if(isset($_GET["AutoFill_InId"])){ echo $_GET["AutoFill_InId"];'' } ?>"autocomplete="off">
      			<label for="InId">InId</label>
    		</div>
			<div class="form-floating mb-3 mt-3">
      			<input type="text" class="form-control" id="email" placeholder="Enter email" name="FormLink_Icon">
      			<label for="email">Icon</label>
    		</div>
  			<!--<button type="submit" name="SubmitForm" value="Links" class="btn btn-primary">Submit</button> -->
			  <div class="d-grid gap-2">
  				<button class="btn btn-primary" type="submit" name='SubmitForm'>SubmitForm</button>
  				
			  </div>
		</form>
	</div>
</main>
<?php

//$insert = mysqli_query("INSERT INTO sh_pl_links (Status, Title, Link, Target, InId, Icon)
//	VALUES ('Enable','Computer' ,'Laptop','Sale' ,15)");

// if(isset($_POST[user]))
// {
// $T=$_POST["Title"];
// $l=$_POST["Link"];
// $tt=$_POST["Target"];
// $i=$_POST["InId"];

// $sql = "INSERT INTO sh_pl_links (`Title`,`Link`,`Target`,`InId`)
// VALUES ('$T','$l','$tt','$i')";
// }
// $con->query($sql);
?>	


<!-- End : Your Page Source -->
<?php include("pages/inc/bs4_bottombar.php"); ?>
</body>
</html>