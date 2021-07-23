<?php

class Pembukuan extends CI_Model
{
	public function getPembukuan()
	{
		return $this->db->get('pembukuan_harian')->result_array();
	}

	public function createPembukuanHarian($data)
	{
		$this->db->insert('pembukuan_harian', $data);
		return $this->db->affected_rows();
	}

	public function deleteCatatanHarian($id)
	{
		$this->db->delete('pembukuan_harian', ['id_pembukuan_harian' => $id]);
		return $this->db->affected_rows();
	}
}
