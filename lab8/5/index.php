<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lab 8</title>
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
        .cuttext {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 4; /* number of lines to show */
            -webkit-box-orient: vertical;
            }
        .card-title{
            color: crimson;
            font-style: bold;
        }
        .reload {
        font-family: Lucida Sans Unicode
        }
    </style>

<body>
    <div class="my-3 mx-5 d-flex flex-column justify-content-center">

    </div>
<?php
        $url = "http://10.0.15.20/lab8/restapis/10countries";
        $response = file_get_contents($url);
        $result = json_decode($response);
        $count = 1;
        foreach ($result as $object) {
            echo "<div class=\"card mb-3 d-flex justify-content-center\" style=\"max-width: 720px;\">
            <div class=\"row g-0\">
            <div class=\"col-md-7\">
              <div class=\"card-body\">
                <h5 class=\"card-title\">Name: $object->name</h5>
                <p class=\"card-text\">Capital: $object->capital</p>
                <p class=\"card-text\">Population: $object->population</p>
                <p class=\"card-text\">Region: $object->capital</p>";
            echo "<p class=\"card-text\"> Location:";
            foreach ($object->latlng as $location) {
                echo $location . " ";
            }
            echo "</p>";
            echo "<p class=\"card-text\"> Border: ";
            foreach ($object->borders as $boder) {
                echo $boder . " ";
            }
            echo "</p></div>
            </div>";
            echo "<div class=\"col-md-5\">
            <img src=\"$object->flag\" class=\"img-fluid rounded-start\" style=\"width: 25rem;\">
          </div>
        </div>
      </div>";
        }
        ?>
</body>

</html>