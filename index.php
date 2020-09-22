<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
include('Students.php');
$students = array();

$first = new Students();
$first->surname = "Doe";
$first->first_name = "John";
$first->add_email('home','john@doe.com');
$first->add_email('work','jdoe@mcdonalds.com');
$first->status = "Freshman";
$first->add_grade(65);
$first->add_grade(75);
$first->add_grade(55);
$students['j123'] = $first;

$second = new Students();
$second->surname = "Einstein";
$second->first_name = "Albert";
$second->add_email('home','albert@braniacs.com');
$second->add_email('work1','a_einstein@bcit.ca');
$second->add_email('work2','albert@physics.mit.edu');
$second->status = "Freshman";
$second->add_grade(95);
$second->add_grade(80);
$second->add_grade(50);
$students['a456'] = $second;

$third = new Students();
$third->surname = "yichang";
$third->first_name = "Chen";
$third->add_email('home','123456789@qq.com');
$third->add_email('work1','a_einstein@bcit.ca');
$third->add_email('work2','albert@physics.mit.edu');
$third->status = "Freshman";
$third->add_grade(95);
$third->add_grade(80);
$third->add_grade(60);
$students['a789'] = $third;

$fouth = new Students();
$fouth->surname = "Dinghao";
$fouth->first_name = "Yin";
$fouth->add_email('home','1845491655@qq.com');
$fouth->add_email('work1','a_einstein@bcit.ca');
$fouth->add_email('work2','albert@physics.mit.edu');
$fouth->status = "Freshman";
$fouth->add_grade(95);
$fouth->add_grade(80);
$fouth->add_grade(80);
$students['a369'] = $fouth;



foreach($students as $student)
echo $student->toString();
ksort($students);
?>
    </body>
</html>
