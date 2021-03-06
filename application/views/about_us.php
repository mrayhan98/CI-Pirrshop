<!DOCTYPE html>
<html>
<head>
	<title>ABOUT US</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/page.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>js/action.js"></script>


</head>
<body>

	
<body>
  <!-- ::::::::::::::::::::::::::::::::::::::::::::::HEADER:::::::::::::::::::::::::::::::::::::::::::::::: -->
  	<nav class="navbar navbar-inverse" id="navbar">
      <div class="container">
        <div class="row row1">
            <ul class="largenav pull-right">
                <li class="upper-links"><a class="links" href="<?php echo site_url(); ?>/Home/index/">Home</a></li>
                |
                <li class="upper-links"><a class="links" href="<?php echo site_url(); ?>/Home/contact">Contact</a></li>
                |
                <li class="upper-links"><a class="links" href="<?php echo site_url(); ?>/Home/aboutus">About Us</a></li>
                |
                <?php if($this->session->userdata('udahlogin') == 'admin'){ ?>
                  <li class="upper-links"><a class="links" href="<?php echo site_url(); ?>/Home/admin/">Menu Admin</a></li>
                  |
                <?php } ?>
                <?php if($this->session->userdata('udahlogin')===null)
                {?>
                  <li class="upper-links"><a class="links" href="<?php echo site_url(); ?>/Home/signup">Sign Up</a></li>
                  |
                  <li class="upper-links"><a class="links" href="<?php echo site_url(); ?>/Home/login">Login</a></li>
                  |
               <?php }else
               {?>
                  <li class="upper-links dropdown"><a class="links" href="#">Hallo, <?php echo $this->session->userdata('udahlogin'); ?></a>
                    <ul class="dropdown-menu">
                      <li class="profile-li"><a class="profile-links" href="<?php echo site_url('Home/profil/'.$this->session->userdata('udahlogin')); ?>">Profil</a></li>
                      <li class="profile-li"><a class="profile-links" href="<?php echo site_url(); ?>/Home/logout">Logout</a></li>
                  </ul>
                  |
              <?php } ?>
                <li class="upper-links dropdown"><a class="links" href="#">Products</a>
                    <ul class="dropdown-menu">
                        <li class="profile-li"><a class="profile-links" href="<?php echo site_url(); ?>/Home/laptop">Laptops</a></li>
                        <li class="profile-li"><a class="profile-links" href="<?php echo site_url(); ?>/Home/camera">Cameras</a></li>
                        <li class="profile-li"><a class="profile-links" href="<?php echo site_url(); ?>/Home/handphone">Handphones</a></li>
                        <li class="profile-li"><a class="profile-links" href="<?php echo site_url(); ?>/Home/acc">Accessories</a></li>
                        <li class="profile-li"><a class="profile-links" href="<?php echo site_url(); ?>/Home/fashion">Fashion</a></li>
                        <li class="profile-li"><a class="profile-links" href="<?php echo site_url(); ?>/Home/voucher">Vouchers</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="row row2">
            <div class="col-sm-2">
                <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">??? PIRRShop</span></h2>
                <h1 style="margin:0px;"><span class="largenav"><a id="logo" href="<?php echo site_url(); ?>/Home/index/">PIRRShop</a></span></h1>
            </div>
            <div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-11">
                <div class="row">
                  <form method="get" action="<?php echo site_url('Home/cari'); ?>">
                    <input class="flipkart-navbar-input col-xs-11" type="text" placeholder="Search for Products" name="cari">
                    <button type="submit" class="flipkart-navbar-button col-xs-1">
                        <svg width="15px" height="15px">
                            <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                        </svg>
                    </button>
                    </form>
                </div>
            </div>
            <div class="cart largenav col-sm-2">
                    <button type="button" class="btn btn-info glyphicon glyphicon-shopping-cart" data-toggle="modal" data-target="#product_cart" id="btn-cart"> Cart (<?php echo count($cart); ?>)</button>
            </div>
        </div>
    </div>
  </nav>
  <div id="mySidenav" class="sidenav">
    <div class="container" style="background-color: #2874f0; padding-top: 10px;">
        <span class="sidenav-heading">Home</span>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">??</a>
    </div>
    <ul>
      <li class="upper-links"><a class="links" href="<?php echo site_url(); ?>/Home/index/">Home</a></li><br>
      <li class="upper-links"><a class="links" href="<?php echo site_url(); ?>/Home/contact">Contact</a></li><br>
      <li class="upper-links"><a class="links" href="<?php echo site_url(); ?>/Home/aboutus">About Us</a></li><br>
      <li class="upper-links"><a class="links" href="<?php echo site_url(); ?>/Home/signup">Sign Up</a></li><br>
      <li class="upper-links"><a class="links" href="<?php echo site_url(); ?>/Home/login">Login</a></li><br>
      <li class="upper-links dropdown"><a class="links" href="#">Products</a>
          <ul class="dropdown-menu">
              <li class="profile-li"><a class="profile-links" href="<?php echo site_url(); ?>/Home/laptop">Laptops</a></li>
              <li class="profile-li"><a class="profile-links" href="<?php echo site_url(); ?>/Home/camera">Cameras</a></li>
              <li class="profile-li"><a class="profile-links" href="<?php echo site_url(); ?>/Home/handphone">Handphones</a></li>
              <li class="profile-li"><a class="profile-links" href="<?php echo site_url(); ?>/Home/acc">Accessories</a></li>
              <li class="profile-li"><a class="profile-links" href="<?php echo site_url(); ?>/Home/fashion">Fashion</a></li>
              <li class="profile-li"><a class="profile-links" href="<?php echo site_url(); ?>/Home/voucher">Vouchers</a></li>
          </ul>
      </li>
  </ul>
</div>
  <!-- Modal Cart -->
<div class="modal fade product_view" id="product_cart">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title">Shopping Cart</h3>
            </div>
            <div class="modal-body">
              <form action="<?php echo site_url('Home/ubah'); ?>" method="post" enctype="multipart/form-data">
              <table class="table table-hover">
                <tbody class="hasil">
                    <?php
                      $total = 0;
                      if(count($cart) > 0){
                        foreach($cart as $item){
                          $total += $item['subtotal'];
                  ?>
                  <tr>
                      <td><img src="<?php echo base_url('img/'.$item['gambar']) ?>" width="100"></td>
                      <td><?php echo $item['name']; ?></td>
                      <td>Rp <?php echo number_format($item['price'],0,',','.'); ?></td>
                      <td>
                      <input type="hidden" name="cart[<?php echo $item['id'];?>][id]" value="<?php echo $item['id'];?>" />
                      <input type="hidden" name="cart[<?php echo $item['id'];?>][rowid]" value="<?php echo $item['rowid'];?>" />
                      <input type="hidden" name="cart[<?php echo $item['id'];?>][name]" value="<?php echo $item['name'];?>" />
                      <input type="hidden" name="cart[<?php echo $item['id'];?>][price]" value="<?php echo $item['price'];?>" />
                      <input type="hidden" name="cart[<?php echo $item['id'];?>][gambar]" value="<?php echo $item['gambar'];?>" />
                      <input type="text" name="cart[<?php echo $item['id'];?>][qty]" class="form-control" value="<?php echo $item['qty']; ?>">
                      </td>
                      <td>Rp <?php echo number_format($item['subtotal'],0,',','.'); ?></td>
                      <td><a href="<?php echo site_url('Home/del_brg/'.$item['rowid']); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a></td>
                  </tr>
                  <?php }}
                  else{
                      echo'<tr><td colspan="6" align="center"><h3>Keranjang Belanja Kosong.</h3></td></tr>'; 
                  } ?>
                </tbody>
              </table>
              <hr><br>
              <h4>Total Yang Harus Dibayar : Rp <?php echo number_format($total,0,',','.'); ?></h4>
              <button type="submit" class="btn btn-default">Refresh</button>
              <a href="<?php echo site_url('Home/del_brg/semua'); ?>" class="btn btn-danger">Kosongkan</a> 
            </form>     
            </div>
        </div>
    </div>
</div>


<!--
:::::::::::::::::::::::::::::::::::::::::::::::::ABOUT US CONTENT:::::::::::::::::::::::::::::::::::::::::::::::::::::::
-->

<div class="container">

      <!-- Introduction Row -->
      <h1 class="my-4">About Us
        <small>It's Nice to Meet You!</small>
      </h1>
      <h4>We are Informatics Engineering 2016</h4>

      <!-- Team Members Row -->
      <div class="row">
        <div class="col-lg-12">
          <h2 class="my-4">Our Team</h2>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid img-circle img-responsive d-block mx-auto" src="<?php echo base_url(); ?>image/M Rayhan N.jpg" alt="" style="max-width: 100%; max-height: 100%;">
          <h3>Muhammad Rayhan Natadimadja
            <small>Mahasiswa S1 Informatika</small>
          </h3>
          <p>Halo, nama saya Muhammad Rayhan Natadimadja! Saya adalah mahasiswa S1 Teknik Informatika di Telkom university kelas IF-40-05. Saat ini saya sedang belajar pemrograman web. Pemrograman web menyenangkan loh! ???</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid img-circle img-responsive d-block mx-auto" src="<?php echo base_url(); ?>image/ilham.jpg" alt="" style="max-width: 100%; max-height: 100%;">
          <h3>Ilham Alif Nurfaidzi<br>
            <small>Mahasiswa S1 Informatika</small>
          </h3>
          <p>Halo, nama saya Ilham Alif Nurfaidzi! Saya adalah mahasiswa S1 Teknik Informatika di Telkom university kelas IF-40-05. Saat ini saya sedang belajar pemrograman web. Pemrograman web menyenangkan loh! ???</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid img-circle img-responsive d-block mx-auto" src="<?php echo base_url(); ?>image/egha.jpg" alt="" style="max-width: 100%; max-height: 100%;">
          <h3>Putu Egha Wikanadipa<br>
            <small>Mahasiswa S1 Informatika</small>
          </h3>
          <p>Halo, nama saya Putu Egha Wikanadipa! Saya adalah mahasiswa S1 Teknik Informatika di Telkom university kelas IF-40-05. Saat ini saya sedang belajar pemrograman web. Pemrograman web menyenangkan loh! ???</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4" style="margin-left: 33%;">
          <img class="rounded-circle img-fluid img-circle img-responsive d-block mx-auto" src="<?php echo base_url(); ?>image/rifqy.jpg" alt="" style="max-width: 100%; max-height: 100%;">
          <h3>Rifqy Nurhalim <br>
            <small>Mahasiswa S1 Informatika</small>
          </h3>
          <p>Halo, nama saya Rifqy Nurhalim! Saya adalah mahasiswa S1 Teknik Informatika di Telkom university kelas IF-40-05. Saat ini saya sedang belajar pemrograman web. Pemrograman web menyenangkan loh! ???</p>
        </div>
      </div>

    </div>


<!-- :::::::::::::::::::::::::::::::::::::::::::::::::FOOTER::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::--> 
<div class="container" id="foot">
    <footer class="footer-bs">
        <div class="row">
          <div class="col-md-3 footer-brand animated fadeInLeft">
              <h2>PIRRShop</h2>
                <p>PIRRShop adalah sebuah toko online yang menyediakan berbagai jenis barang untuk memenuhi gaya hidup anda.</p>
                <p>?? 2018 PIRRSHOP, All rights reserved</p>
            </div>
          <div class="col-md-4 footer-nav animated fadeInUp">
              <h4>Menu ???</h4>
              <div class="col-md-6">
                    <ul class="pages">
                        <li><a href="<?php echo site_url(); ?>/Home/laptop">Laptops</a></li>
                        <li><a href="<?php echo site_url(); ?>/Home/camera">Cameras</a></li>
                        <li><a href="<?php echo site_url(); ?>/Home/handphones">Smartphones</a></li>
                        <li><a href="<?php echo site_url(); ?>/Home/acc">Watches</a></li>
                        <li><a href="<?php echo site_url(); ?>/Home/fashion">Fashion</a></li>
                        <li><a href="<?php echo site_url(); ?>/Home/voucher">Vouchers</a></li>
                    </ul>
                </div>
              <div class="col-md-6">
                    <ul class="list">
                        <li><a href="<?php echo site_url(); ?>/Home/aboutus">About Us</a></li>
                        <li><a href="<?php echo site_url(); ?>/Home/contact">Contacts</a></li>
                    </ul>
                </div>
            </div>
          <div class="col-md-2 footer-social animated fadeInDown">
              <h4>Follow Us</h4>
              <ul>
                  <li><a href="http://www.facebook.com">Facebook</a></li>
                  <li><a href="http://www.twitter.com">Twitter</a></li>
                  <li><a href="http://www.instagram.com">Instagram</a></li>
                  <li><a href="http://www.rss.com">RSS</a></li>
                </ul>
            </div>
          <div class="col-md-3 footer-ns animated fadeInRight">
              <h4>Newsletter</h4>
                <p>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                      </span>
                    </div><!-- /input-group -->
                 </p>
            </div>
        </div>
    </footer>

</body>
</html>