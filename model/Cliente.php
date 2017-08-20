<?php

class Cliente {
	public $id;
	public $nome;
	public $cpf;
	public $telefone;
	
	public function getID(){
		return this->id;

	}
	public function getCpf(){
		return this->cpf;

	}
	public function getNome(){
		return this->nome;

	}
	public function getTelefone(){
		return this->telefone
	}
	public function setNome($nome){
		return this->nome = $nome;
	}
	public function setCpf($cpf){
		return this->cpf = $cpf;
	}
	public function setTelefone($telefone){
		return this->telefone = $telefone;
	}


}
?>