<?php

class InitTest extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$sql = file_get_contents('./test.sql');
		foreach (explode(";\n", $sql) as $sql) {
			$sql = trim($sql);
			if ($sql) {
				$this->db->query($sql);
			}
		}
		echo "<div>Archivo Restaurado</div>";
	}

	function testemb() {
		$this->load->view('template_for_emb', Null);
	}
}