<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model 
{

	public function tambah($input)
	{
		$this->db->insert('user',$input);
		
	}

	public function ganti($input,$id)
	{
		# code...
		$this->db->where('id',$id);

		$insert=$this->db->update('user' , $input);
	}

	public function hapus($id='')
	{
		# code...
		$this->db->where('id',$id);
		$this->db->delete('user');
	}

	public function hapus2($id)
	{
		# code...
		$this->db->where('id',$id);

		$this->db->delete('user');
			
	}

	public function login($login)
	{
		# code...		
		return $this->db->get_where($login);
	}

}

/* End of file Modeluser.php */
/* Location: ./application/models/Modeluser.php */