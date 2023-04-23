<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
</head>
<body>
<center>
    <form>
        <table class="tablestyle" width="650px" height="300px">
            <tr class="tablestyle" width="650px" height="95px">
                <td class="tablestyle" colspan="3">
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                    var resultJson = JSON.parse(
                    <?php
                        $host = "localhost";
                        $db_name = "database_name";
                        $username = "username";
                        $password = "password";
                        $charset = "utf8mb4";

                        $dsn = "mysql:host=$host;dbname=$db_name;charset=$charset";
                        $options = [
                            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            PDO::ATTR_EMULATE_PREPARES => false,
                        ];
                        try {
                            $pdo = new PDO($dsn, $username, $password, $options);
                        } catch (\PDOException $e) {
                            throw new \PDOException($e->getMessage(), (int)$e->getCode());
                        }

                        for ($i = 1; $i <= 5; $i++) {
                            $input = $_POST['data_input' . $i];

                            try {
                                $stmt = $pdo->prepare('INSERT INTO example_data (`data`) VALUES (?)');
                                $stmt->execute([$input]);
                            } catch (\PDOException $e) {
                                echo "ERROR";
                                return;
                            }
                        }

                        $stmtSelect = $pdo->prepare('SELECT * FROM example_data');
                        $waitRows = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);

                        $resultArray = [
                            "data" => []
                        ];
                        foreach ($data as $waitRows) {
                            if (isset($resultArray["data"][$data["data"]]) $resultArray["data"][$data["data"]] += 1;
                            else $resultArray["data"][] = $data["data"][$data["data"]] = 1;
                        }

                        echo json_encode($resultArray);
                    ?>
                    );
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);
                    function drawChart() {
                        resultArray = [];
                        for (const it of Object.entries(resultJson.data)) {
                            resultArray.push(it);
                        }

                        var table = google.visualization.arrayToDataTable(resultArray);
                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                        chart.draw(data, { title: "결과" });
                    }
                    </script>
                    <div id="piechart" style="width: 900px; height: 500px;"></div>
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>