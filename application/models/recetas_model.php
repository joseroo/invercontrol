<?php
class Recetas_model extends CI_Model{

	function getAgricultores(){
		$this->db->select('id, nombre, apellidos');
		$res = $this->db->get('agricultores');
		return $res->result();
	}

	function getProductos(){
		$this->db->select('id, nombre');
		$res = $this->db->get('productos_tecnicos');
		return $res->result();
	}
}
?>