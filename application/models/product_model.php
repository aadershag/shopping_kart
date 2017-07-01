<?php
class Product_model extends CI_Model{
	public function get_products(){
		$this->db->select('*');
		$this->db->from('products');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_details($id){
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row();
	}
	public function get_categories(){
		$this->db->select('*');
		$this->db->from('categories');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_popular()
	{
		$result=$this->db->query("SELECT * from products WHERE id IN(SELECT product_id from order_product group by product_id order BY sum(quantity) DESC) LIMIT 5");
		/*$this->db->from('orders AS O');
		$this->db->join('products AS P','O.product_id=P.id','INNER');
		$this->db->group_by('O.product_id');
		$this->db->order_by('total','desc');*/
		//$query=$this->db->get();
		return $result->result();
	}
	public function get_category($category_id)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('category_id',$category_id);
		$query=$this->db->get();
		return $query->result();
	}
	public function get_orders()
	{
		$query=$this->db->query("SELECT * from order_product as o join products as p on o.product_id = p.id where o.order_id in (select id from orders where user_id=".$this->session->userdata('id')." )");
		return $query->result();
	}
	public function place_order()
	{
		$data=array(
			'name' => $this->input->post('name'),
			'address' => $this->input->post('address'),
			'district'  => $this->input->post('district'),
			'pincode'  => $this->input->post('pincode'),
			'state' =>($this->input->post('state')),
			'mobile_no' =>($this->input->post('number'))
			);
		$insert=$this->db->insert('address',$data);
		$result=$this->db->query("SELECT id from address where address LIKE '".$this->input->post('address')."' LIMIT 1");
		$res=$result->result_array();
		$addressId=0;
		foreach($res as $r){
			$addressId=$r['id'];
		}
		$userId=$this->session->userdata('id');
		$result2=$this->db->query("INSERT into orders (address_id, user_id) values ('".$addressId."','".$userId."')");
		$order_Id=$this->db->query("SELECT id from orders where user_id LIKE '".$userId."'  ORDER BY id DESC LIMIT 1");
		$order=$order_Id->result_array();
		$order_id=0;
		foreach($order as $o){
			$order_id=$o['id'];

		}
		//$i=1;
		foreach ($this->cart->contents() as $items){
			
			$result2=$this->db->query("INSERT into order_product (order_id, product_id,quantity) values ('".$order_id."','".$items['id']."','".$items['qty']."')");
			$result3=$this->db->query("UPDATE products SET stock = stock - ".$items['qty']." WHERE id = ".$items['id']." ");
			
		}


		return $insert;
	}
	public function wish($id){
		$userId=$this->session->userdata('id');
		$query=$this->db->query("SELECT * FROM wish_list where product_id = ".$id." AND user_id= ".$userId." ");
		return $query->result();
	}
	public function get_wishlist()
	{
		$query=$this->db->query("SELECT * from products as p where p.id in (select product_id from wish_list where user_id=".$this->session->userdata('id')." ORDER BY date_time)");
		return $query->result();
	}
}