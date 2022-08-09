
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>KOPPEE - Coffee Shop HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
    

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">
    <script src="https://kit.fontawesome.com/b907c217d3.js" crossorigin="anonymous"></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_me.css">
</head>
<body>
<div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="index.php" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">KOPPEE</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="./index.php" class="nav-item nav-link active">Home</a>
                    <a href="index.php?act_h=about" class="nav-item nav-link">About</a>
                    <a href="index.php?act_h=service" class="nav-item nav-link">Service</a>
                  
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Cateloty</a>
                        <div class="dropdown-menu text-capitalize">
                            <?php
                                include '../moduels/connect.php';
                                $conn = connectdb();
                                include '../moduels/catelory.php';
                                $kq = getall_danhmuc();
                                foreach($kq as $dm){
                                    echo '
                                    <a href="index.php?act_h=reservation" class="dropdown-item">'.$dm['name_cate'].'</a>
                                    ';
                                }
                            ?>
                            
                        </div>
                    </div>
                    <?php 
                    echo '<div class="helo" >'.$_SESSION['username'].'</div>';
                    ?>
                    <a class="logout" href="../moduels/logout.php">logout</a>
                </div>
            </div>
        </nav>
    </div>
</body>
</html>