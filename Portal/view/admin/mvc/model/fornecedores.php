<?php
class Fornecedores {	
	private $dados = array(
		1 => 'Extra Supermercados',
		2 => 'Armazem Santa  Atacados e Varejos',
		3 => 'Carrefour Supermercados'
	);
	
	public function todos() {
		$data = $this->dados;
		return $data;
	}
	
	public function ver() {		
		$data['registro'] = $this->dados[$_GET['id']];
		return $data;
	}
}