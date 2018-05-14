<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('Model_user');

	}

	// List all your items
	public function index()
	{
		$data['isi'] = $this->db->get('user');
		$this->load->view('views' , $data);
	}

	// Add a new item
	public function add()
	{
		$this->load->view('form-design/index.php');
	}

	public function masukkan()
	{
		# code...

		$input = array('username' => $this->input->post('username'),'password' => $this->input->post('password'),'fullname' => $this->input->post('fullname'),'level' => $this->input->post('level'));

		$this->Model_user->tambah($input);

		redirect('User','refresh');
	}
	//Update one item
	public function update($id = '')
	{
		
			# code...
			$this->db->where('id',$id);

			$data['isi'] = $this->db->get('user');//mengambil tabel user

			$this->load->view('update',$data);
	}

	public function gantikan($id = '')
	{
		# code...
		$input = array('username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'fullname' => $this->input->post('fullname'),
			'level' => $this->input->post('level'));

		$this->Model_user->ganti($input,$id);

		redirect('User','refresh');
	}
	public function delete( $id = '' )
	{  
		$this->db->WHERE('Id',$id);
        $this->db->delete('User');
		redirect('User','refresh');	
	}

	public function delete2()
	{  

		if($this->input->post('submit'))
		{

			$id = $this->input->post('id');

			$this->Model_user->hapus2($id);

			redirect('User','refresh');
		}
	}

	public function update2()//belum jadi
	{
		if ($this->input->post('submit')) {
			# code...
			$id = $this->input->post('id');

			$this->db->where('id',$id);

			$data['isi'] = $this->db->get('user');

			$this->load->view('update',$data);
		}
	}

	public function gantikan2($id = '')//belum jadi
	{
		
		
		if ($this->input->post('kirim'))
		{
			# code...
			$input = array('username' => $this->input->post('username'),'password' => $this->input->post('password'),'fullname' => $this->input->post('fullname'),'level' => $this->input->post('level'));


			$this->Model_user->ganti($input,$id);
			
		}		
	}

	public function Login()
	{
		# code...
		$this->load->view('Login');
	}

	public function login_action($value='')//belom jadi
	{
		# code...
		$login = array('username' => $this->input->post('username'),
					   'password' => $this->input->post('password'));

		$cek = $this->Model_user->login("user",$login)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $this->input->post('username'),
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);

			echo "Selamat Datang ";
 
			//redirect(base_url("user"));
		}
		else{
			echo "Username dan password salah !";
		}
	}
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
