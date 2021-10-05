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
    </style>
<body>
    <div class="container text-center my-5">
        <h2>Multipy Table</h2>
        <form action="index.php" method="post">
            <label for="multi" class="form-label">กรอกเลขจำนวนเต็ม:</label>
            <input type="number" id="multi" name="multi" class="form-control" placeholder="เลขจำนวนเต็ม" required />
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
    <div class="text-center">
        <?php
        $number = $_POST['multi'];
        if ($number==null){
            echo "<br>";
        } else{
        for ($i = 1; $i < 13; $i++) {
            $result = $number * $i;
            echo "<h3>$number x  $i = $result</h3>";}}
        ?>
    </div>
</body>
</html>