<?php

class Catatan_model extends CI_Model
{
	public function getCatatanHarian($id = null)
	{
		if ($id === null) {
			return $this->db->get('pembukuan_harian')->result_array();
		} else {
			return $this->db->get_where ('pembukuan_harian', ['id_pembukuan_harian' => $id])->result_array();
		}
	}

	public function deteleCatatanHarian($id)
	{
		$this->db->delete('pembukuan_harian', ['id_pembukuan_harian' => $id]);

		return $this->db->affected_rows();
	}

	public function createCatatanHarian($data)
	{
		$this->db->insert('pembukuan_harian', $data);
		return $this->db->affected_rows();
	}

	public function updateCatatanHarian($data, $id)
	{
		$this->db->update('pembukuan_harian', $data, ['id_pembukuan_harian' => $id]);
		return $this->db->affected_rows();
	}
}
