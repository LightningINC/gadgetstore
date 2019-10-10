<?php 
class Cart extends CI_Controller{

	public function index(){

		
		$this->form_validation->set_rules('email','Email', 'required');
		$this->form_validation->set_rules('phone','Number', 'required|numeric');
		$this->form_validation->set_rules('address','Address', 'required');
		$this->form_validation->set_rules('city','City', 'required');
		$this->form_validation->set_rules('state','State', 'required');
		$this->form_validation->set_rules('zip','Zipcode', 'required|numeric');
		if($this->form_validation->run() == FALSE){
			$data['main_content'] = 'cart';
			$data['validated'] = false;
			$this->load->view('layouts/main', $data);
		}else{
			$data['email']  = $this->input->post('email');
			$data['phone']  = $this->input->post('phone');
			$data['address'] = $this->input->post('address');
			$data['validated'] = true;
			$data['main_content'] = 'cart';
			$this->load->view('layouts/main', $data);

			// $order_data = array(
			// 	'product_id' => $item_id,
			// 	'user_id' => $this->session->userdata('user_id'),
			// 	'transaction_id'=>0,
			// 	'qty'=>
			// 	'price' =>
			// 	'address1' =>  $this->input->post('address');
			// 	'address2'
			// 	'city' =>
			// 	'state' =>
			// 	'zipcode' =>
			// );
		}
		

		
	}

	public function add(){
		//item 
		$data = array(
			'id' => $this->input->post('item_number'),
			'qty' => $this->input->post('qty'),
			'price' => $this->input->post('price'),
			'name' => $this->input->post('title')
		);
		
		//insert item into cart

		$this->cart->insert($data);
		redirect(base_url());

	}

	public function update($j){
		$i = 0;

			while($i <= $j) {
				$rid = $i."rowid";
				$qt = $i."qty";
				$data = array(
				'rowid' =>$this->input->post($rid),
				'qty' => $this->input->post($qt) 
				);
				$this->cart->update($data);
				$i++;
			}
			$locy = '<script> location.reload</script>';
			redirect('cart');
			return $locy;



	}

	public function remove($rowid){
		$this->cart->remove($rowid);
		redirect('cart','refresh');
	}

	public function clear_cart($in_cart = null){
		$this->cart->destroy();
		redirect('cart','refresh');
	}
	public function total_item(){
		echo $this->cart->total_items();
	}
	public function process_payment(){
		
	}
	public function paid(){
		$this->cart->destroy();
		$this->session->set_flashdata('paid','thank you for shopping with us');
		redirect(base_url());
	}
		
}