

<!--<a href="admin.php?edit=<?php echo $row['Id']; ?>" class="option-btn"> <i class="fas fa-edit"></i> update </a>-->



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

 <i class="fas fa-edit"></i> update </a>
<?php
  if($con->query($sql)===TRUE){
    header("Location: /".$AdminFolder."/Plugin/".$Plugin."/dashboard?ShowInId=".$ValueInId);
} 
   $sql = mysqli_query($con,"UPDATE `sh_pl_links` SET `Title`='webcam' WHERE `Id`='5'");
   ?>
		<form action='' Method='POST' class=" pt-3">
			<div class="form-floating">
  				<select class="form-select" id="sel1" name="FormLink_Status">
   					<option>Enable</option>
   					<option>Disable</option>
  				</select>
  				<label for="sel1" class="form-abel">Select list (select one):</label>
			</div>
			<div class="form-floating mb-3 mt-3">
      			<input name="FormLink_Title" class="form-control" id="email" placeholder="Type Title"  required>
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
			<div class="form-floating mb-3 mt-3 d-none">
      			<input name="FormLink_InId" class="form-control"  placeholder"InId" value="<?php if(isset($_GET["AutoFill_InId"])){ echo $_GET["AutoFill_InId"]; } ?>">
      			<label for="InId">InId</label>
    		</div>
			<div class="form-floating mb-3 mt-3">
      			<input type="text" class="form-control" id="email" placeholder="Enter email" name="FormLink_Icon">
      			<label for="email">Icon</label>
    		</div>
  			<button type="submit" name="SubmitForm" value="Links" class="btn btn-lg  btn-primary w-100">Submit</button>
			
		</form>
	</div>
</main>
