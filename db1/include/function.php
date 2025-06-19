<?php
    function students($link){
    $sql = "SELECT * FROM students";
    $result = mysqli_query($link, $sql);
    $students = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $students;
    }

    function new_student($data,$link){
        $surname = $data ['surname'];
        $name = $data ['name'];
        $patronymic = $data ['patronymic'];
        $dob = $data ['dob'];
        $sex = $data ['sex'];
        $phone = $data ['phone'];
        $address = $data ['address'];

        // $sql ="INSER INTO students SET 'surname'=$surname, 'name'=$name, 'patronymic'=$patronymic, 'dob'=$dob, 'sex'=$sex, 'phone'=$phone, 'address'=$address;
        $sql = "INSERT INTO `students` (`surname`, `name`, `patronymic`, `dob`, `sex`, `phone`, `address`)
            VALUES ('$surname', '$name', '$patronymic', '$dob', '$sex', '$phone', '$address')";
        $result = mysqli_query($link, $sql);
        if($result){
            echo "ok";
            ob_start();
            header ('Location: '. 'http://borodulin.kv/db1/student.php');
            ob_end_flush();
        }
    }
?>