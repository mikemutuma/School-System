<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/design.css">
</head>
<body>

<header>
    <nav class="p">
        <div class="x">
            <ul class="t">
                <li class="s"><a href="index.php">Home</a></li>
            </ul>
        </div>
    </nav>
</header>

<section class="a">
    <div class="b">
        <h2>Sign Up</h2>
        <form action="saveuserprocess.php" class="j" method="POST">
            <input class="l" type="text" name="first" placeholder="Firstname" required>
            <input class="l" type="text" name="last" placeholder="Lastname" required>
            <input class="l" type="number" name="nid" placeholder="National ID" required>
            <input class="l" type="text" name="email" placeholder="E-mail" required>
            <input class="l" type="text" name="username" placeholder="Username" required>
            <input class="l" type="password" name="password" placeholder="Password" required>
            <button class="d" type="submit" name="submit">Sign up</button>
        </form>
    </div>
</section>

</body>
</html>