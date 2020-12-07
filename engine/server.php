<?php
//print_r($_FILES);

$path = "../images/".$_FILES['photo']['name'];



if(move_uploaded_file($_FILES['photo']['tmp_name'],$path)){
    header("Location: ../?page=gallery");
}
else {
    echo "Have a problem.";
};

$pathSmall = "../images/small".$_FILES['photo']['name'];

$smallImg = new Imagick($_FILES);
$smallImg->adaptiveResizeImage(150, 150);
copy($smallImg, $pathSmall);

?>
