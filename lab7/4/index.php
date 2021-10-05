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

    <div class="container mt-5">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1>Form</h1>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputFirstname">Firstname</label>
                    <input type="text" class="form-control" placeholder="First name" name="fname" value="Nonthapaht">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputLastname">Lastname</label>
                    <input type="text" class="form-control" placeholder="Last name" name="lname" value="Taspan">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAdress">Adress</label>
                    <input type="text" class="form-control" placeholder="Adress" name="adress" value="49/5">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputDistrict">District</label>
                    <input type="text" class="form-control" placeholder="District" name="district" value="Mahachai">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputProvince">Province</label>
                    <input type="text" class="form-control" placeholder="Province" name="province" value="Samutsakorn">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputZIP">ZIP code</label>
                    <input type="number" class="form-control" placeholder="Zip" name="zip" value="74000">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputNumber">Phone number</label>
                    <input type="number" class="form-control" placeholder="Number" name="phone" value="0642306141">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputID">ID card</label>
                    <input type="number" class="form-control" placeholder="ID card" name="id" value="1759900384697">
                </div>
            </div>
            <button type="submit" class="btn btn-info">submit</button>
        </form>
        <br>
        <br>

        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Adress</th>
                    <th scope="col">District</th>
                    <th scope="col">Province</th>
                    <th scope="col">Zip Code</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">ID card</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // collect value of input field
                        // $name = $_POST['fname'];
                        if (empty($_POST['fname'])) {
                            echo "";
                        } elseif (iconv_strlen($_POST['fname'], "UTF-8") < 5) {
                            echo "<td style=\"color:red\">" . $_POST['fname'] . "</td>";
                        } else {
                            echo "<td>" . $_POST['fname'] . "</td>";
                        }
                        if (empty($_POST['lname'])) {
                            echo "";
                        } elseif (iconv_strlen($_POST['lname'], "UTF-8") < 5) {
                            echo "<td style=\"color:red\">" . $_POST['lname'] . "</td>";
                        } else {
                            echo "<td>" . $_POST['lname'] . "</td>";
                        }
                        if (empty($_POST['adress'])) {
                            echo "";
                        } elseif (iconv_strlen($_POST['adress'], "UTF-8") < 5) {
                            echo "<td style=\"color:red\">" . $_POST['adress'] . "</td>";
                        } else {
                            echo "<td>" . $_POST['adress'] . "</td>";
                        }
                        if (empty($_POST['district'])) {
                            echo "";
                        } elseif (iconv_strlen($_POST['district'], "UTF-8") < 5) {
                            echo "<td style=\"color:red\">" . $_POST['district'] . "</td>";
                        } else {
                            echo "<td>" . $_POST['district'] . "</td>";
                        }
                        if (empty($_POST['province'])) {
                            echo "";
                        } elseif (iconv_strlen($_POST['province'], "UTF-8") < 5) {
                            echo "<td style=\"color:red\">" . $_POST['province'] . "</td>";
                        } else {
                            echo "<td>" . $_POST['province'] . "</td>";
                        }
                        if (empty($_POST['zip'])) {
                            echo "";
                        } elseif (iconv_strlen($_POST['zip'], "UTF-8") < 5) {
                            echo "<td style=\"color:red\">" . $_POST['zip'] . "</td>";
                        } else {
                            echo "<td>" . $_POST['zip'] . "</td>";
                        }
                        if (empty($_POST['phone'])) {
                            echo "";
                        } elseif (iconv_strlen($_POST['phone'], "UTF-8") < 5) {
                            echo "<td style=\"color:red\">" . $_POST['phone'] . "</td>";
                        } else {
                            echo "<td>" . $_POST['phone'] . "</td>";
                        }
                        if (empty($_POST['id'])) {
                            echo "";
                        } elseif (iconv_strlen($_POST['id'], "UTF-8") < 5) {
                            echo "<td style=\"color:red\">" . $_POST['id'] . "</td>";
                        } else {
                            echo "<td>" . $_POST['id'] . "</td>";
                        }
                    }
                    ?>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>