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
<h2 class="product-title">Privacy Setting</h2>
<ol class="breadcrumb">
<li><a href="#">Home /</a></li>
<li class="current">Privacy Setting</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<div id="content" class="section-padding">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
<aside>
<div class="sidebar-box">
<div class="user">
<figure>
<a href="#"><img src="assets/img/author/img1.jpg" alt=""></a>
</figure>
<div class="usercontent">
<h3>Hello William!</h3>
<h4>Administrator</h4>
</div>
</div>
<nav class="navdashboard">
<ul>
<li>
<a href="dashboard.php">
<i class="lni-dashboard"></i>
<span>Dashboard</span>
</a>
</li>
<li>
<a href="account-profile-setting.php">
<i class="lni-cog"></i>
<span>Profile Settings</span>
</a>
</li>
<li>
<a href="account-myads.php">
<i class="lni-layers"></i>
<span>My Ads</span>
</a>
</li>
<li>
<a href="offermessages.php">
<i class="lni-envelope"></i>
<span>Offers/Messages</span>
</a>
</li>
<li>
<a href="payments.php">
<i class="lni-wallet"></i>
<span>Payments</span>
</a>
</li>
<li>
<a href="account-favourite-ads.php">
<i class="lni-heart"></i>
<span>My Favourites</span>
</a>
</li>
<li>
<a class="active" href="privacy-setting.php">
<i class="lni-star"></i>
<span>Privacy Settings</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-enter"></i>
<span>Logout</span>
</a>
</li>
</ul>
</nav>
</div>
<div class="widget">
<h4 class="widget-title">Advertisement</h4>
<div class="add-box">
<img class="img-fluid" src="assets/img/img1.jpg" alt="">
</div>
</div>
</aside>
</div>
<div class="col-sm-12 col-md-8 col-lg-9">
<div class="page-content">
<div class="inner-box">
<div class="dashboard-box">
<h2 class="dashbord-title">Privacy Settings</h2>
</div>
<div class="dashboard-wrapper">
<form class="row form-dashboard">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
<div class="privacy-box privacysetting">
<div class="dashboardboxtitle">
<h2>Settings</h2>
</div>
<div class="dashboardholder">
<ul>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="privacysettingsone">
<label class="custom-control-label" for="privacysettingsone">Make my profile photo public</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="privacysettingstwo">
<label class="custom-control-label" for="privacysettingstwo">I want to receive monthly newsletter</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="privacysettingsthree">
<label class="custom-control-label" for="privacysettingsthree">I want to receive e-mail notifications of offers/messages</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="privacysettingsfour">
<label class="custom-control-label" for="privacysettingsfour">I want to receive e-mail alerts about new listings</label>
</div>
</li>
<li>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="privacysettingsfive">
<label class="custom-control-label" for="privacysettingsfive">Enable offers/messages option in all my ads Post</label>
</div>
</li>
</ul>
<button class="btn btn-common" type="submit">Update</button>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
<div class="privacy-box deleteaccount">
<div class="dashboardboxtitle">
<h2>Delete Account</h2>
</div>
<div class="dashboardholder">
<div class="form-group mb-3 tg-inputwithicon">
<div class="tg-select form-control">
<select>
<option value="none">Select State</option>
<option value="none">Select State</option>
<option value="none">Select State</option>
</select>
</div>
</div>
<div class="form-group">
<textarea class="form-control" placeholder="Description"></textarea>
</div>
<button class="btn btn-common" type="button">Delete</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

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