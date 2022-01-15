<?php
/*Задание на работу с несколькими таблицами
Тебе необходимо создать две таблицы — пользователь, паспорт пользователя.

Пользователь — имя, возраст, пол.
Паспорт — номер, серия, дата выдача.
На одного пользователя может быть один паспорт.
Создать форму, которая будет создавать пользователя сразу вместе с паспортом.
Т.е. если поля паспорта заполнены, то создать такую запись в базе, в соответствующей таблице.
Вывести всех пользователей в виде таблицы, с колонками — имя, возраст, пол, наличие паспорта (да/нет).
Усложнение — сделать постраничную навигацию пользователей. На одну страницу может быть показано 5 пользователей.
У списка должна быть возможность перейти на следующую, предыдущую, первую и последнюю страницы.*/

$dsn = 'mysql:host=localhost;port=3306;dbname=less23';
$name = 'root';
$password = '123123';
$connection = new PDO ($dsn, $name, $password);

$name = $_POST ['name'];
$age = $_POST ['age'];
$sex = $_POST ['sex'];

$number = $_POST ['number'];
$series = $_POST ['series'];
$data = $_POST ['data'];

//вставка записей в две таблицы

$addUser = 'INSERT INTO `user` (`ID`, `Name`, `Age`, `Sex` ) VALUES (NULL, :name, :age, :sex)';
$stm1 = $connection->prepare($addUser);
$stm1->bindValue(':name', $name);
$stm1->bindValue(':age', $age);
$stm1->bindValue(':sex', $sex);
$stm1->execute();

$userId = $connection->lastInsertId();

$addPassport = 'INSERT INTO `passport` (`user_ID`, `Number`, `Series`, `Data`) VALUES (:userId, :number, :series, :data)';
$stm2 = $connection->prepare($addPassport);
$stm2->bindParam(':userId', $userId);
$stm2->bindParam(':number', $number);
$stm2->bindParam(':series', $series);
$stm2->bindParam(':data', $data);
$stm2->execute();

//выбрать тех из списка у кого есть паспорт

$sgl = 'SELECT * FROM `user` RIGHT OUTER JOIN `passport` ON user.ID = passport.user_ID';

$stm = $connection->query($sgl);
$stm->execute();
$list = $stm->fetchAll(PDO::FETCH_ASSOC);

    echo '<h3>' . 'Список всех пользователей, у кого есть паспорта'. '</h3>';
    echo '<table width="400px" border="1" cellpadding="4">';
          echo '<tr>';
            echo '<th>' . 'Name' . '</th>';
            echo '<th>' . 'Age' . '</th>';
            echo '<th>' . 'Sex' . '</th>';
            echo '<th>' . 'Passport' . '</th>';
          echo '</tr>';

        foreach ($list as $v){
          echo '<tr>';
            echo '<td align="center">' . $v['Name'] . '</td>';
            echo '<td align="center">' . $v['Age'] . '</td>';
            echo '<td align="center">' . $v['Sex'] . '</td>';
            echo '<td align="center">' . 'ок' . '</td>';
          echo '</tr>';
        }
    echo '</table>';

    // постраничная навигация

    $link1 = "first page";
    $link2 = "next page";
    $link3 = "last page";

    echo '<br>'. '<a href="firstpage.php">' . $link1 . '</a></br>';
    echo '<a href="nextpage.php">' . $link2 . '</a></br>';
    echo '<a href="lastpage.php">' . $link3 . '</a></br>';

    echo '</br><a href="index.php"> Создать нового пользователя</button>';
