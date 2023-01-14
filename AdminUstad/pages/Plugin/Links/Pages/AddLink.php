<?php
if(isset($_POST["SubmitForm"])){
	$ValueStatus=$row["FormLink_Status"]);
	$ValueTitle=$row["FormLink_Title"]);
	$ValueLink=$row["FormLink_Link"]);
	$ValueTarget=$row["FormLink_Target"]);
	$ValueInId=$row["FormLink_InId"]);
	$ValueIcon=$row["FormLink_Icon"]);
	$sql = "SELECT Id,InId FROM `sh_pl_links` WHERE `Title`='$ValueTitle' AND `InId`='$ValueInId' ";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$ExistLinksId=$row["Id"];
	 	$Error_Title="This Title name is alrady exist!";
	}  else {
	 	// Insert Now
	 	$sql = "INSERT INTO `sh_pl_links` (`Status`, `Title`,`Link`,`Target`,`InId`, `Icon`)
	 	VALUES ('$ValueStatus', '$ValueTitle','$ValueLink','$ValueTarget','$ValueInId', '$ValueIcon')";
	}


	if(isset($_POST["EditLinksId"])){
    	$sql = "UPDATE `sh_pl_links` SET 
			`Status`='$ValueStatus', 
			`Title`='$ValueTitle', 
			`Link`='$ValueLink', 
			`Target`='$ValueTarget', 
			`InId`='$ValueInId', 
			`Icon`='$ValueIcon' WHERE `Id`='$_POST[EditLinksId]'";
    
	} 
        
    
	if($con->query($sql)===TRUE){
		header("Location: /".$AdminFolder."/Plugin/".$Plugin."/dashboard?ShowInId=".$ValueInId);
	}
	// }
	if(isset($_GET["EditLinksId"])){
	 	$sql = "SELECT * FROM `sh_pl_links` WHERE `Id`='$_GET[EditLinksId]'";
	 	$result = $con->query($sql);
	 	if ($result->num_rows > 0) {
	 		$row = $result->fetch_assoc();
			if(!isset($_POST["SubmitForm"])){
				$ValueStatus=$row["Status"]);
				$ValueTitle=$row["Title"]);
				$ValueLink=$row["Link"]);
				$ValueTarget=$row["Target"]);
				$ValueInId=$row["InId"]);
				$ValueIcon=$row["Icon"]);
	 		}
			
	 	}
	}
} // Close POST
?><!DOCTYPE html>
<html lang="en">
<head>
	<?php include('pages/inc/Header.php'); ?>
</head>
<body class="v3">
<?php \template\navbar(array("Btn_Search"=>false,"Btn_BackLink"=>"$AdminFolder/Plugin/$Plugin/dashboard")); ?>
<?php if(is_file('pages/Plugin/'.$Plugin."/Sidebar.php")){ include('pages/Plugin/'.$Plugin."/Sidebar.php"); } ?>
<div class="modal" id="sh-Modal-Ajax"></div>
<div class="modal" id="sh-Modal-Waiting"><div class="modal-dialog modal-dialog-centered text-center"><i class="fas fa-cog fa-spin fa-5x mx-auto"></i></div></div>
<!-- Start : Your Page Source -->

<main class="<?php echo \template\cfg("WebWidth"); ?>">
	<div class="row">

		<?php if(isset($Error_Title)){ ?>
		<div class="alert alert-danger">
    		<strong>Error!</strong> <?php echo $Error_Title; ?>
  		</div><?php } ?>

		<form action='' Method='POST' class=" pt-3">
			<div class="form-floating">
  				<select class="form-select" id="sel1" name="FormLink_Status">
   					<option>Enable</option>
   					<option>Disable</option>
  				</select>
  				<label for="sel1" class="form-abel">Select list (select one):</label>
			</div>
			<div class="form-floating mb-3 mt-3">
      			<input name="FormLink_Title" class="form-control" id="email" placeholder="Type Title" value="<?php if(isset($ValueTitle)){ echo stripslashes($ValueTitle); } ?>"  required >
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
      			<input name="FormLink_InId" class="form-control"  placeholder"InId" value="<?php if(isset($_GET["AutoFill_InId"])){ echo $_GET["AutoFill_InId"]; } ?>">
      			<label for="InId">InId</label>
    		</div>
			<div class="form-floating mb-3 mt-3">
      			<input type="text" class="form-control" id="email" placeholder="Enter email" name="FormLink_Icon">
      			<label for="email">Icon</label>
    		</div>
			<input name='EditLinksId'>
  			<button type="submit" name="SubmitForm" value="Links" class="btn btn-lg  btn-primary w-100">Submit</button>
			<!--<div class="d-grid gap-2">
  				<button class="btn btn-primary" type="submit" name='SubmitForm'>SubmitForm</button>
  				
			  </div>-->
		</form>
	</div>
</main>


<!-- End : Your Page Source -->
<?php include("pages/inc/bs4_bottombar.php"); ?>
</body>
</html>