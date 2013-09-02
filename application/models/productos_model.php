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

	function getProductoPorId($id){
		$this->db->where('id', $id);
		$res = $this->db->get('productos_tecnicos');
		return $res->result();
	}

	function modProducto($datos_producto){
		$this->db->where('id', $datos_producto['id']);
		$res = $this->db->update('productos_tecnicos', $datos_producto);
		return ($res == false) ? 1 : 0;
	}

	function borrarProducto($id) {
		$data = array('estado' => '0');
		$this->db->where('id', $id);
		$res = $this->db->update('productos_tecnicos', $data);
		return ($res == false) ? 1 : 0;
	}

	function restaurarProducto($id) {
		$data = array('estado' => '1');
		$this->db->where('id', $id);
		$res = $this->db->update('productos_tecnicos', $data);
		return ($res == false) ? 1 : 0;
	}
}
?>