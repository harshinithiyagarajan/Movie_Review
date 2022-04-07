<!Doctype html>
<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="login">
        <form action="login.php" method="post">
            <h2>Login</h2>
            <?php if(isset($_GET['error'])){ ?>
                <p class="error"> <?php echo $_GET['error']; ?></p>
                <?php } ?>
                <label>Username</label>
                <input type="text" name="uname"><br>
                <label>Password</label>
                <input type="password" name="password"><br>
                <button type="submit">Login</button>
            }
        </form>
        </div>
    </body>
</html>