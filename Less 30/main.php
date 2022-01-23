<?php

$users = [
    ['log' => '21232f297a57a5a743894a0e4a801fc3', 'pas' => '4297f44b13955235245b2497399d7a93'],
    ['log' => 'd8578edf8458ce06fbc5bb76a58c5ca4', 'pas' => 'f63f4fbc9f8c85d409f2f59f2b9e12d5'],
];

$logout = md5($_POST['login']);
$passwout = md5($_POST['password']);

session_start();

foreach ($users as $v) {
    if ($logout == $v['log'] && $passwout == $v['pas']) {
        $_SESSION ['us'] = true;

    }
}
if ($_SESSION ['us'] == true) {
       include 'form.php';
} else {
      echo "<a style='color: orangered'> логин или пароль не верный, повторите ввод.</a></br>";
      echo '</br><a href="index.php">Необходимо пройти авторизацию (нажмите для продолжения)</a>';
}
