<?php
switch ($_GET['page']) {
    case 'dashboard':
        include "../views/dashboard.php";
        break;

    case 'management-data':
        include "../views/tables.php";
        break;

    default:
        # code...
        break;
}