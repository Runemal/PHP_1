<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Каталог товаров</title>
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
  <div class="container"><div class="header">
  <div class="logo"><a href="#"><img src="img/logo_crete.png" alt="LOGO"></a></div>
   <div class="menu">

   <?php
        include "components/main_menu.php";
    ?>

    </div>
    </div>
    <hr>

    <div class="catalog">

    <?php
        include "components/gallery.php";
    ?>

    </div>
    <div></div>
    <br>
    <hr>
    <div class="footer">
        &copy; Все права защищены.
    </div></div>
</body>

</html>

