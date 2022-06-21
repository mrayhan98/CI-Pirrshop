<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>

<style>	
body{
	background-image: url(<?php echo base_url(); ?>image/blueprint.jpg);
	background-size: cover;
	padding: 0;
	margin: 0;
}

/*bagian halaman login*/
#form{
	background-color: gainsboro;
	border-top-left-radius: 4px;
	padding: 1%;
	border-radius: 1%;
	font-family: "Roboto";
	background-size: cover;
	margin-top: 5%;
	height: 30%; 
	width: 50%;
	box-shadow: 2px 2px 2px 2px white;
}

#tabel{
	height: 50%;
	width: 50%;
}

#logo{
	padding-top: 2%;
	padding-bottom: 2%;
	height: 20%;
	width: 20%;
	position: relative;
}

#welcome{
	font-family: calibri;
	font-size: 30px;
	padding-top: 2%;
	padding-bottom: 6%;
}

#inputEmail{
	border: 0;
	box-shadow: none;
	border-bottom: 3px solid blue;
  	margin-bottom: 4%;
}

#inputPwd{
	border: 0;
  	box-shadow: none; 
	border-bottom: 3px solid blue;
}

#tombol{
	color: white;
	margin-top: 5%;
	font-family: calibri;
	font-style: bold;
	font-size: 20px;
	padding-left: : 6%;
	padding-right: 6%;
}

#copyright{
	font-family: calibri;
	font-size: 12px;
	padding-top: 4%;
	padding-bottom: 2.3%;
}

#link{
	text-decoration: none;
}
</style>

<!-- :::::::::::::::::::::::::BAGIAN LOGIN::::::::::::::::::::::::: -->
<body>
	<center>
	<?php echo $this->session->flashdata('info'); ?>
	<form id="form" method="post" action="<?php echo site_url('Home/form_log'); ?>">
		<table id="tabel">
			<center><img id="logo" src="<?php echo base_url(); ?>image/bag.png"></center>
			<center><p id="welcome">Selamat datang di PIRRShop, silakan login</p></center>

			<tr>
			<td><input type="text" id="inputEmail" class="form-control" name="username" placeholder="Masukkan Username" required autofocus></td>
			</tr>
			
			<tr>
			<td><input type="password" id="inputPwd" class="form-control" name="password" placeholder="Masukkan kata sandi" required></td>
			</tr>
			
			<tr>
			<td colspan="3"><button id="tombol" class="btn btn-lg btn-primary btn-block" type="submit"><b>LOGIN</b></button></td>
			</tr>

			<tr>
				<td colspan="3"><center><p id="copyright">Copyright &copy; 2018 - All Right Reserved &bull; Design by<a id="link" href="<?php echo site_url(); ?>/Home/index/"> PIRRShop</a></p></center></td>
			</tr>
</table>
</form>
</center>
</body>
</html>