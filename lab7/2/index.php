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
        <h2>63070228 August</h2>
    </div>
    <div class="text-center">
        <table>
            <tr>
                <th class="table-primary">Su</th>
                <th class="table-primary">Mo</th>
                <th class="table-primary">Tu</th>
                <th class="table-primary">We</th>
                <th class="table-primary">Th</th>
                <th class="table-primary">Fr</th>
                <th class="table-primary">Sa</th>
            </tr>
            <tr>
        <?php
        for ($i = 1; $i < 8; $i++) {
            echo "<td>$i</td>";}
        ?>
            </tr>
            <tr>
        <?php
        for ($i = 8; $i < 15; $i++) {
            echo "<td>$i</td>";}
        ?>
            </tr>
            <tr>
        <?php
        for ($i = 15; $i < 22; $i++) {
            echo "<td>$i</td>";}
        ?>
            </tr>
            <tr>
        <?php
        for ($i = 22; $i < 29; $i++) {
            echo "<td>$i</td>";}
        ?>
            </tr>
            <tr>
        <?php
        for ($i = 29; $i < 36; $i++) {
            if ($i > 31) {
                echo "<td></td>";
            } else {
                echo "<td>$i</td>";}
            }
        ?>
            </tr>
        </table>
    </div>
</body>

</html>