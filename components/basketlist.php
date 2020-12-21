<?php
include "./engine/db_connect.php";
$sql = "SELECT `id_basket`, `id_good`, `good_count` FROM `basket` WHERE `id_user` = '$userID'";

$res = mysqli_query($connect, $sql);


while ($data = mysqli_fetch_assoc($res)):?>
    <a onclick="count(<?= $data['id_good']?>)" class="gallery"  title="Просмотров: <?= $data['count']?>" href="item.php?id=<?= $data['id_good']?>"><img height="150" src="<?= $data['imgSmall']?>" alt="IMG"><br>Подробнее</a>
<?php
endwhile;
?>