<?php

add_action( 'wp_ajax_enviar-email', 'my_action_enviar_email' );
add_action( 'wp_ajax_nopriv_enviar-email', 'my_action_enviar_email' );

function my_action_enviar_email() {

	if (($_POST['tipo-email']) == "contato"){
		$deNome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$deEmail = $_POST['email'];
		$telefone = $_POST['telefone'];
		$mensagem = $_POST['mensagem'];
		$promocao = $_POST['promocao'];
		$assunto = $_POST['assunto'];

		$arquivo = "Nome: " . $deNome . "\n" . "Sobrenome: " . $sobrenome . "\n" . "Email: " . $deEmail . "\n" . "Telefone: " . $telefone . "\n" . "Quero receber notícias e promoções: " . $promocao . "\n" . $mensagem;	
		/*$receber = "hotelamoreiras@hotelamoreiras.com.br";*/
		$receber = "raphael@comunicandoideias.com.br";

	}else if (($_POST['tipo-email']) == "emailHome") {
		$deNome = $_POST['nome'];
		$sobreNome = $_POST['sobreNome'];
		$email = $_POST['email'];
		$arquivo = "Nome: " . $deNome . "\n" . "Sobrenome: " . $sobreNome . "\n" . "Email: " . $deEmail;

		$assunto = "Fique Por dentro de nossas promoções";
		/*$receber = "hotelamoreiras@hotelamoreiras.com.br";*/
		$receber = "raphael@comunicandoideias.com.br";

	}else if (($_POST['tipo-email']) == "emaillazer") {
		$deNome = $_POST['nome'];		
		$email = $_POST['email'];
		$assunto = $_POST['assunto'];
		$mensagem = $_POST['mensagem'];

		$arquivo = "Nome: " . $deNome . "\n" . "Email: " . $deEmail . "\n" . "Assunto: " . $assunto . "\n" . $mensagem;
		
		/*$receber = "hotelamoreiras@hotelamoreiras.com.br";*/
		$receber = "raphael@comunicandoideias.com.br";
	}
		// e-mail para receber os dados do formulario
		// insira uma conta de e-mail valida em sua hospedagem		
		$destino = $receber;
		// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
		$remetente = $destino;
		$mensagem = $_POST['mensagem'];
		$subject = $assunto;
		$origem = $_POST['from'];
		$headers = "MIME-Version: 1.1\n";
		$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
		$headers .= "From: " . $remetente . "\n";
		$headers .= "Reply-To: " . $origem . "\n";
		if(mail($destino, $subject, $arquivo, $headers))
			echo "Mensagem enviada com sucesso";
		else
			echo "A mensagem não pode ser enviada, tente novamente ou tente mais tarde";		
}
