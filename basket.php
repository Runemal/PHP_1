<?php
session_start();
$userID = session_id();
//echo $userID;
//include "components/basketlist.php";
include "engine/db_connect.php";
$sql = "SELECT `id_basket`, `id_good`, `good_count` FROM `basket` WHERE `id_user` = '$userID'";

$res = mysqli_query($connect, $sql);



?>
    <h1>Корзина</h1>

    <table align="center" style="text-align: center;" border="1" width="900">
        <tr>
            <th>Фото товара</th>
            <th>Название товара</th>
            <th>Количество товара</th>
            <th>Стоимость товара</th>
            <th>Действие</th>
        </tr><?php
        while ($data = mysqli_fetch_assoc($res)):

            $dataId = $data['id_good'];
            $itemSql = "SELECT `title`, `price`, `imgSmall` FROM `goods` WHERE `id_good` = '$dataId'";
            $itemRes = mysqli_query($connect, $itemSql);
            $itemData = mysqli_fetch_assoc($itemRes);
            ?>
            <tr>
                <td>
                    <a onclick="count(<?= $data['id_good']?>)" class="gallery" href="item.php?id=<?= $data['id_good']?>"><img height="150" src="<?= $itemData['imgSmall']?>" alt="IMG"></a><br>
                </td>
                <td>
                    <?= $itemData['title']?>
                </td>
                <td>
                    <?= $data['good_count']?>
                </td>
                <td>
                    <?= $data['good_count']*$itemData['price'] ?>
                </td>
                <td>

                    <form  action="engine/db_crud.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="action" value="delitem">
                        <input type="hidden" name="id" value="<?= $data['id_basket']?>">
                        <input style="width: auto;" type="submit" value="Удалить">
                    </form>


                </td>
            </tr>
        <?php
        endwhile;
        ?>
    </table>



