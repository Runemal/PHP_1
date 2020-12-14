<?php

$menu = ["Главная"=>"./?page=index","Каталог"=>"./?page=gallery","Загрузка"=>"./?page=load",];
?>

<?php
foreach($menu as $title => $link):?>
    <a href="<?= $link?>"><?= $title?></a>
<?php
endforeach;
?>