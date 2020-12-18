<?php

	class Pessoa 
	{
		public $nome = 'FALTA PREENCHER O NOME';

		function atribuirNome ($novoNome = NULL)
		{
			if (!is_null($novoNome)) {
				$this->nome = $novoNome;
			}

			return $this->nome;
		}
	}
	
	
	$bira = new Pessoa;
	$bira->atribuirNome('Bira Timberlake');
	echo "Hello, {$bira->nome} <br/>";
	
	$tc = new Pessoa;
	$tc->atribuirNome('Nakahodo');
	echo "Look out below {$tc->nome} <br/>";
	