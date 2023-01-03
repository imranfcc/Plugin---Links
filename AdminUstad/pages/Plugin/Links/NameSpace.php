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
?>
