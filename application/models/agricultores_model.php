<?php
class Agricultores_model extends CI_Model{
	function getAgricultores($id){
		$this->db->where('id_tecnico', $id);
		$res = $this->db->get('agricultores');
		return $res->result();
	}

	function borrarAgricultor($id) {
		$data = array('estado' => '0');
		$this->db->where('id', $id);
		$res = $this->db->update('agricultores', $data);
		return ($res == false) ? 1 : 0;
	}

	function restaurarAgricultor($id) {
		$data = array('estado' => '1');
		$this->db->where('id', $id);
		$res = $this->db->update('agricultores', $data);
		return ($res == false) ? 1 : 0;
	}
}
?>