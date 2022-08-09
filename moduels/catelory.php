<?php
function getall_danhmuc(){
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT id, name_cate, uu_tien,visible FROM tbl_cate");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt ->fetchAll();
  return $kq;
}
function deldm($id){
  $conn = connectdb();
  $sql = "DELETE FROM tbl_cate WHERE id=".$id;
  $conn->exec($sql);
}
function getone_dm($id) {
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT id, name_cate, uu_tien,visible FROM tbl_cate WHERE id=".$id);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt ->fetchAll();
  return $kq;
}
function update_dm($id,$name_cate){
  $conn = connectdb();
  $sql = "UPDATE tbl_cate SET name_cate='".$name_cate."' WHERE id=".$id;
  // Prepare statement
  $stmt = $conn->prepare($sql);
  // execute the query
  $stmt->execute();
}





function themdm($name_cate){
   $conn =  connectdb();
   $sql = "INSERT INTO tbl_cate (name_cate)
    VALUES ('".$name_cate."')";
   $conn->exec($sql);

}

?>