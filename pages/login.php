<?php
session_start();
require_once '../includes/pdo_connect.php';
$error = '';
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $stmt = $pdo->prepare("SELECT * FROM admin WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch();
    if (!$user) {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch();
    }
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = $user['id'];
        if (isset($user['username']) && $user['username'] === 'admin') {
            header('Location: ../admin/index.php');
        } else {
            header('Location: ../index.php');
        }
        exit();
    } else {
        $error = 'Invalid username or password';
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    <section class="vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-8 col-lg-6">
                    <img src="login.png" class="img-fluid" alt="Login image" height="300px">
                </div>
                <div class="col-md-6 col-lg-5">
                    <form action="login.php" method="post" class="p-4 border rounded bg-light">
                        <p class="text-center h1 fw-bold mb-4">Login</p>
                        <div class="form-outline mb-4">
                            <label class="form-label"><i class="bi bi-person-circle"></i> Username</label>
                            <input type="text" id="username" class="form-control" name="username" required placeholder="Enter your username" />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label"><i class="bi bi-chat-left-dots-fill"></i> Password</label>
                            <input type="password" id="password" class="form-control" name="password" required placeholder="Enter your password" />
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                            <input type="submit" value="Sign in" name="login" class="btn btn-warning btn-lg text-light" style="width:100%; border-radius: 25px; font-weight:600;" />
                        </div>
                        <p class="text-center">I don't have an account? <a href="register.php" class="text-warning" style="font-weight:600; text-decoration:none;">Register Here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>