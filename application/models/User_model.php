<?php 
class User_model extends CI_Model{
	public function register(){
		$data=array(
			'first_name' => $this->input->post('firstname'),
			'last_name' => $this->input->post('lastname'),
			'email'  => $this->input->post('emailadd'),
			'username'  => $this->input->post('username'),
			'password' =>md5($this->input->post('password1'))
			);
		$insert=$this->db->insert('users',$data);
		return $insert;
	}
	public function login($username,$password){
		//$this->db->where('username',$username);
		//$this->db->where('password',$password);

		//$result=$this->db->get('users');
		$this->db->select('id');
		$this->db->from('users');
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));
		$query1=$this->db->get();
		if($query1->num_rows()>0){
			return $query1->row_array()['id'];
		}
		else{
			return false;
		}
	}
	public function admin_login($username,$password){
		//$this->db->where('username',$username);
		//$this->db->where('password',$password);

		//$result=$this->db->get('users');
		$this->db->select('id');
		$this->db->from('admin');
		$this->db->where('username',$username);
		$this->db->where('password',($password));
		$query1=$this->db->get();
		if($query1->num_rows()>0){
			return $query1->row_array()['id'];
		}
		else{
			return false;
		}
	}
}