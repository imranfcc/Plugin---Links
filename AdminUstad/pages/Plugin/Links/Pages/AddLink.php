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


echo Welcome to my Add Link Page
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Status</label>
    <input name="Status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Status">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
     Title</label>
    <input name="Title" class="form-control" id="exampleInputPassword1" placeholder="Title">
  </div>
  <div class="form-group">
     Link</label>
    <input name="Link" class="form-control" id="exampleInputPassword1" placeholder="Link">
  </div>
  <div class="form-group">
     Target</label>
    <input name="Target" class="form-control" id="exampleInputPassword1" placeholder="Target">
  </div>
  <div class="form-group">
     InId</label>
    <input name="InId" class="form-control" id="exampleInputPassword1" placeholder="InId">
  </div>
  <div class="form-group">
     Icon</label>
    <input name="Icon" class="form-control" id="exampleInputPassword1" placeholder="Icon">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<!-- End : Your Page Source -->
<?php include("pages/inc/bs4_bottombar.php"); ?>
</body>
</html>