<?php

class Recetas_model extends CI_Model{

	function getAgricultores(){
		$this->db->select('id, nombre, apellidos');
		$res = $this->db->get('agricultores');
		return $res->result();
	}

	function getProductos(){
		$this->db->select('id, nombre, unidad_medida');
		$res = $this->db->get('productos_tecnicos');
		return $res->result();
	}

	function getRecetas(){
		$recetas = $this->db->get('recetas');
		foreach($recetas->result() as $row){

			$this->db->where('id_receta', $row->id);
			$productos = $this->db->get('recetas_productos');
			$p = Array();
			$prod = Array();
			foreach($productos->result() as $producto){	
				$p['id_producto'] = $producto->id_producto;
				$p['cc_dosis'] = $producto->cc_dosis;
				$prod[] = $p; 
			}
			$row->lista_productos = $prod;		
		}
		return $recetas;
	}
}
?>