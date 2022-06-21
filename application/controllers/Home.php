<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_pirrshop');
		
	}
	// TAMPILAN HALAMAN
	public function index()
	{
		$data['cart'] = $this->cart->contents();
	    $this->load->view('V_home',$data);
	}
	public function contact()
	{
		$data['cart'] = $this->cart->contents();
	    $this->load->view('contact',$data);
	}
	public function aboutus()
	{
		$data['cart'] = $this->cart->contents();
	    $this->load->view('about_us',$data);
	}
	public function signup()
	{
		$this->load->view('sign_up');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function laptop()
	{
		$data['product'] = $this->M_pirrshop->getProduct()->result();
	    $data['cart'] = $this->cart->contents();
	    $this->load->view('laptops',$data);
	}
	public function camera()
	{
		$data['product'] = $this->M_pirrshop->getProduct()->result();
	    $data['cart'] = $this->cart->contents();
	    $this->load->view('cameras',$data);
	}
	public function handphone()
	{
		$data['product'] = $this->M_pirrshop->getProduct()->result();
	    $data['cart'] = $this->cart->contents();
	    $this->load->view('handphones',$data);
	}
	public function acc()
	{
		$data['product'] = $this->M_pirrshop->getProduct()->result();
	    $data['cart'] = $this->cart->contents();
	    $this->load->view('accessories',$data);
	}
	public function fashion()
	{
		$data['product'] = $this->M_pirrshop->getProduct()->result();
	    $data['cart'] = $this->cart->contents();
	    $this->load->view('fashion',$data);
	}
	public function voucher()
	{
		$data['cart'] = $this->cart->contents();
	    $this->load->view('vouchers',$data);
	}
	public function profil($username)
	{
		$data['cart'] = $this->cart->contents();
		$data['user'] = $this->M_pirrshop->getData($username);
		$data['list'] = $this->M_pirrshop->getAkun();
	    $this->load->view('profil',$data);
	}
	// --------------------
	// LOG OUT
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}

	// SEARCH PRODUK
	public function cari()
	{
		$keyword = $this->input->get('cari', TRUE);
		$data['cart'] = $this->cart->contents();
		$data['produk'] = $this->M_pirrshop->cari($keyword);
		$data['title'] = $keyword;
		$this->load->view('search',$data);
	}

	// UPDATE PROFIL
	public function update_profil($username)
	{
		$data = array(
			'nama'=>$this->input->post('nama'),
			'email'=>$this->input->post('email'),
			'jk'=>$this->input->post('jk'),
			'address'=>$this->input->post('address')
		);
		$this->M_pirrshop->updatedata($data,$username);
		$this->session->set_flashdata('info','<div class="alert alert-success" role="alert"> Profil Berhasil Diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('Home/profil/'.$this->session->userdata('udahlogin'));
	}

	// SIGNUP
	public function form_sign()
	{
		$data = array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			'nama' =>$this->input->post('nama'),
			'email' =>$this->input->post('email'),
			'jk' =>$this->input->post('jk'),
			'address' =>$this->input->post('address'),
		);
		$this->M_pirrshop->daftar($data);
		$this->session->set_flashdata('info','<div class="alert alert-success" role="alert"> Registrasi Berhasil <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('Home');
	}

	// lOGIN
	public function form_log()
	{
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password',$this->input->post('password'));
		$u = $this->db->get('users');
		if($u->num_rows()==1)
		{
			$username = $this->input->post('username');
			if($username == 'admin')
			{
				$this->session->set_userdata('udahlogin',$username);
				$this->session->set_flashdata('info','<div class="alert alert-success" role="alert"> Sukses <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('Home/admin');
			}
			$this->session->set_userdata('udahlogin',$username);
			$this->session->set_flashdata('info','<div class="alert alert-success" role="alert"> Sukses <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('Home');
		}
		else
		{
			$this->session->set_flashdata('info','<div class="alert alert-danger" role="alert"> Username atau password salah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('Home/login');
		}
	}

	// HALAMAN ADMIN
	public function admin()
	{
		$data = array();
		$data['title'] = 'Admin';
		$data['cart'] = $this->cart->contents();
		$data['list'] = $this->M_pirrshop->getAkun();
		$this->load->view('V_admin',$data);
	}
	public function admBrg()
	{
		$data = array();
		$data['title'] = 'Admin';
		$data['cart'] = $this->cart->contents();
		$data['list'] = $this->M_pirrshop->dataProduk();
		$this->load->view('adm_barang',$data);
	}
	public function admAdd()
	{
		$data = array();
		$data['title'] = 'Admin';
		$data['cart'] = $this->cart->contents();
		$data['list'] = $this->M_pirrshop->dataProduk();
		$this->load->view('addBrg',$data);
	}
	public function admInput()
	{
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('harga','harga','required');
		$this->form_validation->set_rules('jenis','jenis','required');
		$this->form_validation->set_rules('keterangan','keterangan','required');

		$this->load->library('upload');
		$config['upload_path']   = './img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']      = '5000000';
		$config['max_width']     = 10000;
		$config['max_height']    = 10000;
		$temp = explode(".", $_FILES["foto"]["name"]);
		$nama_file = "pic_".time().'.'.end($temp);
		$config['file_name']     = $nama_file;

		$this->upload->initialize($config);
		if ($_FILES['foto']['name']) {

			$file_name = "foto";
	 		$foto = $this->upload->data();
			if($this->form_validation->run() && $this->upload->do_upload($file_name)){
				$data = ([
					'nama'=>$this->input->post('nama'),
					'harga'=>$this->input->post('harga'),
					'jenis'=>$this->input->post('jenis'),
					'keterangan'=>$this->input->post('keterangan'),
					'gambar'=>$foto['file_name']]);

				$this->M_pirrshop->add_brg($data);
				$this->session->set_flashdata('info','<div class="alert alert-success" role="alert"> Input Barang Berhasil <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('Home/admBrg');
			}
			else
			{
				$this->session->set_flashdata('info','<div class="alert alert-danger" role="alert"> Input Barang Gagal : Format file salah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('Home/admBrg');
			}
		}
	}
	// ---------------
	// CONTACT US
	public function addContact()
	{
		if($this->session->userdata('udahlogin')===null)
		{
			redirect('Home/login');
		}
		$data = array(
			'nama'=>$this->input->post('nama'),
			'email'=>$this->input->post('email'),
			'subject'=>$this->input->post('subject'),
			'message'=>$this->input->post('message'),
		);
		$this->M_pirrshop->add_contact($data);
		$this->session->set_flashdata('info','<div class="alert alert-success" role="alert"> Berhasil <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('Home');
	}

	// ADD BARANG KE CART
	public function addBrg()
	{
		if($this->session->userdata('udahlogin')===null)
		{
			redirect('Home/login');
		}
		$data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('nama'),
			'price' => $this->input->post('harga'),
			'gambar' => $this->input->post('gambar'),
			'qty' =>$this->input->post('qty')
			);
		$this->cart->insert($data);
		$this->session->set_flashdata('info','<div class="alert alert-success" role="alert"> Tambah Barang Berhasil <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('Home');

	}

	// DELETE PRODUK
	public function delProduct($id)
	{
		$this->M_pirrshop->delProduct($id);
		$this->session->set_flashdata('info','<div class="alert alert-success" role="alert"> Hapus Berhasil <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('Home/admBrg');	
	}

	// DELETE PRODUK DARI CART
	public function del_brg($rowid)
	{
		if ($rowid =="semua"){
        	$this->cart->destroy();
      	}else{
        	$data = array('rowid' => $rowid,
                  'qty' =>0);
        	$this->cart->update($data);
      	}
		$this->session->set_flashdata('info','<div class="alert alert-success" role="alert"> Hapus Berhasil <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('Home');
	}
  public function ubah(){
    $cart_info = $_POST['cart'] ;
      foreach( $cart_info as $id => $cart)
      {
        $rowid = $cart['rowid'];
        $price = $cart['price'];
        $gambar = $cart['gambar'];
        $amount = $price * $cart['qty'];
        $qty = $cart['qty'];
        $data = array('rowid' => $rowid,
                'price' => $price,
                'gambar' => $gambar,
                'amount' => $amount,
                'qty' => $qty);
        $this->cart->update($data);
      }
    redirect('Home');
  }
}
