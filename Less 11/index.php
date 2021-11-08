<?php

echo '<a href="myform.html">Форма для заполнения (нажмите для продолжения)</a>';
echo '<br/><br/>';

$file0 = file_get_contents('users.txt');
$users = explode("\r\n", $file0); // "\r" убирает лишние артефакты из строк

$n = $_POST['Name'];
$s = $_POST['Surname'];
$a = $_POST['Age'];
$g = $_POST['Gender'];

if (strlen($n)>0&&strlen($s)>0&&strlen($a)>0&&strlen($g)>0) { //если будетут пустые ячейки - исключить
    //$users[] = $n . ';' . $s . ';' . $a . ';' . $g;
    $users[] = sprintf("%s;%s;%s;%s", $n, $s, $a, $g); //этот вариант написания лучше, чем в стоке 15
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