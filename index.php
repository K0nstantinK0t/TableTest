<?php
use Requests\GetTableData;
require_once __DIR__ ."/DataBase/Requests/GetTableData.php";
$TableDataRequest = new GetTableData();
$response = $TableDataRequest->run();
var_dump($response->fetch());
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
