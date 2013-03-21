<?php

class IndexAction extends BaseAction {
    public function index() {
    	layout('layout/default');
    	$this->display();
    }
}

?>