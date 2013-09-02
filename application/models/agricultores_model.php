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

	function getAgricultorPorId($id) {
		$this->db->where('id', $id);
		$res = $this->db->get('agricultores');
		return $res->result();
	}

	function modAgricultor($datos_agricultor) {
		$this->db->where('id', $datos_agricultor['id']);
		$res = $this->db->update('agricultores', $datos_agricultor);
		return ($res == false) ? 1 : 0;
	}

	function crearAgricultor($datos_agricultor) {
		$res = $this->db->insert('agricultores', $datos_agricultor);
		if($res==false) return 1;
		else return 0;
	}
}
?>