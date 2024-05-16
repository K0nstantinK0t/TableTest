<?php
use Requests\GetTableData;
require_once "DataBase/Requests/GetTableData.php";
$TableDataRequest = new GetTableData();
$TableDataRequest->run();
var_dump($TableDataRequest);
?>

<html>
    <head>
        <title>Турнирная Таблица</title>
    </head>
    <body>
        <h1>Турнирная таблица</h1>
        <table>
            <tr>
                <th>
                    ФИО
                </th>
                <th>
                    Город
                </th>
                <th>
                    Машина
                </th>
                <th>
                    Результат заезда 1
                </th>
                <th>
                    Итоговое количество заездов
                </th>
                <th>
                    Итоговое место
                </th>
            </tr>
        </table>
    </body>
</html>
<?php
