<?php
class Tecnico_model extends CI_Model{
	function buscar($sw, $campo){
		switch($sw){
			case 1:
				$this->db->like('nombre', $campo);
				$this->db->or_like('apellidos', $campo);
				$res = $this->db->get('agricultores');
				return $res;
				break;
			case 2:
				$this->db->like('num_agricultor', $campo);
				$res = $this->db->get('agricultores');
				return $res;
				break;
			case 3:
				$this->db->like('nombre', $campo);
				$res = $this->db->get('productos_tecnicos');
				return $res;
				break;
			case 4:
				$this->db->like('fecha_tratamiento', $campo);
				$res = $this->db->get('dosis');
				return $res;
				break;
			case 5:
				$this->db->like('nombre', $campo);
				$res = $this->db->get('fincas');
				return $res;
				break;
			case 6:
				$this->db->like('nombre', $campo);
				$res = $this->db->get('invernaderos');
				return $res;
				break;
		}
	}
}
?>