<?php

$path = "../images/".$_FILES['photo']['name'];

$pathSmall = "../images/small/".$_FILES['photo']['name'];



if( copy($_FILES['photo']['tmp_name'], $path) ){
    move_uploaded_file($_FILES['photo']['tmp_name'], $pathSmall);
    header("Location: ../?page=gallery");
}
else {
    echo "Have a problem.";
}

