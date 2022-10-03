<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bookmarked</title>
</head>
<body>
    <div class="nav">
        <h1><a href="index.php">Bookmarked</a></h1>
    </div>

    <!---------Page 1---------->
    <section class="homies">
    <div class="home">
        <h1>Add your books<br> in the memory lane.</h1>
        <p>A place where you can keep track of your reading list<br>
        and the books you have already read.</p>
        <div class="button">
            <div class="d-grid gap-2 d-md-block">
                <a href="signup.php" class="btn btn-primary" id="btn1"type="button">Sign up</a>
                <a href="login.php" class="btn btn-primary" id="btn2" type="button">Log in</a>
            </div>
        <div class="books1">
            <img src="images/Books.png" />
        </div>
        <div class="all-books">
            <div class="img-books">
                <img src="images/8.png" />
                <img src="images/9.png" />
                <img src="images/10.png" />
                <img src="images/11.png" />
                <img src="images/12.png" />
                <img src="images/13.png" />
            </div>
        </div>
    </div>
</div>
    </section>
</body>
</html>