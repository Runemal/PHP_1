<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Каталог товаров</title>
    <link rel="stylesheet" href="style.css">

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
  <div class="container"><div class="header">
  <div class="logo"><a href="#"><img src="img/logo_crete.png" alt="LOGO"></a></div>
   <div class="menu">

   <?php
        include "components/main_menu.php";
    ?>

<!--
        <a href="#">Главная</a>
        <a href="#">Каталог</a>
        <a href="#">Загрузка</a>
-->
    </div>
    </div>
    <hr>
<!--    <h1>Каталог</h1>-->
    <div class="catalog">

    <?php
        include "components/gallery.php";
    ?>
    
<!--
        <a href="vios.html"><img src="img/vios.jpg" alt="VIOS" width="150"><br>Подробнее</a>
        <a href="carob.html"><img src="img/carob.jpg" alt="CAROB" height="193"><br>Подробнее</a>
        <a href="5l_green.html"><img src="img/5l_green.jpg" alt="5L_GREEN" width="140"><br>Подробнее</a>
-->
    </div>
    <div></div>
    <br>
    <hr>
    <div class="footer">
        &copy; Все права защищены.
    </div></div>
</body>

</html>


<!--
jquery fancybox


Добавить форму для загрузок картинок, что бы она загружалась в превью папку и в оригинал.
-->
