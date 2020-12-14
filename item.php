
<?php
$id = $_GET['id'];
include "engine/db_connect.php";
$sql = "SELECT * FROM `goods` WHERE `id_good` = $id";
$sqlComment = "SELECT * FROM `comments` WHERE `id_good` = $id";

$res = mysqli_query($connect, $sql);
$good = mysqli_fetch_assoc($res);

$resComment = mysqli_query($connect, $sqlComment);
//$comment = mysqli_fetch_assoc($resComment);
//print_r($good);


?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $good['title']?></title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script type="text/javascript" src="scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="scripts/fancybox/jquery.fancybox-1.3.4.css" media="screen">

        <script type="text/javascript">
            $(document).ready(function(){
                $("a.gallery").fancybox({
                    transitionIn: 'elastic',
                    transitionOut: 'elastic',
                    speedIn: 500,
                    speedOut: 500
                });
            });
        </script>



</head>

<body>
<div class="container"> <div class="header">
        <div class="logo"><a href="index.php"><img src="img/logo_crete.png" alt="LOGO"></a></div>
        <div class="menu">
            <?php
            include "components/main_menu.php";
            ?>
        </div>
    </div>
    <hr>
    <h1><?= $good['title']?></h1>
    <div class="small_block">
        <h3 class="h3_tovar">Описание товара</h3>
        <a class="gallery"  title="Просмотров: <?= $good['count']?>" href="<?= $good['imgBig']?>" target="_blank"><img class="img_tovar" src="<?= $good['imgSmall']?>" alt="5L_GREEN" height="200"></a>
        <p class="small_text"><?= $good['info']?></p>
        <a class="buy_now" href="#">Купить</a>
    </div>
    <h3 class="h3_tovar">Характеристики товара</h3>
    <div class="big_text">
        <p><?= $good['goodchar']?> <?= $good['price']?>€. </p>
        <ul>
            <li><?= $good['goodchar1']?></li>
            <li><?= $good['goodchar2']?></li>
            <li><?= $good['goodchar3']?></li>
        </ul>
        <p class="big_text">При оптовой поставке:</p>
        <table>
            <tr>
                <td>Количество товара в коробке</td>
                <td>Размер палетты</td>
                <td>Количество коробок в палетте</td>
            </tr>
            <tr>
                <td><?= $good['iteminbox']?></td>
                <td><?= $good['palletesize']?></td>
                <td><?= $good['boxinpallete']?></td>
            </tr>
            <tr>
                <td><?= $good['iteminbox1']?></td>
                <td><?= $good['palletesize1']?></td>
                <td><?= $good['boxinpallete1']?></td>
            </tr>
        </table>
    </div>
    <h3 class="h3_tovar">Доставка</h3>
    <p class="big_text"><?= $good['delivery']?></p>
    <hr>

    <h3 class="h3_tovar">Отзывы покупателей</h3>

<?php
    while ($comment = mysqli_fetch_assoc($resComment)):?>
        <ul><li style="background-color: #eaeaea"> Дата отзыва: <?= $comment['datecreate']?> Покупатель: <?= $comment['username']?></li></ul>
        <p class="big_text"><?= $comment['comment']?></p><br>
    <?php
endwhile;
?>

    <hr>
    <br>
    <form action="engine/db_crud.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="action" value="addcomment">
        <input type="hidden" name="id" value="<?= $good['id_good']?>">
        <p>Ваше имя</p>
        <input type="text" name="username">
        <p>Ваш отзыв</p>
        <textarea name="comment" cols="30" rows="10"></textarea>
        <input type="submit" value="Отправить">
    </form>
    <br>
    <hr>
    <div class="footer">
        &copy; Все права защищены.
    </div></div>
</body>
</html>
