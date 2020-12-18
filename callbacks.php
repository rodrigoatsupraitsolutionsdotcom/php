<?php


	$funcao = function ($numerinho) {
		echo is_numeric($numerinho);
	};


	class Dog {
	
		public $raca = null;
		
		function imprimirRaca($funcaoQueImprimeRaca = null, $numero){
			
			if (is_callable($funcaoQueImprimeRaca)) {

				echo call_user_func($funcaoQueImprimeRaca, $numero);

			}
			
		}
	
	}

	$benji = new Dog();
	$benji->imprimirRaca($funcao, "x");
	

	



