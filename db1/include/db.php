<?php
    $link = mysqli_connect ('localhost', 'borodulin', 'qumiyEMofo1AkoBi7AQIbed5TOh34A', 'borodulin');

    if(mysqli_connect_errno()){
        echo 'Ошибка в подключении к базе данных ('. mysqli_connect_errno().'):'.mysqli_connect_error();
        exit();
    }
?>