<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/page.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>js/action.js"></script>
</head>
<body>
  <!-- Header -->
    <nav class="navbar navbar-inverse" id="navbar">
      <div class="container">
        <?php echo $this->session->flashdata('info'); ?>
        <div class="row row1">
            <ul class="largenav pull-right">
                <li class="upper-links"><a class="links" href="<?php echo site_url(); ?>/Home/admin/">List Pelanggan</a></li>
                |
                <li class="upper-links"><a class="links" href="<?php echo site_url(); ?>/Home/admBrg/">List Barang</a></li>
                |
                <li class="upper-links"><a class="links" href="<?php echo site_url(); ?>/Home/admAdd/">Add Barang</a></li>
                |
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
      <li class="upper-links"><a class="links" href="index.html">Home</a></li><br>
      <li class="upper-links"><a class="links" href="contact.html">Contact</a></li><br>
      <li class="upper-links"><a class="links" href="about_us.html">About Us</a></li><br>
      <li class="upper-links"><a class="links" href="sign_up.html">Sign Up</a></li><br>
      <li class="upper-links"><a class="links" href="login.html">Login</a></li><br>
      <li class="upper-links dropdown"><a class="links" href="#">Products</a>
          <ul class="dropdown-menu">
              <li class="profile-li"><a class="profile-links" href="laptops.html">Laptops</a></li>
              <li class="profile-li"><a class="profile-links" href="cameras.html">Cameras</a></li>
              <li class="profile-li"><a class="profile-links" href="handphones.html">Handphones</a></li>
              <li class="profile-li"><a class="profile-links" href="accessories.html">Accessories</a></li>
              <li class="profile-li"><a class="profile-links" href="fashion.html">Fashion</a></li>
              <li class="profile-li"><a class="profile-links" href="vouchers.html">Vouchers</a></li>
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
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<Context>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-md-6">
                      <?php echo form_open_multipart('Home/admInput');?>
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" name="nama" id="name" placeholder="Input Product Name" />
                        </div>
                        <div class="form-group">
                            <label for="name">
                                Price</label>
                            <input type="text" class="form-control" name="harga" id="name" placeholder="Input Product Price" pattern="[0-9]+" />
                        </div>
                        <div class="form-group">
                            <label for="name">Type</label>
                            <select class="form-control" name="jenis">
                              <option value="acc">Accessories</option>
                              <option value="cam">Camera</option>
                              <option value="lap">Laptop</option>
                              <option value="hp">Handphone</option>
                              <option value="fashion">Fashion</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="name">Description</label>
                            <textarea name="keterangan" placeholder="Input Product Description" required=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">
                                Photo</label>
                            <input class="form_control" type="file" name="foto" size="20" required="" />
                            <p style="color: red;">* max 2MB</p>
                        </div>
                        <button type="submit" class="btn btn-primary" id="btnContactUs" value="Submit">Submit</button>
                    </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<Footer>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
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
                        <li><a href="laptops.html">Laptops</a></li>
                        <li><a href="cameras.html">Cameras</a></li>
                        <li><a href="handphones.html">Smartphones</a></li>
                        <li><a href="accessories.html">Watches</a></li>
                        <li><a href="fashion.html">Fashion</a></li>
                        <li><a href="vouchers.html">Vouchers</a></li>
                    </ul>
                </div>
              <div class="col-md-6">
                    <ul class="list">
                        <li><a href="about_us.html">About Us</a></li>
                        <li><a href="contact.html">Contacts</a></li>
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