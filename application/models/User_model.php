<?php 
class User_model extends CI_Model{
	public function register(){
		$data = array(
				'firstname' => $this->input->post('fname'),
				'lastname' => $this->input->post('lname'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password1'))
			);
			$insert = $this->db->insert('user', $data);
			
			return $insert;
	}

	public function login($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		$result = $this->db->get('user');
		if($result->num_rows() == 1){
			return $result->row(0);
		}else{
			return false;
		}
	}

	public function username_chosen($username){
		$this->db->where('username',$username);
		$result = $this->db->get('user');
		if($result->num_rows() == 1){
			return true;
		}else{
			return false;
		}
	}

}