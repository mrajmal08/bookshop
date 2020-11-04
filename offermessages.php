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
<h2 class="product-title">Offers/Messages</h2>
<ol class="breadcrumb">
<li><a href="#">Home /</a></li>
<li class="current">Messages</li>
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
<a class="active" href="offermessages.php">
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
<a href="privacy-setting.php">
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
<h2 class="dashbord-title">Offers/Messages</h2>
</div>
<div class="dashboard-wrapper">
<div class="dashboardboxtitle">
<h2>Offers</h2>
</div>
<table class="table table-responsive dashboardtable tablemyads">
<thead>
<tr>
<th>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="checkall">
<label class="custom-control-label" for="checkall"></label>
</div>
</th>
<th>Photo</th>
<th>Title</th>
<th>Category</th>
<th>Price</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr data-category="active">
<td>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="adone">
<label class="custom-control-label" for="adone"></label>
</div>
</td>
<td class="photo"><img class="img-fluid" src="assets/img/product/img1.jpg" alt=""></td>
<td data-title="Title">
<h3>HP Laptop 6560b core i3 3nd generation</h3>
<span>Ad ID: ng3D5hAMHPajQrM</span>
</td>
<td data-title="Category"><span class="adcategories">Laptops & PCs</span></td>
<td data-title="Price">
<h3>139$</h3>
</td>
<td data-title="Action">
<div class="btns-actions">
<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
<a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
</div>
</td>
</tr>
<tr data-category="active">
<td>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="adtwo">
<label class="custom-control-label" for="adtwo"></label>
</div>
</td>
<td class="photo"><img class="img-fluid" src="assets/img/product/img2.jpg" alt=""></td>
<td data-title="Title">
<h3>Jvc Haebr80b In-ear Sports Headphones</h3>
<span>Ad ID: ng3D5hAMHPajQrM</span>
</td>
<td data-title="Category">Electronics</td>
<td data-title="Price">
<h3>$189</h3>
</td>
<td data-title="Action">
<div class="btns-actions">
<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
<a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
</div>
</td>
</tr>
<tr data-category="inactive">
<td>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="adthree">
<label class="custom-control-label" for="adthree"></label>
</div>
</td>
<td class="photo"><img class="img-fluid" src="assets/img/product/img3.jpg" alt=""></td>
<td data-title="Title">
<h3>Furniture Straps 4-Pack, TV Anti-Tip Metal Wall </h3>
<span>Ad ID: ng3D5hAMHPajQrM</span>
</td>
<td data-title="Category">Real Estate</td>
<td data-title="Price">
<h3>$69</h3>
</td>
<td data-title="Action">
<div class="btns-actions">
<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
<a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
</div>
</td>
</tr>
</tbody>
</table>
<div class="dashboard-wrapper">
<form class="row offers-messages">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
<div class="offers-box">
<div class="dashboardboxtitle">
<h2>User</h2>
</div>
<ul class="offers-user-online">
 <li class="offerer">
<figure>
<img src="assets/img/author/img1.jpg" alt="">
</figure>
<span class="bolticon"></span>
<div class="user-name">
<h3>John Douglas</h3>
<h4><a href="#">Online</a></h4>
</div>
</li>
<li class="offerer">
<figure>
<img src="assets/img/author/img1.jpg" alt="">
</figure>
<div class="user-name">
<h3>Martin Descker</h3>
<h4><a href="#">Offline</a></h4>
</div>
</li>
<li class="offerer">
<figure>
<img src="assets/img/author/img1.jpg" alt="">
</figure>
<span class="bolticon"></span>
<div class="user-name">
<h3>Kim Bauer</h3>
<h4><a href="#">Online</a></h4>
</div>
</li>
<li class="offerer">
<figure>
<img src="assets/img/author/img1.jpg" alt="">
</figure>
<div class="user-name">
<h3>James Miller</h3>
<h4><a href="#">Offline</a></h4>
</div>
</li>
<li class="offerer">
<figure>
<img src="assets/img/author/img1.jpg" alt="">
</figure>
<span class="bolticon"></span>
<div class="user-name">
<h3>John Douglas</h3>
<h4><a href="#">Online</a></h4>
</div>
</li>
<li class="offerer">
<figure>
<img src="assets/img/author/img1.jpg" alt="">
</figure>
<div class="user-name">
<h3>Sarah Higgle</h3>
<h4><a href="#">Offline</a></h4>
</div>
</li>
<li class="offerer">
<figure>
<img src="assets/img/author/img1.jpg" alt="">
</figure>
<span class="bolticon"></span>
<div class="user-name">
<h3>Fred Aster</h3>
<h4><a href="#">Online</a></h4>
</div>
</li>
<li class="offerer">
<figure>
<img src="assets/img/author/img1.jpg" alt="">
</figure>
<span class="bolticon"></span>
<div class="user-name">
<h3>Fred Aster</h3>
<h4><a href="#">Online</a></h4>
</div>
</li>
</ul>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
<div class="chat-message-box">
 <div class="dashboardboxtitle">
<h2>Chat Messages</h2>
</div>
<div class="offerermessage">
<figure>
<img src="assets/img/author/img1.jpg" alt="">
</figure>
<div class="description">
<div class="info">
<h3>Meagan Miller</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
</div>
<div class="date">June 21, 2018</div>
</div>
</div>
<div class="memessage readmessage">
<figure>
<img src="assets/img/author/img1.jpg" alt="">
</figure>
<div class="description">
<div class="info">
<h3>Meagan Miller</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
</div>
<div class="text-right">
<p><a href="#">https://themeforest.net</a></p>
<p>It that ok?</p>
<div class="date">Jun 28, 2017 09:30</div>
</div>
</div>
</div>
<div class="offerermessage">
<figure>
<img src="assets/img/author/img1.jpg" alt="">
</figure>
<div class="description">
<div class="info">
<h3>Meagan Miller</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
</div>
<div class="date">June 21, 2018</div>
</div>
</div>
<div class="memessage readmessage">
<figure>
<img src="assets/img/author/img1.jpg" alt="">
</figure>
<div class="description">
<div class="info">
<h3>Meagan Miller</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
</div>
<div class="text-right">
<p><a href="#">https://themeforest.net</a></p>
<p>It that ok?</p>
<div class="date">Jun 28, 2017 09:30</div>
</div>
</div>
</div>
</div>
<div class="replay-box">
<textarea class="form-control" name="reply" placeholder="Type Here & Press Enter"></textarea>
<div class="icon-box">
<i class="lni-thumbs-up"></i>
<i class="lni-thumbs-down"></i>
<i class="lni-emoji-smile"></i>
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