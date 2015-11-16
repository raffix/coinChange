<?php

class CoinChange extends CFormModel {
	public $change;
	public $coins;

	function rules(){
		return array (	
			array('change, coins','required')
		);
	}

	public function troco($troco, $m){
		$saida 	  = 0;
		$moedas = split(',', $m);

		sort($moedas);

	
		for( $c = count($moedas)-1; $c >= 0; $c--){
			$aux = intval($troco/$moedas[$c]);
			$troco = $troco - ($aux * $moedas[$c]);
			$saida += $aux;
		} 

		return $saida;
	}
	
}

?>