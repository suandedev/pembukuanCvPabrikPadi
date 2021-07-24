<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->load->model('pembukuan', 'dataPembukuan');
	}

	public function index()
	{
		$data['pembukuan_harian'] = $this->dataPembukuan->getPembukuan();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_catatan_harian()
	{
		$this->dataPembukuan->createPembukuanHarian();
		redirect('home');
	}

	public  function hapus_catatan_harian($id)
	{
		$this->dataPembukuan->deletePembukuanHarian($id);
		redirect('home');
	}

	public function edit_catatan_harian($id)
	{
		$data['harian'] = $this->dataPembukuan->getPembukuanHarianById($id);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit', $data);
		$this->load->view('templates/footer');
	}

	public function aski_edit_catatan_harian()
	{
		$this->dataPembukuan->editPembukuanHarian();
		redirect('home');
	}

	public  function totalan()
	{
		$data['totalan'] = $this->dataPembukuan->aksiTotalan();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('totalan', $data);
		$this->load->view('templates/footer');
	}
}
