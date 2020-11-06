<?php

require_once "autoload/autoload.php";
require_once 'helper/functions.php';

$database = new Database();
$validation = new Validation();

if (isset($_POST['submit'])) {
    $rules = [
        'name' => 'required|max:20',
        'email' => 'email|required',
        'password' => 'required|max:20|min:6'
    ];
    $data = $_POST;
    $validation->validate($rules, $data);
    if ($validation->errors) {
        $error = $validation->errors;
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $role = 0;

        $check_email = $database->email_verification($email,'users');
        if (empty($check_email)){
        $data = [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'role' => $role,

        ];
        $columns = ['username', 'email', 'password', 'role'];
        $values = [':name', ':email', ':password', ':role'];
        $final = $database->insert($columns, $values, $data, 'users');
        if ($final) {
            header('location: login');
            exit;
        }
    }else{
            $error_message[] = 'Your email already exist in database';
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<?php require_once "includes/head.php" ?>
<body>
<?php require_once "includes/header.php" ?>

<div class="page-header" style="background: url(assets/img/banner1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="product-title">Join Us</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home /</a></li>
                        <li class="current">Register</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="register section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-12 col-xs-12">
                <?php
                if (!empty($error_message)){
                    $validation->print_errors($error_message);
                }
                ?>
                <div class="register-form login-area">
                    <h3>
                        Register
                    </h3>
                    <form method="post" class="login-form">
                        <div class="form-group">
                            <div class="input-icon pb-2">
                                <i class="lni-user"></i>
                                <input type="text" id="Name" class="form-control" name="name" placeholder="Username">
                            </div>
                            <?php
                            if (!empty($error['name'])) {
                                $validation->print_errors($error['name']);
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <div class="input-icon pb-2 ">
                                <i class="lni-envelope"></i>
                                <input type="text" id="sender-email" class="form-control" name="email"
                                       placeholder="Email Address">
                            </div>
                            <?php
                            if (!empty($error['email'])) {
                                $validation->print_errors($error['email']);
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <div class="input-icon pb-2 ">
                                <i class="lni-lock"></i>
                                <input type="password" name="password" id="password" class="form-control"
                                       placeholder="Password">
                            </div>
                            <?php
                            if (!empty($error['password'])) {
                                $validation->print_errors($error['password']);
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="lni-lock"></i>
                                <input type="password" name="confirm_password" id="confirm_password"
                                       class="form-control" placeholder="Retype Password">
                                <span id='message'></span>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkedall" required>
                                <label class="custom-control-label" for="checkedall">By registering, you accept our
                                    Terms & Conditions</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" id="submit" class="btn btn-common log-btn">Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once "includes/footer.php" ?>

<a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
</a>

<div id="preloader">
    <div class="loader" id="loader-1"></div>
</div>
<?php require_once "includes/scripts.php" ?>

</body>
</html>