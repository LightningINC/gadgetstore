<?php 
class Product_model extends CI_Model{
	public function get_products($pagelimit,$limitStart){
		$this->db->select('*');
		$this->db->from('products');
		$this->db->limit($pagelimit,$limitStart);
		$query = $this->db->get();
		return $query->result();
	}	

	public function get_product_details($id){
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('id',$id);
		$query = $this->db->get();


		return $query->row();
	}

	public function add_order($order_data){
		$insert = $this->db->insert('orders', $order_data);
		return $insert;

	}

	public function get_product_category($id){
		$this->db->select('P.*',' COUNT(C.id) as total');
		$this->db->from('products AS P');
		$this->db->join('categories AS C','P.category_id = C.id', 'INNER');
		$this->db->where('C.id',$id);
		$query = $this->db->get();

		return $query->result();
	}
}