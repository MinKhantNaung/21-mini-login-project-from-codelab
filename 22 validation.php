<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>

    <?php

        $errorName = $errorEmail = $errorAddress = $errorPhone = '';
        $name = $email = $address = $phone = '';

        if(isset($_POST['btnSave'])) {

            if($_POST['name'] == null || $_POST['name'] == '' || empty($_POST['name'])) {
                $errorName = 'Please Fill Name Field!';
            } else {
                $name = $_POST['name'];
            }

            if($_POST['email'] == null || $_POST['email'] == '' || empty($_POST['email'])) {
                $errorEmail = 'Please Fill Email Field!';
            } else {
                $email = $_POST['email'];
            }

            if($_POST['phone'] == null || $_POST['phone'] == '' || empty($_POST['phone'])) {
                $errorPhone = 'Please Fill Phone Field!';
            } else {
                $phone = $_POST['phone'];
            }

            if($_POST['address'] == null || $_POST['address'] == '' || empty($_POST['address'])) {
                $errorAddress = 'Please Fill Address Field!';
            } else {
                $address = $_POST['address'];
            }

            if($name != '' && $email != '' && $phone != '' && $address != '') {
                echo $name . '<br>';
                echo $email . '<br>';
                echo $phone . '<br>';
                echo $address . '<br>';
            }
        }
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-6 offset-3 shadow">
                <form action="" method="POST">
                    <div class="my-3 px-5">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                        <small class="text-danger"><?php echo $errorName ?></small>
                    </div>
                    <div class="my-3 px-5">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Eg. example@gmail.com">
                        <small class="text-danger"><?php echo $errorEmail ?></small>
                    </div>
                    <div class="my-3 px-5">
                        <label for="phone">Phone</label>
                        <input type="number" name="phone" id="phone" class="form-control" placeholder="Eg. 09.........">
                        <small class="text-danger"><?php echo $errorPhone ?></small>
                    </div>
                    <div class="my-3 px-5">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" placeholder="Enter address..." class="form-control" cols="30" rows="5"></textarea>
                        <small class="text-danger"><?php echo $errorAddress ?></small>
                    </div>
                    <div class="my-3 px-5 float-end">
                        <input type="submit" value="Save" class="btn btn-dark px-4" name="btnSave">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>