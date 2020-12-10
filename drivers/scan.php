<h1>Каталог</h1>

<script>
    function count(id){
        $.ajax({
            type: "GET",
            url: "./engine/db_crud.php",
            data: "action=updatecount&id="+id,
            // success: function(answer){
            //     $("h2").html(answer);
            // }
        });
    }
</script>

<?php

include "./engine/db_connect.php";

$sql = "select * from goods order by count desc ";

$res = mysqli_query($connect, $sql);


while ($data = mysqli_fetch_assoc($res)):?>
    <a onclick="count(<?= $data['id_good']?>)" class="gallery" target="_blank" title="Просмотров: <?= $data['count']?>" href="<?= $data['imgBig']?>"><img height="150" src="<?= $data['imgSmall']?>" alt="IMG"><br>Подробнее</a>
<?php
endwhile;
?>