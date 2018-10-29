<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saving</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/design.css">
</head>
<body>
<h1 class="tu">Welcome</h1>
<a href="home.php"><button class="btn btn-primary">Cancel</button></a>
<hr>
<form action="savestudentsprocess.php" method="POST" class="j">
    <input class="l" type="number" name="admno" placeholder="AdmNo" required>
    <input class="l" type="text" name="first" placeholder="First Name" required>
    <input class="l" type="text" name="last" placeholder="Last Name" required><br>
    <input class="ll" type="radio" name="gender" value="Male" required>Male
    <input class="ll" type="radio" name="gender" value="Female" required>Female
    <input class="l" type="date" name="dob" required>
    <input class="l" type="number" name="age" placeholder="Age" required>
    <input class="l" type="number" name="form" placeholder="Form" required>
    <button class="d" type="submit" name="submit">Save</button>
</form>
<br>
<a href="home.php"><button class="btn btn-primary">Show Students</button></a>
</body>
</html>