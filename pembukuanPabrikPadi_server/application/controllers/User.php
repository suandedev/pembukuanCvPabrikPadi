<?php

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class User extends RestController
{
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->load->model('Catatan_model', 'catatan');
//		$this->methods['index_get']['limit'] = 20;
	}

	public function index_get()
	{
		$id = $this->get('id');
		if ($id === null) {
			$catatan = $this->catatan->getCatatanHarian();
		} else {
			$catatan = $this->catatan->getCatatanHarian($id);
		}

		if ($catatan) {
			$this->response( [
				'status' => true,
				'data' => $catatan
			], 200 );
		} else {
			$this->response( [
				'status' => false,
				'message' => 'id not found'
			], 404 );
		}
	}

	public function index_delete()
	{
		$id = $this->delete('id');

		if ($id === null) {
			$this->response( [
				'status' => false,
				'message' => 'provide an id'
			], 404 );
		} else {
			if ($this->catatan->deteleCatatanHarian($id) > 0) {
				//ok
				$this->response( [
					'status' => true,
					'id' => $id,
					'message' => 'deletes'
				], 200 );
			} else {
				//id not found
				$this->response( [
					'status' => false,
					'message' => 'id not found'
				], 404 );
			}
		}
	}

	public function index_post()
	{
		$data = [
			'hasil_pekerjaan' => $this->post('hasil_pekerjaan'),
			'tanggal' => $this->post('tanggal'),
			'kategori' => $this->post('kategori')
		];

		if ($this->catatan->createCatatanHarian($data) > 0) {
			//ok
			$this->response( [
				'status' => true,
				'message' => 'new catatan harian has been created'
			], 200 );
		} else {
			//id not found
			$this->response( [
				'status' => false,
				'message' => 'faild to create new catatan harian'
			], 404 );
		}
	}

	public function index_put()
	{
		$id = $this->put('id');
		$data = [
			'hasil_pekerjaan' => $this->put('hasil_pekerjaan'),
			'tanggal' => $this->put('tanggal'),
			'kategori' => $this->put('kategori')
		];
		
		if ($this->catatan->updateCatatanHarian($data, $id) > 0) {
			//ok
			$this->response( [
				'status' => true,
				'message' => 'data catatan harian has been updated'
			], 200 );
		} else {
			//id not found
			$this->response( [
				'status' => false,
				'message' => 'faild to update data'
			], 404 );
		}
	}
}
