<?php
	class Controller {
		private $view;
		private $model;
		
		public function __construct() {
			$moduloExterno = $_GET['modulo'];
			$acaoExterna   = $_GET['acao'];
			
			$this->view = new View;
			$this->model = new $moduloExterno ;
			
			$data = $this->model->$acaoExterna();
			$this->view->load($moduloExterno, $acaoExterna, $data);
		}
	}
?>