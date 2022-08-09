<?php
function getall_product(){
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT id, name_pro, name_cate,visible FROM tbl_product");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt ->fetchAll();
  return $kq;
}

?>