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
                    <input type="radio" name="tipo_usuario" id='tipo_usuariof' value="f">
                    <label for="tipo_usuariof">Pessoa Fisica</label>
                </div>

                <div>
                    <input type="radio" name="tipo_usuario" id='tipo_usuarioj' value="j">
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js" integrity="sha256-dOvlmZEDY4iFbZBwD8WWLNMbYhevyx6lzTpfVdo0asA=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
	$('#cadastrar').click(function() {
		
		var tipo = ''

		if($('#tipo_usuariof').is(':checked')){
          tipo = 'f'
        } else if($('#tipo_usuarioj').is(':checked')){
			tipo = 'j'
		} else{
			Swal.fire({
  				icon: 'error',
  				title: 'Oops...',
  				text: 'Por favor preencha o tipo'
			})
			return 0
		}

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
				tipo : tipo,
				nome: nome,
				telefone: telefone,
				email: email,
				senha: senha
			},
			beforeSend: function(){
				console.log('sending...')
			},
			success: function(jsonContent){

				console.log(jsonContent)
				if(jsonContent['resp'] == 'success'){
					Swal.fire(
  						'Tudo certo!',
  						'Cadastro realizado com sucesso!',
  						'success'
					)
				}
			},
			error: function(){
				alert('error!!!')
			}
		})
	})
</script>
