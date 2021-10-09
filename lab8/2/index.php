<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lab 7</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200;400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        h1 {
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
<body>
    <div class="container">
        <?php
            $url = "https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces";
            $response = file_get_contents($url);
            $result = json_decode($response);
            echo "<h1>ข้อมูลวันที่ :". $result[0]->txn_date ."</h1>";
            ?>
                    <table class="table"> 
                    <tr>
                        <th class="table-primary" scope="col">ลำดับ</th>
                        <th class="table-primary" scope="col">จังหวัด</th>
                        <th class="table-primary" scope="col">ผู้ติดเชิ้อ</th>
                        <th class="table-primary" scope="col">เสียชีวิต</th>
                        <th class="table-primary" scope="col">ยอดผู้ป่วยสะสม</th>
                    </tr>
                <?php
                $count = 1;
                foreach ($result as $case) {
                    echo "<tr>";
                    echo "<td>$count</td>";
                    echo "<td>$case->province</td>";
                    echo "<td>$case->new_case</td>";
                    echo "<td>$case->new_death</td>";
                    echo "<td>$case->total_case</td>";
                    echo "</tr>";
                    $count ++;
                }
                ?>
                </table>
    </div>
</body>
</html>