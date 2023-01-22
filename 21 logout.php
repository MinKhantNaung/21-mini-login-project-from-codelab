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
                <form action="">
                    <div class="alert alert-success fs-1">
                        <b>Logout Success</b>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php 
        session_start();

        session_destroy();
    ?>
</body>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
<script src="./js/bootstrap.min.js"></script>

</html>