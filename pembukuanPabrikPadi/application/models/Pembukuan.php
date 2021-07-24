<?php

use GuzzleHttp\Client;

class Pembukuan extends CI_Model
{
	private $_client;

	public function __construct()
	{
		$this->_client = new Client([
			'base_uri' => 'http://localhost/pembukuanCvPabrikPadi/pembukuanPabrikPadi_server/',
			'auth' => ['admin', '1234']
		]);
	}

	public function getPembukuan()
	{
		$response = $this->_client->request('GET', 'user', [
			'query' => [
				'pembukuan-key' => 'made123'
			]
		]);

		$result = json_decode($response->getBody()->getContents(), true);

		return $result['data'];
	}

	public function createPembukuanHarian()
	{
		$data = [
			'hasil_pekerjaan' => $this->input->post('hasil_perkerjaan'),
			'tanggal' => date('d/m/Y h:i:s'),
			'kategori' => $this->input->post('kategori'),
			'karyawan' => $this->input->post('karyawan'),
			'pembukuan-key' => 'made123'
		];

		$response = $this->_client->request('POST', 'user', [
			'form_params' => $data
		]);

		$result = json_decode($response->getBody()->getContents(), true);
		return $result;
	}

	public function deletePembukuanHarian($id)
	{
		$response = $this->_client->request('DELETE','user', [
			'form_params' => [
				'id' => $id,
				'pembukuan-key' => 'made123'
			]
		]);

		$result = json_decode($response->getBody()->getContents(), true);
		return $result;
	}

	public function getPembukuanHarianById($id)
	{
		$response = $this->_client->request('GET', 'user', [
			'query' => [
				'pembukuan-key' => 'made123',
				'id' => $id
			]
		]);

		$result = json_decode($response->getBody()->getContents(), true);
		return $result['data'][0];
	}

	public function editPembukuanHarian()
	{
		$data = [
			'hasil_pekerjaan' => $this->input->post('hasil_perkerjaan'),
			'tanggal' => date('d/m/Y h:i:s'),
			'kategori' => $this->input->post('kategori'),
			'karyawan' => $this->input->post('karyawan'),
			'id' => $this->input->post('id', true),
			'pembukuan-key' => 'made123'
			];

		$response = $this->_client->request('PUT', 'user', [
			'form_params' => $data
		]);

		$result = json_decode($response->getBody()->getContents(), true);
		return $result;
	}

	public function aksiTotalan()
	{
		$response = $this->_client->request('GET', 'user', [
			'query' => [
				'pembukuan-key' => 'made123'
			]
		]);

		$result = json_decode($response->getBody()->getContents(), true);

		 return $result['data'];

	}
}
