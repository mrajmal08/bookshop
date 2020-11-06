<?php

if(isset($_POST['submit'])){

    var_dump($_POST); exit;

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
<h2 class="product-title">Login</h2>
<ol class="breadcrumb">
<li><a href="index.php">Home /</a></li>
<li class="current">Login</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<section class="login section-padding">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-5 col-md-12 col-xs-12">
<div class="login-form login-area">
<h3>
Login Now
</h3>
<form role="form" method="post" class="login-form">
<div class="form-group">
<div class="input-icon">
<i class="lni-user"></i>
<input type="text" id="sender-email" class="form-control" name="email" placeholder="Username">
</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="lni-lock"></i>
<input type="password" name="password"  class="form-control" placeholder="Password">
</div>
</div>
<div class="form-group mb-3">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="checkedall">
<label class="custom-control-label" for="checkedall">Keep me logged in</label>
</div>
<a class="forgetpassword" href="forgot-password.php">Forgot Password?</a>
</div>
<div class="text-center">
<button type="submit" name="submit" class="btn btn-common log-btn">Submit</button>
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