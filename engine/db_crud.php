<?php

//include "./engine/db_connect.php";

const SERVER = "localhost";
const DB = "gb_test";
const LOGIN = "root";
const PASS = "root";

$connect = mysqli_connect(SERVER,LOGIN,PASS,DB);

$action = $_GET['action'];
$id = $_GET['id'];


if ($action == "updatecount"){
    $getCount = "SELECT `count` FROM `goods` WHERE `id_good` = $id";
    $count = mysqli_query($connect, $getCount);

    $count++;
    $sql = "update goods set count = $count where id_good = $id";
    mysqli_query($connect, $sql);
}