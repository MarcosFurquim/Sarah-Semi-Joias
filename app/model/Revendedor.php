<?php
class Revendedor {
	var $nome;
	var $telefone;
	var $email;
	//public function __construct()  
	public function Revendedor($nome, $email, $telefone) {
		$this->nome = $nome;
		$this->telefone = $telefone;
		$this->email = $email;
	}
	
	public function cadastaRevendedor() {
		require_once (dirname(__DIR__).'/lib/libdba.php');
		$conexao = conectaDB();
		$last_user_id = $conexao->insert("revendedor", [
		"nome" => $this->nome,
		"telefone" => $this->telefone,
		"email" => $this->email,
		]);
		return $last_user_id;
	}
	
	public static function getRevendedor($idRevendedor) {
		require_once (dirname(__DIR__).'/lib/libdba.php');
		$conexaoCantina = conectaDB();
		$revendedor = $conexaoCantina->get("revendedor", "*",["id" => $idRevendedor]);
		return $revendedor;
    }
}