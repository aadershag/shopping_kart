<?php 
class Products extends CI_Controller{
	public function index(){
		$data['products']=$this->product_model->get_products();
		$data['main_content']='products';
		$this->load->view('main',$data);
	}
	public function details($id){
		$data['products']=$this->product_model->get_details($id);
		$data['main_content']='details';
		$this->load->view('main',$data);
	}
	public function category($category_id){
		$data['products']=$this->product_model->get_category($category_id);
		$data['main_content']='category';
		$this->load->view('main',$data);
	}
	public function cart(){

		$data['main_content']='cart';
		$this->load->view('main',$data);
	}
	public function place_order(){
			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('address','Address','required');
			$this->form_validation->set_rules('district','District','required');
			$this->form_validation->set_rules('pincode','Pincode','required');
			$this->form_validation->set_rules('number','Mobile Number','required');
			if($this->form_validation->run()==FALSE){
			$data['main_content']='place_order';
			$this->load->view('main',$data);
			}
			else{
				//$this->load->view('formsuccess');
				//echo 'success';
			  if($this->product_model->place_order()){
			  	//$this->session->set_flashdata('','You are now registered');
			  	redirect('products/payment');
			  }
			}
	}
	public function payment(){
		$data['main_content']='place_order';
		$this->load->view('main',$data);
	}
	public function orders(){
		$data['products']=$this->product_model->get_orders();
		$data['main_content']='order_view';
		$this->load->view('main',$data);
	}
	public function wishlist(){
		$data['products']=$this->product_model->get_wishlist();
		$data['main_content']='wish_view';
		$this->load->view('main',$data);
	}
}
