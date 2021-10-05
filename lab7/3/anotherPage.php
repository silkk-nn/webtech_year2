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
<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            // $name = $_POST['fname'];
            if (empty($_POST['fname'])) {
                echo "";
            } elseif (iconv_strlen($_POST['fname'], "UTF-8") < 5) {
                echo "<h6 style=\"color:red\">First name: " . $_POST['fname'] . "</h6>";
            } else {
                echo "<h6>First name: " . $_POST['fname'] . "</h6>";
            }
            if (empty($_POST['lname'])) {
                echo "";
            } elseif (iconv_strlen($_POST['lname'], "UTF-8") < 5) {
                echo "<h6 style=\"color:red\">Last name: " . $_POST['lname'] . "</h6>";
            } else {
                echo "<h6>Last name: " . $_POST['lname'] . "</h6>";
            }
            if (empty($_POST['adress'])) {
                echo "";
            } elseif (iconv_strlen($_POST['adress'], "UTF-8") < 5) {
                echo "<h6 style=\"color:red\">Adress: " . $_POST['adress'] . "</h6>";
            } else {
                echo "<h6>Adress: " . $_POST['adress'] . "</h6>";
            }
            if (empty($_POST['district'])) {
                echo "";
            } elseif (iconv_strlen($_POST['district'], "UTF-8") < 5) {
                echo "<h6 style=\"color:red\">District: " . $_POST['district'] . "</h6>";
            } else {
                echo "<h6>District: " . $_POST['district'] . "</h6>";
            }
            if (empty($_POST['province'])) {
                echo "";
            } elseif (iconv_strlen($_POST['province'], "UTF-8") < 5) {
                echo "<h6 style=\"color:red\">Province: " . $_POST['province'] . "</h6>";
            } else {
                echo "<h6>Province: " . $_POST['province'] . "</h6>";
            }
            if (empty($_POST['zip'])) {
                echo "";
            } elseif (iconv_strlen($_POST['zip'], "UTF-8") < 5) {
                echo "<h6 style=\"color:red\">zip: " . $_POST['zip'] . "</h6>";
            } else {
                echo "<h6>Zip: " . $_POST['zip'] . "</h6>";
            }
            if (empty($_POST['phone'])) {
                echo "";
            } elseif (iconv_strlen($_POST['phone'], "UTF-8") < 5) {
                echo "<h6 style=\"color:red\">phone: " . $_POST['phone'] . "</h6>";
            } else {
                echo "<h6>Phone: " . $_POST['phone'] . "</h6>";
            }
            if (empty($_POST['id'])) {
                echo "";
            } elseif (iconv_strlen($_POST['id'], "UTF-8") < 5) {
                echo "<h6 style=\"color:red\">id: " . $_POST['id'] . "</h6>";
            } else {
                echo "<h6>ID: " . $_POST['id'] . "</h6>";
            }
        }
        ?>
</body>
</html>