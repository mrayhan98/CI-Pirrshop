<!DOCTYPE html>
<html>
<head>
	<title>Vouchers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/laptops.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>js/action2.js"></script>
</head>
<body>
    <!-- Header -->
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
                <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ PIRRShop</span></h2>
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
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
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
  <div class="container">
    <div class="row">
    <div class="container padding-bottom-2x mb-2">
          <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3">
              <h3 class="widget-title">Categories</h3>
                <ul class="list-group list-group-flush">
                    <a class="list-group-item" href="<?php echo site_url(); ?>/Home/laptop" id="cat0">Laptops</a>
                    <a class="list-group-item" href="<?php echo site_url(); ?>/Home/camera" id="cat1">Cameras</a>
                    <a class="list-group-item" href="<?php echo site_url(); ?>/Home/handphone" id="cat2">Handphone</a>
                    <a class="list-group-item" href="<?php echo site_url(); ?>/Home/acc" id="cat3">Accessories</a>
                    <a class="list-group-item" href="<?php echo site_url(); ?>/Home/fashion" id="cat4">Fashion</a>
                    <a class="list-group-item" href="<?php echo site_url(); ?>/Home/voucher" id="cat5">Vouchers</a>
                </ul>
            </div>
            <!-- Categories-->
            <div class="col-lg-9">
              <div class="row">
                <form method="post" action="<?php echo site_url('Home/addBrg'); ?>">
                <div class="col-sm-6">
                  <div class="card mb-30"><a class="card-img-tiles" href="#">
                      <div class="inner">
                        <div class="main-img"><img src="<?php echo base_url(); ?>img/voucher_1.png" style="max-height: 100%; max-width: 100%;padding-left: 22%;"></div>
                      </div></a>
                    <div class="card-body text-center">
                      <input class="card-title name nama1" name="nama" type="text" value="Battlenet" readonly="readonly">
                      <br>
                      <div class="form-group">
                        <select name="harga" class="form-control harga1">
                          <option value="73000">Rp. 73.000</option>
                          <option value="146000">Rp 146.000</option>
                          <option value="292000">Rp 292.000</option>
                        </select>
                      </div>
                      <br>
                      <input type="hidden" name="id" value="32" />
                      <input type="hidden" name="gambar" value="voucher_1.png" />
                      <input type="hidden" name="qty" value="1" />
                      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i class="fa fa-search"></i>View Product</button> -->
                      <input type="submit" class="btn btn-danger" id="button-cart1" value="Add to Cart">
                
                    </div>
                  </div>
                </div>
                </form>
                <form method="post" action="<?php echo site_url('Home/addBrg'); ?>">
                <div class="col-sm-6">
                  <div class="card mb-30"><a class="card-img-tiles" href="#">
                      <div class="inner">
                        <div class="main-img"><img src="<?php echo base_url(); ?>img/voucher_2.png" style="max-height: 100%; max-width: 100%;padding-left: 22%;"></div>
                      </div></a>
                    <div class="card-body text-center">
                      <input class="card-title name nama2" name="nama" type="text" value="Lyto & Gravindo" readonly="readonly">
                      <br>
                      <div class="form-group">
                        <select name="harga" class="form-control harga2">
                          <option value="10000">Rp 10.000</option>
                          <option value="20000">Rp 20.000</option>
                          <option value="35000">Rp 35.000</option>
                          <option value="65000">Rp 65.000</option>
                          <option value="175000">Rp 175.000</option>
                          <option value="490000">Rp 490.000</option>
                        </select>
                      </div>
                      <br>
                      <input type="hidden" name="id" value="33" />
                      <input type="hidden" name="gambar" value="voucher_2.png" />
                      <input type="hidden" name="qty" value="1" />
                      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i class="fa fa-search"></i>View Product</button> -->
                      <input type="submit" class="btn btn-danger" id="button-cart1" value="Add to Cart">
                
                    </div>
                  </div>
                </div>
                </form>
                <form method="post" action="<?php echo site_url('Home/addBrg'); ?>">
                <div class="col-sm-6">
                  <div class="card mb-30"><a class="card-img-tiles" href="#">
                      <div class="inner">
                        <div class="main-img"><img src="<?php echo base_url(); ?>img/voucher_3.png" alt="Category" style="max-height: 100%; max-width: 100%;padding-left: 22%;"></div>
                      </div></a>
                    <div class="card-body text-center">
                      <input class="card-title name nama3" name="nama" type="text" value="Garena" readonly="readonly">
                      <br>
                      <div class="form-group">
                        <select name="harga" class="form-control harga3">
                          <option value="10000">Rp 10.000</option>
                          <option value="20000">Rp 20.000</option>
                          <option value="48000">Rp 48.000</option>
                          <option value="95000">Rp 95.000</option>
                        </select>
                      </div>
                      <br>
                      <input type="hidden" name="id" value="34" />
                      <input type="hidden" name="gambar" value="voucher_3.png" />
                      <input type="hidden" name="qty" value="1" />
                      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i class="fa fa-search"></i>View Product</button> -->
                      <input type="submit" class="btn btn-danger" id="button-cart1" value="Add to Cart">
                    </div>
                  </div>
                </div>
                </form>
                <form method="post" action="<?php echo site_url('Home/addBrg'); ?>">
                <div class="col-sm-6">
                  <div class="card mb-30"><a class="card-img-tiles" href="#">
                      <div class="inner">
                        <div class="main-img"><img src="<?php echo base_url(); ?>img/voucher_4.png" alt="Category" style="max-height: 100%; max-width: 100%;padding-left: 22%;"></div>
                      </div></a>
                    <div class="card-body text-center">
                      <input class="card-title name nama4" name="nama" type="text" value="PSN Money Voucher (ID)" readonly="readonly">
                      <br>
                      <div class="form-group">
                        <select name="harga" class="form-control harga4">
                          <option value="140000">Rp 140.000</option>
                          <option value="255000">Rp 255.000</option>
                          <option value="653000">Rp 653.000</option>
                        </select>
                      </div>
                      <br>
                      <input type="hidden" name="id" value="35" />
                      <input type="hidden" name="gambar" value="voucher_4.png" />
                      <input type="hidden" name="qty" value="1" />
                      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i class="fa fa-search"></i>View Product</button> -->
                      <input type="submit" class="btn btn-danger" id="button-cart1" value="Add to Cart">
                    </div>
                  </div>
                </div>
                </form>
                <form method="post" action="<?php echo site_url('Home/addBrg'); ?>">
                <div class="col-sm-6">
                  <div class="card mb-30"><a class="card-img-tiles" href="#">
                      <div class="inner">
                        <div class="main-img"><img src="<?php echo base_url(); ?>img/voucher_5.png" alt="Category" style="max-height: 100%; max-width: 100%;padding-left: 22%;"></div>
                      </div></a>
                    <div class="card-body text-center">
                      <input class="card-title name nama5" name="nama" type="text" value="Megaxus" readonly="readonly">
                      <br>
                      <div class="form-group">
                        <select name="harga" class="form-control harga5">
                          <option value="11500">Rp 11.500</option>
                          <option value="23000">Rp 23.000</option>
                          <option value="57500">Rp 57.500</option>
                          <option value="115000">Rp 115.000</option>
                          <option value="225000">Rp 225.000</option>
                          <option value="550000">Rp 550.000</option>
                        </select>
                      </div>
                      <br>
                      <input type="hidden" name="id" value="36" />
                      <input type="hidden" name="gambar" value="voucher_5.png" />
                      <input type="hidden" name="qty" value="1" />
                      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i class="fa fa-search"></i>View Product</button> -->
                      <input type="submit" class="btn btn-danger" id="button-cart1" value="Add to Cart">
                    </div>
                  </div>
                </div>
                </form>
                <form method="post" action="<?php echo site_url('Home/addBrg'); ?>">
                <div class="col-sm-6">
                  <div class="card mb-30"><a class="card-img-tiles" href="#">
                      <div class="inner">
                        <div class="main-img"><img src="<?php echo base_url(); ?>img/voucher_6.png" alt="Category" style="max-height: 100%; max-width: 100%;padding-left: 22%;"></div>
                      </div></a>
                    <div class="card-body text-center">
                      <input class="card-title name nama6" name="nama" type="text" value="Steam Wallet IDR" readonly="readonly">
                      <br>
                      <div class="form-group">
                        <select name="harga" class="form-control harga6">
                          <option value="8000">Rp 8.000</option>
                          <option value="15000">Rp 15.000</option>
                          <option value="54000">Rp 54.000</option>
                          <option value="72000">Rp 72.000</option>
                          <option value="108000">Rp 108.000</option>
                          <option value="144000">Rp 144.000</option>
                          <option value="300000">Rp 300.000</option>
                          <option value="481000">Rp 481.000</option>
                          <option value="721000">Rp 721.000</option>
                        </select>
                      </div>
                      <br>
                      <input type="hidden" name="id" value="37" />
                      <input type="hidden" name="gambar" value="voucher_6.png" />
                      <input type="hidden" name="qty" value="1" />
                      <input type="submit" class="btn btn-danger" id="button-cart1" value="Add to Cart">
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
<!--- Footer -->
<div class="container" id="foot">
    <footer class="footer-bs">
        <div class="row">
          <div class="col-md-3 footer-brand animated fadeInLeft">
              <h2>PIRRShop</h2>
                <p>PIRRShop adalah sebuah toko online yang menyediakan berbagai jenis barang untuk memenuhi gaya hidup anda.</p>
                <p>© 2018 PIRRSHOP, All rights reserved</p>
            </div>
          <div class="col-md-4 footer-nav animated fadeInUp">
              <h4>Menu —</h4>
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