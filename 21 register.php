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
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                <label for="name">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="confirmPassword" id="password" placeholder="Confirm Password">
                                <label for="password">Confirm Password</label>
                            </div>
                            <button type="submit" class="btn btn-dark float-end" name="register">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
        session_start();

        function checkStrongPassword($password) {
            $upperStatus = false; // A-Z
            $lowerStatus = false; // a-z
            $numberStatus = false; // 0-9
            $specialStatus = false; // !-*

            if(preg_match('/[A-Z]/', $password)) {
                $upperStatus = true;
            } 
            if(preg_match('/[a-z]/', $password)) {
                $lowerStatus = true;
            } 
            if(preg_match('/[0-9]/', $password)) {
                $numberStatus = true;
            } 
            if(preg_match('/[!@#$%^&*]/', $password)) {
                $specialStatus = true;
            } 
            if($upperStatus && $lowerStatus && $numberStatus && $specialStatus) {
                return true;
            } else {
                return false;
            }
        }

        if (isset($_POST['register'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];

            if ($name != '' && $email != '' && $password != '' && $confirmPassword != '') {
                if (strlen($password) >= 6 && strlen($confirmPassword) >= 6) {
                    if ($password == $confirmPassword) {
                        $status = checkStrongPassword($password);

                        if($status) {
                            $_SESSION['email'] = $email;
                            $_SESSION['password'] = password_hash($password, PASSWORD_BCRYPT);
    
                            echo 'Register Success';
                        } else {
                            echo 'Your password is not Strong Password!(eg. contain A-Z a-z 0-9 !@#$%';
                        }

                    } else {
                        echo 'Password not same. Type Again!';
                    }
                } else {
                    echo 'Password must be greater than 6!';
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