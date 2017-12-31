<?php
    include 'Student.php';

    $mypdo = new MyPDO('mysql:host=localhost;dbname=admission2018;charset=utf8');
    $student = new Student($mypdo);
    $list = $student->findAll();

    echo "<b> Displaying All Records </b> <br> <br>";
    foreach ($list as $row) {
        echo "<b>Fullname </b>".$row['FULLNAME'];
        echo "<br/>";
        echo "<b style='color:blue'>Email ID </b>" . $row['EMAIL'];    
        echo "<br/>";
    }