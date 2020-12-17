<?php

switch($_GET['page']){
    case "load":
        include "drivers/form.php";
        break;
     case "gallery":
        include "drivers/scan.php";
        break;
    case "basket":
        include "basket.php";
        break;
    default:
        include "drivers/scan.php";
}

?>