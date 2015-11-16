<?php

class CoinChange extends CFormModel {
	public $change;
	public $coins;

	function rules(){

		return array (	
			array('change, coins','required')
		);
	}
	
}

?>