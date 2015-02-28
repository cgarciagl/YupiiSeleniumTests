<?php

include (APPPATH . '/controllers/canciones.php');

class CancionesdeEminem extends Canciones {

	function __construct() {
		parent::__construct();
		$this->setTitle('Canciones de Eminem');
	}

	function _filters() {
		parent::filters();
		$this->db->where('art_nombre', 'EMINEM');
	}

	function _beforeDelete() {
		parent::beforeDelete();
		raise('No se puede borrar ninguna');
	}

	function ValidasolocancionesdeEminem() {
		if (new_value('art_nombre') != 'EMINEM') {
			raise('Solo se admiten canciones de EMINEM');
		}
	}

	function _beforeInsert() {
		parent::beforeInsert();
		$this->ValidasolocancionesdeEminem();
	}

	function _beforeUpdate() {
		parent::beforeInsert();
		$this->ValidasolocancionesdeEminem();
	}

}