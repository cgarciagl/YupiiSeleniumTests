<?php

class Canciones extends YDatasetController
{

	function __construct()
	{
		parent::__construct();
		$this->setTitle('Canciones');

		$this->setTableName('canciones');
		$this->setIdField('can_id');

		$this->addField('can_titulo', array('label' => 'Titulo', 'rules' => 'required'));

		$this->addField('can_artista', array('label' => 'Artista'));
		$this->addSearch('can_artista', 'Artistas');

		$this->addField('can_categoria', array('label' => 'Categoría', 'rules' => 'required'));
		$this->addSearch('can_categoria', 'Categorias');
	}
}
