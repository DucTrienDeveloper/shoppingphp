<?php
$conn = mysqli_connect("localhost", "root", "", "mobile", "3307") or die();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>

<?php
// if (isset($_POST['submit_login'])){
//     echo "<pre>";
//     print_r($_POST);
// }
error_reporting(0);
$Username = mysqli_real_escape_string($conn, $_POST['username']);
$Password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = mysqli_query($conn, "select * from admin where username = '$Username' && password ='$Password' ");
$num = mysqli_num_rows($sql);
if ($num > 0) {
    $row = mysqli_fetch_assoc($sql);
    $_SESSION['USER_ID'] = $row['id'];
    $_SESSION['USER_NAME'] = $row['username'];
    header("location:index.php");
    // echo "found";
} else {
    echo 'not found';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form action="login.php" method="post">
                                        <div class="form-floating mb-3">
                                            <!-- <input class="form-control" id="inputEmail" type="text" placeholder="name@example.com" /> -->
                                            <input type="text" class="form-control" placeholder="Username" name="username" value="<?= isset($username) ? $username : '' ?>">
                                            <label for="inputAccout">Tài Khoản</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <!-- <input class="form-control" id="inputPassword" type="password" placeholder="Password" /> -->
                                            <input type="password" class="form-control" placeholder="Password" name="password" value="<?= isset($password) ? $password : '' ?>">
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.php">Forgot Password?</a>
                                            <input type="submit" class="btn btn-primary btn-block" name='submit_login' value="login">
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>