<?php

    //include("pages/inc/Header.php"); 
         $newid = $_GET['id'];
         print_r($newid);
        //if($con->query($sql)===TRUE){
        //header("Location: /".$AdminFolder."/Plugin/".$Plugin."/dashboard?ShowInId=".$ValueInId);

    $sql = "DELETE FROM `sh_pl_links` WHERE `Id`='$newid'";
    $result = mysqli_query($con,$sql) or die ("connection fail");
    header('Location: https://www.imrantest.sidhosting.net/AdminUstad/Plugin/Links/dashboard');
    if($result){
        echo"<script>alert('This is Deleted')</script>";
       }
       else{
        ""
       }
    
?>