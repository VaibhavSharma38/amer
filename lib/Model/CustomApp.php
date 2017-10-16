<?php

/**
* Description: Amer App Custom Model
* 
* @author : Vaibhav Sharma
* @email : vaibhavsharma38@gmail.com
* @website : http://vaibhavsharma.epan.in
* 
*/

namespace xepan\amer;

class Model_CustomApp extends \xepan\base\Model_Table{
	public $table = 'customapp';
	public $acl = false;
	public $title_field= 'item_id';

	function init(){
		parent::init();

		$this->hasOne('xepan\commerce\Model_Item','item_id');

		$this->addField('mar_price');
		$this->addField('msr_price');
		$this->addField('dealer_price');
		$this->addField('volume_price');
		$this->addField('wholesale_price');
		$this->addField('stocking_price');
		$this->addField('customised_price');
		$this->addField('qty_in_stock');
		$this->addField('qty_within_30_days');
		$this->addField('qty_within_2_months');
		$this->addField('qty_over_2_months');
		$this->addField('availability');
		$this->addField('extra_info');
	}
}
