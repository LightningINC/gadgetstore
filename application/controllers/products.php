<?php 
class Products extends CI_Controller{
	public function index(){
		$data['products'] = $this->Product_model->get_products(8,1);
		//load view
		$data['main_content'] = 'products';
		$this->load->view('layouts/main', $data);
	}

	public function details($id){
		$data['products'] = $this->Product_model->get_product_details($id);
		//load view
		$data['main_content'] = 'details';
		$this->load->view('layouts/main', $data);
	}

	public function category($id){
		$data['products'] = $this->Product_model->get_product_category($id);
		//load view
		$data['main_content'] = 'products';
		$this->load->view('layouts/main', $data);
	}

	public function Page($pa){
		$pagestart= ($pa * 8+1);
		$pagelimit= ($pa + 8-1);

		$data['products'] = $this->Product_model->get_products($pagelimit,$pagestart);
		//load view
		$data['main_content'] = 'products';
		$this->load->view('layouts/main', $data);
	}
}