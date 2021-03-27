<h1>Портфолио</h1>
<p>
<table>
    <tr>
        <td>Год</td>
        <td>Проект</td>
        <td>Описание</td>
    </tr>
    <?php
    foreach ($data as $row) {
        echo '<tr><td>' . $row['year'] . '</td><td>' 
        . $row['name'] . '</td><td>' . $row['description'] . '</td></tr>';
    }
    ?>
</table>
</p>