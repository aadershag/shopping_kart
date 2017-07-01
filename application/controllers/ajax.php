<?php
class Ajax extends CI_Controller{
	function setSessionInController(){
		/*$id=$this->input->post('id');
		$name=$this->input->post('name');
		$email=$this->input->post('email');*/
		echo json_encode("true");
	}
	function wishlist_add(){
		$id=$this->input->post('id');
		$user_id=$this->session->userdata('id');
		echo "dasdasd";
		$query=$this->db->query("INSERT INTO wish_list (user_id,product_id,date_time) VALUES ('".$user_id."','".$id."','".$_SERVER['REQUEST_TIME']."')");
		echo $_SERVER['REQUEST_TIME'];

	}
	function wishlist_del(){
		$id=$this->input->post('id');
		$user_id=$this->session->userdata('id');
		$query=$this->db->query("DELETE  FROM wish_list where user_id = '".$user_id."' and product_id='".$id."' ");
		echo "success";
	}
}
?>