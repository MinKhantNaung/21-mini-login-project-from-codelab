<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
    <!-- bootstrap files  -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-4">
                <div class="text-center">
                    <a href="21 login.php"><button class="btn btn-info text-white w-75 mb-3">Login</button></a>
                </div>
                <div class="text-center">
                    <a href="21 register.php"><button class="btn btn-success text-white w-75 mb-3">Register</button></a>
                </div>
                <div class="text-center">
                    <a href="21 logout.php"><button class="btn btn-danger text-white w-75 mb-3">Logout</button></a>
                </div>
            </div>
            <div class="col-8">
                <form action="" method="POST">
                    <div class="card">
                        <div class="card-header">Login</div>
                        <div class="card-body">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                            <button type="submit" class="btn btn-dark float-end" name="login">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
        session_start();

        if(isset($_POST['login'])) {
            $userEmail = $_POST['email'];
            $userPassword = $_POST['password'];

            if($userEmail != '' || $userPassword != '') {
                if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
                    if($userEmail == $_SESSION['email'] && password_verify($userPassword, $_SESSION['password'])) {
                        echo 'Login Success';
                    } else {
                        echo 'Login Fail! Try Again...';
                    }
                } else {
                    echo 'You Logged out this account';
                }                
            } else {
                echo 'Need to Fill';
            }
        }

    ?>
</body>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
<script src="./js/bootstrap.min.js"></script>

</html>