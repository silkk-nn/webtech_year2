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
    <h1 class="text-center">Random Food For You</h1>
    <div class="container d-flex justify-content-center">
        <img src="">
        <?php
        $url = "https://www.themealdb.com/api/json/v1/1/random.php";
        $response = file_get_contents($url);
        $result = json_decode($response);
        $meal = $result->meals;
        foreach ($meal as $case) {
            echo "<div class=\"card p-4\" style=\"width: 30rem;\">
            <img src=\"$case->strMealThumb\" class=\"card-img-top\">
            <div class=\"card-body\">
              <h5 class=\"card-title text-center mx-5\">$case->strMeal</h5>
              <hr>
              <p class=\"card-text cuttext\">$case->strInstructions</p>
              <div class=\"row d-flex justify-content-center\">
                    <button type=\"button\" class=\"btn btn-info\" onClick=\"history.go(0)\"><span class=\"reload\">&#x21bb;</span></button>
                    <a href=\"$case->strSource\" class=\"btn btn-primary mx-3\">Learn more</a>
              </div>
            </div>
          </div>";
        }
        ?>

    </div>
</body>

</html>