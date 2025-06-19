<?php
        require_once 'include/db.php';
        require_once 'include/function.php';
        $students = students($link);
        // echo "<pre>";
        // print_r($students);
        // echo "</pre>";
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
        <table>
                <thead>
                        <tr>
                                <th>№ п/п</th>
                                <th>ФИО</th>
                                <th>Дата рождения</th>
                                <th>Пол</th>
                                <th>Телефон</th>
                                <th>Адрес</th>
                                <th>Действия</th>
                        </tr>
                </thead>
                <tbody>
                        <?php foreach($students as $student): ?>
                                <tr>
                                        <td><?=$student['id']?>
                                        <td><?=$student['surname']?>  <?=$student['name']?>  <?=$student['patronymic']?>
                                        <td><?=$student['dob']?></td>
                                        <td>
                                                <?php
                                                        if ($student['sex'] == 0){
                                                                echo 'м';
                                                        }
                                                        else{
                                                                echo 'ж';
                                                        }
                                                ?>
                                        </td>
                                        <td><?=$student['phone']?></td>
                                        <td><?=$student['address']?></td>
                                        <td><a href="edit.php"><button type="button">Редактировать</button></a> <a href="edit.php"><button type="button">Удалить</button></a>
                                </tr>
                        <?php endforeach; ?>
                </tbody>
        </table>
        <br>
        <a href="new_student.php"><button type="button">Новая запись</button></a>
</body>
</html>