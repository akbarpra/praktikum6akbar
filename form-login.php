<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="form-login.css">
    <title>LOGIN</title>
</head>
<body>
<body>
    <div class="login">
    <h1 class="login-header"><b>LOGIN</b></h1>
    <form action="login.php" method="post" class="login-container">
    <p>
    <input type="text" name="nis" placeholder="nis" ></input>
</p>
<input type="password" name="password" placeholder="password" id="myInput" ></input> <br>
    <input id="check" type="checkbox" onclick="myFunction()">Show Password</input>
    </p>
    <p>
    <input type="submit" value="LOGIN">
    </p>
    </form>
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "wrong"){
            echo '<h3>Username dan Password salah</h3>';
        }
    }
    ?>
    <Form action="login.php" method="post">
</body>
</html>
