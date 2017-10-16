<?php

namespace xepan\amer;

class Page_customapp extends \xepan\base\Page{
	public $title = "Custom App";

	function init(){
		parent::init();

		$customapp_m = $this->add('xepan\amer\Model_CustomApp');
		
		$crud = $this->add('xepan\hr\CRUD');
		$crud->setModel($customapp_m);
	}
}