<?php

class Artistas extends YDatasetController {

    function __construct() {
        parent::__construct();
        $this->setTitle('Artistas');

        $this->setTableName('artistas');
        $this->setIdField('art_id');

        $this->addField('art_nombre', array('label' => 'Nombre', 'rules' => 'required'));
    }

}
