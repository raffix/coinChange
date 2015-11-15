<?php

function troco($troco, $moedas){
	$saida 	  = array();
	$saida[0] = 0;

	sort($moedas);

	for ( $c =0 ; $c < $troco; $c++){
		$saida[$c] = exp($troco);

		foreach ($d as $moedas) {
			if( ($troco - $d) >=0) {
				$saida[$c] = min($saida[$c],$saida[ $troco-$d] +1);
			}
		}
	}
	return $saida[$troco];
}
	
?>