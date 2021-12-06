<html>
<body>
<table border="1" cellpadding="3">
    <tr>
        <th>name</th>
        <th>surname</th>
        <th>sex</th>
        <th>age</th>
    </tr>

    <?php foreach ($list as $user): ?>
    <tr>
        <td>
            <?php echo $user->name ?>
        </td>
        <td>
            <?php echo $user->surname ?>
        </td>
        <td>
            <?php echo $user->sex ?>
        </td>
        <td>
            <?php echo $user->age ?>
        </td>
    </tr>
    <?php endforeach ?>
</table>
</body>
</html>
