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
		$conexao = conectaDB();
		$revendedor = $conexao->get("revendedor", "*",["id" => $idRevendedor]);
		return $revendedor;
	}
	
	public static function getRevendedores($filtro = null, $pagindex = 0) {
		require_once (dirname(__DIR__).'/lib/libdba.php');
		$conexao = conectaDB();
		$numArgs = (int)func_num_args();
        $args = func_get_args();
		 if($numArgs == 2){
			$revendedores = $conexao->select("revendedor", "*",["nome[~]" =>"%".$args[0]."%", "LIMIT" => [$args[1], 10],"ORDER" => "nome"]);
		} else if($numArgs == 1){
			$revendedores = $conexao->select("revendedor", "*",["nome[~]" =>"%".$args[0]."%","ORDER" => "nome"]);
		} else {
			$revendedores = $conexao->select("revendedor", "*",["ORDER" => "nome"]);
		}
		//var_dump($conexaoCantina->log());
		return $revendedores;
	}
}