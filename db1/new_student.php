<?php
include "include/db.php";
include "include/function.php";
        if(count($_POST) > 0){
                // Сохранить в БД
                new_student($_POST, $link);
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

<form method="POST"
        p>Введите свою фамилию:<br>
        <input type="text" name="surname">
        <p>Введите своё имя:<br>
        <input type="text" name="name">
        <p>Введите своё отчество:<br>
        <input type="text" name="patronymic">
        <p>Ваша дата рождения:<br>
        <input type="date" name="dob">
        <p>Ваш пол:<br>
        <p>Мужской: <input type="radio" name="sex" value="0">
        <p>Женский: <input type="radio" name="sex" value="1">
        <p>Номер телефона:<br>
        <input type="number"name="phone">
        <p>Ваш адрес:<br>
        <input type="text" name="address"
        br>
        <p><br>
        <input type="submit">
</form>



</body>
</html>