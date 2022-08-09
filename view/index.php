<?php
session_start();
?>
<?php
if(isset($_SESSION['username'])&& ($_SESSION['username'])!="admin@admin"){
    include './header_isset-log.php' ;
}
elseif(isset($_SESSION['username']) && ($_SESSION['username']) == "admin@admin"){
    include './header_admin-log.php';
}
else{
    include './header.php' ;
}
if(isset($_GET['act_h'])){
    $act_h = $_GET['act_h'];
    switch($act_h){
        case 'about':
            include './about.php';
            break;
        case 'service':
            include './service.php';
            break;
        case 'menu':
            include './menu.php';
            break;
        case 'reservation':
            include './reservation.php';
            break;
        case 'testimonial':
            include './testimonial.php';


    }
}
include './home.php';
// inclue main page with php
// require './home.php';
// require './footer.php';
?>