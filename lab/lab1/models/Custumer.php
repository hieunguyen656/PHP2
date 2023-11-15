<?php
require_once "models/db.php";

function getCustumer(){
  $sql ="SELECT * FROM custumer";
  return getData($sql);
}
function add($ten_kh, $tuoi)  {
  $sql="insert into custumer values (null, '$ten_kh', '$tuoi')";
  return getData($sql);
}
// function edit($id){
//   $sql = "select * from custumer where id = '$id'";
//   return pdo_query_one($sql);
// }
function update($ten_kh, $tuoi, $id){
  $sql = "update custumer set ten_kh = '$ten_kh', tuoi = '$tuoi' where id = '$id'";
  return getData($sql);
}
function delete($id){
  $sql = "delete from custumer where id ='$id'";
  return getData($sql);
}