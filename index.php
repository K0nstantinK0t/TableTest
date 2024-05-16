<?php
use Requests\GetTableData;
use Requests\GetWinnersData;
require_once __DIR__ ."/DataBase/Requests/GetTableData.php";
require_once __DIR__ ."/DataBase/Requests/GetWinnersData.php";
$TableDataRequest = new GetTableData();
$attempts = $TableDataRequest->run();
?>

<html lang="ru">
    <head>
        <title>Турнирная Таблица</title>
    </head>
    <body>
        <h1>Турнирная таблица</h1>
        <table>
            <tr>
                <th>
                    Номер заезда
                </th>
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
                    Результат заезда
                </th>
            </tr>
            <?php
            foreach($attempts as $key=>$attempt){
                echo "
                    <tr>
                        <td>
                        ".($key+1)."
                        </td>
                        <td>
                        ".$attempt['Name']."
                        </td>
                        <td>
                        ".$attempt['City']."
                        </td>
                        <td>
                        ".$attempt['Car']."
                        </td>
                        <td>
                        ".$attempt['Result']."
                        </td>
                        
                    </tr>
                ";
            }
            ?>
        </table>

<?php
$WinnerDataRequest = new GetWinnersData();
$winners = $WinnerDataRequest->run();
 ?>

        <table>
            <tr>
                <th>
                    ФИО
                </th>
                <th>
                    Количество набранных баллов
                </th>
                <th>
                    Итоговое место
                </th>
            </tr>
            <?php
            foreach($winners as $key=>$winner){
                echo "
                    <tr>
                        <td>
                        ".$winner['Name']."
                        </td>
                        <td>
                        ".$winner['TotalResult']."
                        </td>
                        <td>
                        ".$attempt['Car']."
                        </td>
                        <td>
                        ".($key+1)."
                        </td>
                        
                    </tr>
                ";
            }
            ?>
        </table>
    </body>
</html>
<?php
