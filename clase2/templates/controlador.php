<?php
$opcion = $_GET['op'];
switch($opcion){
    case 1:
        include('a1.php');
        break;
    case 2:
        include('a2.php');
        break;
    case 3:
        include('a3.php');
        break;
    case 4:
        include('a4.php');
        break;
    case 5:
        include('a5.php');
        break;
    default:
    include('a1.php');
}
?>