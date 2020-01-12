<?php
class Clientes {	
	private $dados = array(
		1 => 'jose',
		2 => 'joao',
		3 => 'maria'
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