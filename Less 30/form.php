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

echo '<a href="myform.html">Форма для заполнения (нажмите для продолжения)</a>';
echo '<br/><br/>';

$file0 = file_get_contents('users.txt');
$users = explode("\r\n", $file0); // "\r" убирает лишние артефакты из строк

$n = $_POST['Name'];
$s = $_POST['Surname'];
$a = $_POST['Age'];
$g = $_POST['Gender'];

if (strlen($n) > 0 && strlen($s) > 0 && strlen($a) > 0 && strlen($g)>0) { //если будут пустые ячейки - исключить
        $users[] = sprintf("%s;%s;%s;%s", $n, $s, $a, $g);
        file_put_contents('users.txt', implode("\n", $users));
}

$file1 = file_get_contents('users.txt');
$users1 = explode("\n", $file1);

$user = [];
foreach ($users1 as $v) {
    if (strlen($v) > 0) {  //подсчет символов в строке, если будет пустая строка - ее исключить
        $us = explode(';', $v);
        $user [] = $us;
    }
}
echo '<title>Массив юзеров</title>';

     echo '<table border="1">';
        echo '<td><strong>' . $user [0][0] . '</strong></td>'; //столбец
        echo '<td><strong>' . $user [0][1] . '</strong></td>';
        echo '<td><strong>' . $user [0][2] . '</strong></td>';
        echo '<td><strong>' . $user [0][3] . '</strong></td>';
         for ($i = 1; $i < count($user); $i++) {
            echo '<tr>'; // строка
            echo '<td><i>' . $user [$i][0] . '</i></td>';
            echo '<td><i>' . $user [$i][1] . '</i></td>';
            echo '<td><i>' . $user [$i][2] . '</i></td>';
            echo '<td><i>' . $user [$i][3] . '</i></td>';
            echo '</tr>';
         }
     echo '</table>';
} else {
    echo "<a style='color: orangered'> логин или пароль не верный, повторите ввод.</a></br>";
    echo '</br><a href="index.php">Необходимо пройти авторизацию (нажмите для продолжения)</a>';
}
