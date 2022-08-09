<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <h1>Quản lý danh mục</h1>
        <form action="admin.php?act=addm" method="post">
            <input type="text" name="name_cate" value="">
            <input type="submit" value="Thêm mới" name="themmoi">
        </form>
        <br>
        <br>
        <table>
           
            <tr>
                <th>STT</th>
                <th>Tên Danh mục</th>
                <th>Độ ưu tiên</th>
                <th> Trạng thái</th>
            </tr>
            <?php
            
            $i=1;
            foreach($kq as $dm){
                if ($dm['visible'] ==1 ){
                    $visible = "Đang kích khoạt";
                } else
                 $visible = "Ngưng kích hoạt";
                echo '
                <tr>
                    <th>'.$i.'</th>
                    <th>'.$dm['name_cate'].'</th>
                    <th>'.$dm['uu_tien'].'</th>
                    <th>'.$visible.'</th> <br>
                    <th><a href="admin.php?act=updateform&id='.$dm['id'].'"> Sửa</a>  |<a href="admin.php?act=deldm&id='.$dm['id'].'"> Xóa</a></th>
                 </tr>';
                 $i++;
            }
            ?>
           
        </table>
    </div>
</body>
</html>