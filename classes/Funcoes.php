<?php
/**
 * Description of Metodos
 *
 * @author andersonfreire
 */
class Funcoes {
    
    //METODO RESPONSAVEL POR TRATAR OS CARACTERES
	public function tratarCaracter($vlr, $tipo){
		switch($tipo){
			case 1: $rst = utf8_decode($vlr); break;
			case 2: $rst = htmlentities($vlr, ENT_QUOTES, "ISO-8859-1"); break; 
		}
		return $rst;
	}
	
	//RECUPERA A DATA E HORA ATUAL
	public function dataAtual($vlr){
		switch($vlr){
			case 1: return date("Y-m-d");
			case 2: return date("Y-m-d H:i:s");	
			case 3: return date("d/m/Y");										
		}
	}
	
	//RESPONSAVEL POR COLOCAR QUALQUER VALOR EM base64
	public function base64($vlt, $n){
		switch($n){
			case 1: return base64_encode($vlt);
			case 2; return base64_decode($vlt);
		}
	}	
	
	//VERIFICAR CAMPO VAZIO
	public function verificarCampo($dado){
		return (isset($dado))?($dado):("");
	}
}
