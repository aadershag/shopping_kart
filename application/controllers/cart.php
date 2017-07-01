<?php
class Cart extends CI_Controller{
	public $paypal_data='';
	public $tax;
	public $shipping;
	public $total=0;
	public $grand_total;
	public function index()
	{
		$data['main_content']='cart';
		$this->load->view('main',$data);
	}
	public function add(){
		$data=array(
			'id' =>$this->input->post('item_number'),
			'qty' =>$this->input->post('qty'),
			'price' =>$this->input->post('price'),
			'name' =>$this->input->post('title')
			);
		$det=$this->product_model->get_details($this->input->post('item_number'));
		foreach ($this->cart->contents() as $items){
			if($items['id']==$this->input->post('item_number'))
				{$val=$items['qty'];break;}
		}
		if($this->input->post('qty') + $val>$det->stock)
		{
				?>
				<script type="">
					alert("Maximum items included. Nothing left in stock");
					sleep(10000);
				</script>
				<?php
				$data['qty']=$det->stock-$val;
				//redirect('products');
		}
		//else{
		
		$this->cart->insert($data);
		
		//print_r($data);
		redirect('products');
	//}
		
	}
	public function update(){
		$data=$_POST;
		$this->cart->update($data);
		redirect('cart','refresh');
	}
	
}
