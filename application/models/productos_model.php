<?php
class Productos_model extends CI_Model{

	function crearProducto($datos_producto){
		$res = $this->db->insert('productos_tecnicos', $datos_producto);
		if($res==false) return 1;
		else return 0;
	}

	function getProductos(){
		$res = $this->db->get('productos_tecnicos');
		return $res->result();
	}
}
?>