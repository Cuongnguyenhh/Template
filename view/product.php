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
        <h1>Quản lý sản phẩm</h1>
        <form action="../moduels/themdm.php" method="get">
            <input type="text" name="name">
            <input type="submit" value="Thêm mới" name="themmoi">
        </form>
        <br>
        <br>
        <table>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Tên danh mục</th>
                <th> Trạng thái</th>
            </tr>
            <?php
            
            $i=1;
            foreach($kq as $dm){
                echo '
                <tr>
                    <th>'.$i.'</th>
                    <th>'.$dm['name_pro'].'</th>
                    <th>'.$dm['name_cate'].'</th>
                    <th>'.$dm['visible'].'</th>
                 </tr>';
                 $i++;
            }
            ?>
           
        </table>
    </div>
</body>
</html>