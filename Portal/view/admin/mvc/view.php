<?php
class View {
	public function load($model, $acao, $data = null) {
		include("templates/$model/$acao.php");
	}
}