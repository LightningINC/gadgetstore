<?php 
class Users extends CI_Controller{

	public function register(){

		$this->form_validation->set_rules('fname','First name', 'trim|required');
		$this->form_validation->set_rules('lname','Last name', 'trim|required');
		$this->form_validation->set_rules('email','Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('username','Username', 'trim|required|min_length[4]|max_length[16]|callback_username_check');
		$this->form_validation->set_rules('password1','Password', 'trim|required|min_length[4]|max_length[50]');
		$this->form_validation->set_rules('password2','Confirm password', 'trim|required|matches[password1]');

		if($this->form_validation->run() == FALSE){
			$data['main_content'] = 'register';
			$this->load->view('layouts/main',$data);
		}else{
				if($this->User_model->register()){
				$this->session->set_flashdata('registered','You are now registered, You can now login');
				redirect('users/login');
				}
			
		}
		
	}
	public function username_check($str)
        {
                if ($this->User_model->username_chosen($str))
                {
                        $this->form_validation->set_message('username_check', 'This Username has been chosen');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }

	public function login(){

		$this->form_validation->set_rules('username','Username', 'trim|required|min_length[4]|max_length[16]');
		$this->form_validation->set_rules('password','Password', 'trim|required|min_length[4]|max_length[50]');	

		if($this->form_validation->run() == FALSE){
			$data['main_content'] = 'login';
			$this->load->view('layouts/main',$data);
			} else {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$user_id = $this->User_model->login($username, $password);


			if($user_id){
				$data = array(
					'user_id' => $user_id->username,
					'username' => $user_id->username,
					'firstname' => $user_id->firstname,
					'lastname' => $user_id->lastname,
					'logged_in' => true
				);

				$this->session->set_userdata($data);

				$this->session->set_flashdata('pass_login','You are logged in');
				redirect('products');
			}else{
				$this->session->set_flashdata('fail_login','log in fail: Invalid Username or Password');
				redirect('users/login');
			}
		}
		
	}

	public function logout(){
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('logged_in');

		$this->session->sess_destroy();

		redirect('products');
	}
}