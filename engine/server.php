<?php

//include "./engine/db_connect.php";

$path = "../images/".$_FILES['photo']['name'];

$pathSmall = "../images/small/".$_FILES['photo']['name'];

$fileName = $_FILES['photo']['name'];
$sqlPath = "images/".$fileName;
$sqlPathSmall = "images/small/".$fileName;
const SERVER = "localhost";
const DB = "gb_test";
const LOGIN = "root";
const PASS = "root";

$connect = mysqli_connect(SERVER,LOGIN,PASS,DB);

$sql = "INSERT INTO `goods`(`title`,`price`,`info`, `imgBig`, `imgSmall`, `count`) VALUES ('$fileName',1000,'', '$sqlPath', '$sqlPathSmall', 1)";
mysqli_query($connect, $sql);

if( copy($_FILES['photo']['tmp_name'], $path) ){

    move_uploaded_file($_FILES['photo']['tmp_name'], $pathSmall);
    header("Location: ../?page=gallery");

}
else {
    echo "Have a problem.";
}

