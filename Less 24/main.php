<?php

$users = [
    ['log' => 'admin',   'pas' => 123123],
    ['log' => 'qwerty',  'pas' => 777777],
    ['log' => 'qwerty',  'pas' => 111111],
    ['log' => 'amoguus',   'pas' => 139005],
];

$filepass= file_get_contents('passwordform.html');

$logout = $_POST['login'];
$passwout = $_POST['password'];

session_start();

foreach ($users as $v) {
    if ($logout == $v['log'] && $passwout == $v['pas']) {
        $_SESSION ['us'] = true;

    }
}
if ($_SESSION ['us'] == true) {
       include 'form.php';
} else {
      echo "<a style='color: orangered'> логин или пароль не верный, повторите ввод.</a>";
      echo '</br>' . '<a href="index.php">Форма для заполнения (нажмите для продолжения)</a>';
}
