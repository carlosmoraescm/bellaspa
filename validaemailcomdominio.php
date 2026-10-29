<?php

/*
 * Com esta função é possível realizar uma validação praticamente completa do endereço de e-mail.
 * Além de verificar se a escrita do e-mail está correta, ele também faz uma verificação 
 * se o domínio utilizado no endereço realmente existe.
 * Ótimo código para utilizar em sistemas de disparo de email.
 */

 
function validaemail($email){
	//verifica se e-mail esta no formato correto de escrita
	if (!ereg('^([a-zA-Z0-9.-])*([@])([a-z0-9]).([a-z]{2,3})',$email)){
		$mensagem='E-mail Inv&aacute;lido!';
		return $mensagem;
    }
    else{
		//Valida o dominio
		$dominio=explode('@',$email);
		if(!checkdnsrr($dominio[1],'A')){
			$mensagem='E-mail Inv&aacute;lido!';
			return $mensagem;
		}
		else{return true;} // Retorno true para indicar que o e-mail é valido
	}
}
 

?>
