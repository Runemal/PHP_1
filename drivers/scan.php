<h1>Каталог</h1>
<div id="wrap">
<?php


    $images = scandir("images/small");
    
    for($i=2;$i<count($images);$i++){?>
        <a class="gallery" rel="group" href="?page=gallery&file=<?= $images[$i]?>"><img height="150" src="images/small/<?= $images[$i]?>" alt="IMG"><br>Подробнее</a>
        <?php
        }

?>
</div>