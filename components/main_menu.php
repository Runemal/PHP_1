<?php

$menu = ["Каталог"=>"./?page=gallery", "Корзина"=>"./?page=basket", "Загрузка"=>"./?page=load",];
?>

<?php
foreach($menu as $title => $link):?>
    <a href="<?= $link?>"><?= $title?></a>
<?php
endforeach;
?>