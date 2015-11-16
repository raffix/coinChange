<?php

function troco($troco, $moedas){
	$saida 	  = array();
	$saida[0] = 0;
	$moedas = explode(',', $moedas);

	sort($moedas);

	for ( $c =0 ; $c < $troco; $c++){
		$saida[$c] = exp($troco);

		foreach ($d as $moedas) {
			if( (intval($troco) - intval($d)) >=0) {
				$saida[$c] = min(intval($saida[$c]), intval($saida[ $troco-$d] +1));
			}
		}
	}
	return $saida[$troco];
}
	
?>