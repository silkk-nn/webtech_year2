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

    <div class="container mt-5">
        <form method="post" action="anotherPage.php">
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
            <a href="anotherPage.html">
      <input type="submit"/>
     </a>
        </form>
        <br>
        <br>
    </div>




</body>

</html>