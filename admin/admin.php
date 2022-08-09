<?php
session_start();
ob_start();
include "../view/header_admin.php";
include '../moduels/connect.php';
connectdb();
include '../moduels/catelory.php';
include '../moduels/product.php';
getall_danhmuc();
if(isset($_GET['act'])){
    $act =$_GET["act"];
    switch($act){
      case 'danhmuc' :
        $kq = getall_danhmuc();
        include '../view/danhmuc.php';
        break;
      case 'sanpham':
        $kq = getall_product();
        include '../view/product.php';
        break;
      case 'deldm':
        if(isset($_GET['id'])){
          $id = $_GET['id'];
          deldm($id);
        }
        $kq = getall_danhmuc();
        include '../view/danhmuc.php';
        break;
      case 'updateform':
          if(isset($_GET['id'])){
          $id = $_GET['id'];
          $kq1= getone_dm($id);
          $kq = getall_danhmuc();
          include '../view/updateform.php';
        }
        if(isset($_POST['id'])){
          $id = $_POST['id'];
          $name_cate=$_POST['name_cate']; 
          update_dm($id,$name_cate);
          $kq = getall_danhmuc();
          include '../view/danhmuc.php';
        }
        break;
        case 'addm':
          if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
            $name_cate = $_POST['name_cate'];
            themdm($name_cate);
            $kq = getall_danhmuc();
            include "../view/danhmuc.php";
          }
          break;
    }
  }
?>