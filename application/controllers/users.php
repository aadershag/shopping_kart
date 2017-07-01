<?php
	class Users extends CI_Controller{
		public function register()
		{
			//validation rule
			$this->form_validation->set_rules('firstname','First Name','required');
			$this->form_validation->set_rules('lastname','Last Name','required');
			$this->form_validation->set_rules('username','User Name','required');
			$this->form_validation->set_rules('emailadd','Email Address','required|valid_email');
			$this->form_validation->set_rules('password1','Password','required');
			$this->form_validation->set_rules('password2','Confirm Password','required|matches[password1]');
			if($this->form_validation->run()==FALSE){
			$data['main_content']='register';
			$this->load->view('main',$data);
			}
			else{
				//$this->load->view('formsuccess');
				//echo 'success';
			  if($this->User_model->register()){
			  	$this->session->set_flashdata('registered','You are now registered');
			  	redirect('index.php/products');
			  }
			}
		}
		public function order()
		{
			$data['main_content']='order';
			$this->load->view('main',$data);
		}
		public function login(){
			$this->form_validation->set_rules('username','UserName','required');
			$this->form_validation->set_rules('password','Password','required');
			$username=$this->input->post('username');//=post['username']
			$password=($this->input->post('password'));
			if($this->form_validation->run()==FALSE){
				die('invalid Username');
			}
			$user_id=$this->User_model->login($username,$password);
			if($user_id) {
				$data=array(
					'id' => $user_id,
					'username' => $username,
					'logged_in' => true
					);
				//set session userdata
				$this->session->set_userdata($data);
				//$this->session->set_userdata()
				//set message
				$this->session->set_flashdata('pass_login','You are logged in');
				redirect('products');
			}
				else{
					//set error
					$this->session->set_flashdata('fail_login','Sorry, the login failed');
					redirect('products');
				}
			}
		public function logout(){
			//unset data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');
			$this->session->sess_destroy();
			redirect('products');
			//header("Refresh:0");

		}
		public function admin_login(){
			//$data['main_content']='admin_login';
			$this->load->view('admin_login');
		}
		public function admin(){
			$this->form_validation->set_rules('username','UserName','required');
			$this->form_validation->set_rules('password','Password','required');
			$username=$this->input->post('username');//=post['username']
			$password=($this->input->post('password'));
			if($this->form_validation->run()==FALSE){
				//die('invalid Username');
			}
			$user_id=$this->User_model->admin_login($username,$password);
			if($user_id) {
				$data=array(
					'id' => $user_id,
					'username' => $username,
					'logged_in' => true
					);
				//set session userdata
				$this->session->set_userdata($data);
				//$this->session->set_userdata()
				//set message
				$this->session->set_flashdata('pass_login','You are logged in');
				$this->load->view('admin_home');
			}
				else{
					//set error
					$this->session->set_flashdata('fail_login','Sorry, the login failed');
					$this->load->view('admin_login');
				}
		}
	}