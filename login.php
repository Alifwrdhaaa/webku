
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="gambar2.jpg">
    <title>Login | bukawarung</title>
    <link rel="stylesheet" type="text/css" href="edit2.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>


<body id="bg-login">
    <div class="login-box">
        <h2>LOGIN</h2>
        <form action="" method="POST">
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" name="user" placeholder="username">
            </div>
            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" name="pass" placeholder="password">
            </div>
            <input type="submit" name="submit" value="login" class="btn">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            include 'proseslogin.php';
            $user = mysqli_real_escape_string($conn, $_POST['user']);
            $pass = mysqli_real_escape_string($conn, $_POST['pass']);

            $cek = mysqli_query($conn, "SELECT * FROM loginadmin WHERE  username = '" . $user . "' AND password = '" . MD5($pass) . "'");
            if (mysqli_num_rows($cek) > 0) {
                echo '<script>window.location.href="dashboard.html"</script>';
            } else {
                echo '<script>alert("Username atau Password Anda salah!")</script>';
            }
        }
        ?>
    </div>
</body>

</html>
