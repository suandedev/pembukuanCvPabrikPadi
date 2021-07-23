<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Home extends RestController
{
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->load->model('pembukuan', 'dataPembukuan');
	}

	public function index_get()
	{
		$data['pembukuan_harian'] = $this->dataPembukuan->getPembukuan();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('index', $data);
		$this->load->view('templates/footer');
	}

	public function index_post()
	{
		$data = [
			'hasil_pekerjaan' => $this->input->post('hasil_perkerjaan'),
			'tanggal' => $this->input->post('tanggal'),
			'kategori' => $this->input->post('kategori')
		];
		if ($this->dataPembukuan->createPembukuanHarian($data) > 0) {
			//ok
			$this->index_get();
		} else {
			//id not found
			$this->response( [
				'status' => false,
				'message' => 'gagal tambah data pembukuan harian'
			], 404 );
		}
	}

	public  function index_delete()
	{
		$id = $this->delete('id_pembukuan_harian');

		if ($id === null) {
			$this->response([
				'status' => false,
				'message' => 'provide an id'
			], 404);
		} else {
			if ($this->dataPembukuan->deleteCatatanHarian($id) > 0) {
				//ok
				$this->index_get();
			} else {
				//id not found
				$this->response([
					'status' => false,
					'message' => 'id not found'
				], 404);
			}
		}
	}

}
