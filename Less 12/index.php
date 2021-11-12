<?php

  echo '<a href="myform.html"><i>Форма для заполнения (нажмите для продолжения)</i></a>';
  echo '<br/><br/>';

 if (array_key_exists('attach', $_FILES) && $_FILES['attach']['error'] == 0) {

    if ($_FILES ['attach']['type'] == 'text/plain') {
        move_uploaded_file($_FILES ['attach'] ['tmp_name'], $_FILES ['attach'] ['name']);

          echo '<br /> <p style="color: blue">Поздравляем, файл добавлен. Список всех файлов ниже:</p>';
          echo '<br />';

    } else {
        echo '<br /><p style="color: red"><strong>ОШИБКА:</strong> файл не тектового формата,
              перейдите на <a href="myform.html"><i style="color: red">форму для заполнения</i></a><br />
               и вложите текстовый файл co списком пользователей.</p>';
    }
 }

 $file0 = file_get_contents('users.txt'); // основной файл, куда добавляются новые записи
 $users = explode("\n", $file0);

 $n = $_POST['Name'];
 $s = $_POST['Surname'];
 $a = $_POST['Age'];
 $g = $_POST['Gender'];

 if (strlen($n) > 0 && strlen($s) > 0 && strlen($a) > 0 && strlen($g)>0) { //если будетут пустые ячейки - исключить
    $users[] = sprintf("%s;%s;%s;%s", $n, $s, $a, $g);
    file_put_contents('users.txt', implode("\n", $users));
 }

 $user = [];
 foreach ($users as $v) {
    if (strlen($v) > 0) {  //подсчет символов в строке, если будет пустая строка - ее исключить
        $us = explode(';', $v);
        $user [] = $us;
    }
 }

 if (array_key_exists('file', $_GET)) { //проверить "есть ли этот элемент в массиве"
    $file = $_GET['file'];
    $z = file_get_contents($file);
    $zz = explode("\n", $z);
    $user = [];
    foreach ($zz as $v) {
        if (strlen($v) > 0) {
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
  echo '<br />';
 }

 foreach (glob('*.txt') as $file) {
    echo sprintf("<a href=/index.php?file=%s>%s</a><br/>", $file, $file); //выводить ссылки на все файлы *.txt
 }

 echo '<br />';