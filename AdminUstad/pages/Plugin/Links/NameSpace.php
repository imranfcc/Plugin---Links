<?php
namespace P\Links;

function lists($Get){
  global $con; 
  $sql = "SELECT * FROM `sh_pl_links`  WHERE `Id`='$Get[Id]'"; //
  $result = $con->query($sql);
  return $result;
}
?>
