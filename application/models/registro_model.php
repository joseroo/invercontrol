<?php
class Registro_model extends CI_Model{
	function getCooperativas(){
		$cooperativas = $this->db->get('cooperativas');
		return $cooperativas->result();
	}
	function registro($datos){
		$res = $this->db->insert('tecnicos', $datos);
		if($res==false) return 1;
		else return 0;
	}
}
?>