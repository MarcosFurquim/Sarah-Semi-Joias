<?php
require_once (dirname(__DIR__).'/model/Revendedor.php');



if($api) {
	switch($_SERVER['REQUEST_METHOD']) {
		case 'GET':
			if($id) {
				printf(json_encode(Revendedor::getRevendedor($id)));
			} else {
				printf(json_encode(Revendedor::getRevendedores()));
			}
		break;
		case 'post'://Revendedor($nome, $email, $telefone) {
			$novo_revendedor = new Revendedor($nome, $email, $telefone);
			var_dump($novo_revendedor);
			//printf(json_encode(Revendedor::getRevendedores()));
		break;
	}
} else {
	if ($_SERVER['REQUEST_METHOD'] === 'POST') { 

	} else if($_SERVER['REQUEST_METHOD'] === 'GET') {
		if($view == 'novo') {
			require_once(dirname(__DIR__).'/view/revendedor/novo.php');
		} else {
			//$revendedor = Revendedor::getRevendedor(1);
			require_once(dirname(__DIR__).'/view/revendedor/index.php');
		}
	}
}


?>