<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="pr-BR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cadastro</title>
	<?php $this->load->view('template/vw_headerScriptCadastro'); ?>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Cadastrar</h1>

            <div id="c">
                <div>
                    <input type="radio" name="tipo_usuario" id='tipo_usuariof'>
                    <label for="tipo_usuariof">Pessoa Fisica</label>
                </div>

                <div>
                    <input type="radio" name="tipo_usuario" id='tipo_usuarioj'>
                    <label for="tipo_usuarioj">Pessoa Juridica</label>
                </div>
            </div>


            <div class="label-float">
                <input type="text" id="nome" required>
                <label for="nome">Nome</label>
            </div>

            <div class="label-float">
                <input type="text" id="telefone" required>
                <label for="telefone">Telefone</label>
            </div>

            <div class="label-float">
                <input type="text" id="email" required>
                <label for="email">E-mail</label>
            </div>


            <div class="label-float">
                <input type="password" id="senha" required>
                <label for="senha">Senha</label>
            </div>

            <div class="label-float">
                <input type="password" id="confirmSenha" required>
                <label for="confirmSenha">Confirmar Senha</label>
            </div>

            <div class="justify-center">
                <button id="cadastrar">Cadastrar</button>
            </div> <br>

        </div>
    </div>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
	$('#cadastrar').click(function() {
		
		nome = $('#nome').val()
		telefone = $('#telefone').val()
		email = $('#email').val()
		senha = $('#senha').val()
		confirmaSenha = $('#confirmSenha').val()

		$.ajax({
			type: "POST",
			url: "cadastro/cadastrarUser",
			dataType: "json",
			data: {
				nome: nome,
				telefone: telefone,
				email: email,
				senha: senha
			},
			beforeSend: function(){
				console.log('sending...')
			},
			success: function(){
				alert('success')
			},
			error: function(){
				alert('error!!!')
			}
		})
	})
</script>
