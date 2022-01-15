<?php
 $connection = new PDO('mysql:host=localhost; dbname=less23', 'root', "123123");

 $sgl = 'SELECT * FROM `user` RIGHT OUTER JOIN `passport` ON user.ID = passport.user_ID LIMIT 5 , 5';

 $stm = $connection->query($sgl);
 $stm->execute();
 $list = $stm->fetchAll(PDO::FETCH_ASSOC);

        echo '<h3>' . 'Cписок пользователей, у кого есть паспорта'. '</h3>';
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
