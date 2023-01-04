<?php
namespace P\Links;



function lists($Get){
  global $con; 
  $sql = "SELECT * FROM `sh_pl_links`  WHERE `InId`='$Get[Id]'"; //
  $result = $con->query($sql);
  return $result;
}
function Id_to_Name($Id){
  global $con;
  $sql = "SELECT * FROM `sh_pl_links`  WHERE `Id`='$Id'"; //
  $result = $con->query($sql);
  $row = $result->fetch_assoc();
  $return=$row["Title"];
  return $return;

}
function Insert($Get){
  global $con;
  // Insert not complete
  
  $sql = "INSERT INTO `sh_pl_links` (`Status`, `Title`, `Link`)
  VALUES ('Enable', 'Azhar', 'Links')";
  $con->query($sql);
}

?>
