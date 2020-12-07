<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Каталог товаров</title>
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen">
	<script type="text/javascript" src="fancybox/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="fancybox/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("a.gallery, a.iframe").fancybox();
		
url = $("a.modalbox").attr('href').replace("for_spider","content2");
$("a.modalbox").attr("href", url);	
$("a.modalbox").fancybox(
{								  
			"frameWidth" : 400,	 
			"frameHeight" : 400 
								  
});

			$("a.gallery2").fancybox(
			{						
            "padding" : 20, // отступ контента от краев окна
            "imageScale" : false, // Принимает значение true - контент(изображения) масштабируется по размеру окна, или false - окно вытягивается по размеру контента. По умолчанию - TRUE
			"zoomOpacity" : false,	// изменение прозрачности контента во время анимации (по умолчанию false)
			"zoomSpeedIn" : 1000,	// скорость анимации в мс при увеличении фото (по умолчанию 0)
			"zoomSpeedOut" : 1000,	// скорость анимации в мс при уменьшении фото (по умолчанию 0)
			"zoomSpeedChange" : 1000, // скорость анимации в мс при смене фото (по умолчанию 0)
			"frameWidth" : 700,	 // ширина окна, px (425px - по умолчанию)
			"frameHeight" : 600, // высота окна, px(355px - по умолчанию)
			"overlayShow" : true, // если true затеняят страницу под всплывающим окном. (по умолчанию true). Цвет задается в jquery.fancybox.css - div#fancy_overlay 
			"overlayOpacity" : 0.8,	 // Прозрачность затенения 	(0.3 по умолчанию)
			"hideOnContentClick" :false, // Если TRUE  закрывает окно по клику по любой его точке (кроме элементов навигации). Поумолчанию TRUE		
			"centerOnScroll" : false // Если TRUE окно центрируется на экране, когда пользователь прокручивает страницу		
				
			});
		
		$("#menu a, .anim").hover( function() {
        $(this).animate({"paddingLeft" : "10px"}, 300)},
	   function() {$(this).animate({"paddingLeft" : "0"}, 300);
});

$("a.iframe").fancybox(
{								  
			"frameWidth" : 800,	 // ширина окна, px (425px - по умолчанию)
			"frameHeight" : 600 // высота окна, px(355px - по умолчанию)
								  
});

		
		});
	</script>
	
</head>

<body>
  <div class="container"><div class="header">
  <div class="logo"><a href="index.html"><img src="img/logo_crete.png" alt="LOGO"></a></div>
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
