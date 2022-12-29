<?php 
$CreateSQL_Table="sh_pl_links"; $tableColum=null;
$result = $con->query("CREATE TABLE IF NOT EXISTS `$CreateSQL_Table` (`Id` int(20) NOT NULL AUTO_INCREMENT, PRIMARY KEY (`Id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
$result = mysqli_query($con,"SHOW COLUMNS FROM `$CreateSQL_Table`");
while($row = mysqli_fetch_array($result)){
    $ClickColum = isset($ClickColum) ? $ClickColum : $row['Field'];
    $tableColum[]=$row['Field'];
}
if(!in_array("Status", $tableColum)){ $result = $con->query("ALTER TABLE `$CreateSQL_Table` ADD `Status` ENUM('Enable', 'Disable') NOT NULL;"); }
if(!in_array("Title", $tableColum)){ $result = $con->query("ALTER TABLE `$CreateSQL_Table` ADD `Title` VARCHAR(255) NOT NULL;"); }
if(!in_array("Link", $tableColum)){ $result = $con->query("ALTER TABLE `$CreateSQL_Table` ADD `Link` VARCHAR(255) NOT NULL;"); }
if(!in_array("Target", $tableColum)){ $result = $con->query("ALTER TABLE `$CreateSQL_Table` ADD `Target` VARCHAR(255) NOT NULL;"); }
if(!in_array("InId", $tableColum)){ $result = $con->query("ALTER TABLE `$CreateSQL_Table` ADD `InId` VARCHAR(255) NOT NULL;"); }
if(!in_array("Icon", $tableColum)){ $result = $con->query("ALTER TABLE `$CreateSQL_Table` ADD `Icon` VARCHAR(255) NOT NULL;"); }
 
?>
