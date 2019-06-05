<?php

class Categorias extends YDatasetController
{

	function __construct()
	{
		parent::__construct();
		$this->setTitle('Categorias');

		$this->setTableName('categorias');
		$this->setIdField('cat_id');

		$this->addField('cat_nombre', array('label' => 'Categoria', 'rules' => 'required|is_unique'));
	}
}
