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
        table,
        th,
        td {
            border: 1px solid black;
        }
        table {
            margin: auto;
            width: 80%;
            border: 3px;
            padding: 10px;
        }
    </style>
<body>
    <div class="container text-center my-5">
        <h2>63070228 Table</h2>
    </div>
    <div class="text-center">
        <table>
            <tr>
                <th class="table-primary">X</th>
                <th class="table-primary">1</th>
                <th class="table-primary">2</th>
                <th class="table-primary">3</th>
                <th class="table-primary">4</th>
                <th class="table-primary">5</th>
                <th class="table-primary">6</th>
                <th class="table-primary">7</th>
                <th class="table-primary">8</th>
                <th class="table-primary">9</th>
                <th class="table-primary">10</th>
                <th class="table-primary">11</th>
                <th class="table-primary">12</th>
            </tr>
        <?php
        for ($i = 1; $i < 13; $i++) {
            echo "<tr>";
            echo "<td class=\"table-primary\">$i</td>";
            for ($j = 1; $j < 13; $j++) {
                $result = $i * $j;
                echo "<td>$result</td>";}
            echo "</tr>";}
        ?>
        </table>
    </div>
</body>

</html>