<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// $this->load->model('common_model');
		// $this->load->model('product_model');
		// $this->load->model('sell_model');
		$this->load->model('Packages_model');
	}

	public function index(){
	//	echo "sss";exit;
		$content_data = array();
		$curr = $this->Packages_model->currFetch();
		$content_data['curr'] = $curr;
		$data['content'] = $this->load->view('admin/dashboard', $content_data, TRUE);
		$this->load->view('admin/layout', $data);
	}

	public function update($value='')
	{
		$id  = $this->input->post('id');
		$val = $this->input->post('val');

		$where = ['id' => $id];
		$data  = array('curr_rate' => number_format($val,2));
		$this->Packages_model->currUpdate($data, $where);
		$value = $this->Packages_model->currRow($where);

		echo currency(1, $value[0]['curr_rate'], $value[0]['curr_name']);
	}
}