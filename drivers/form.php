<h1>Форма загрузки</h1>

<form action="engine/db_crud.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="action" value="addgood">
    <p>Название</p>
    <input type="text" name="title">
    <p>Стоимость</p>
    <input type="text" name="price">
    <p>Информация</p>
    <textarea name="info" cols="30" rows="5"></textarea>
    <p>Свойства</p>
    <textarea name="goodchar" cols="30" rows="5"></textarea>
    <p>Особое свойство 1</p>
    <input type="text" name="goodchar1">
    <p>Особое свойство 2</p>
    <input type="text" name="goodchar2">
    <p>Особое свойство 3</p>
    <input type="text" name="goodchar3">
    <p>Количество в коробке</p>
    <input type="text" name="iteminbox">
    <p>Размер паллеты</p>
    <input type="text" name="palletesize">
    <p>Количество коробок в паллете</p>
    <input type="text" name="boxinpallete">
    <p>Количество в коробке 1</p>
    <input type="text" name="iteminbox1">
    <p>Размер паллеты 1</p>
    <input type="text" name="palletesize1">
    <p>Количество коробок в паллете 1</p>
    <input type="text" name="boxinpallete1">
    <p>Доставка</p>
    <textarea name="delivery" cols="30" rows="5"></textarea>
    <p>Изображение</p>
    <label for="">
        Выберите файл
    </label>
    <input type="file" accept="image/*" name="photo"><br><br>
    <input type="submit" value="Добавить">
</form>
