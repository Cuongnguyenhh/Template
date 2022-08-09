<?php
function themdm(){
    $name = $_GET['name'];
   $conn =  connectdb();
   $sql = "INSERT INTO tbl_cate (id, name, uu_tien, visible)
    VALUES ('', '$name', '2','1')";
}
?>