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

        h2 {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .box {
            background-color: #d6d6d6;
        }
    </style>

<body>
    <div class="container">
        <h2>Box office</h2>
        <?php
        $url = "http://10.0.15.20/lab8/restapis/movies90";
        $response = file_get_contents($url);
        $result = json_decode($response);
        $count = 1;
        foreach ($result as $movie) {
            echo "<div class=\"box p-3 my-3\">";
            echo "<h4>$count. $movie->title ($movie->year)</h4>";
            echo "<h5>Cast</h5>";
            echo "<ul class=\"list-group list-group-flush m-3\">";
            foreach ($movie->cast as $act){
                echo "<li class=\"list-group-item\">$act</li>";
            };
            echo "</ul>";
            echo "<h5>Genres</h5>";
            $set_genre = "";
            foreach ($movie->genres as $genre){
                $set_genre = $set_genre ." ". $genre;
            };
            echo "<p> - $set_genre</p>";
            echo "</div>";
            // echo "<h2>$movie->genres</h2>";
            $count ++;
        }
        ?>

    </div>
</body>

</html>