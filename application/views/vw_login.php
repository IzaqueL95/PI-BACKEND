<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php $this->load->view('template/vw_headerScriptLogin'); ?>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Entrar</h1>

            <div class="label-float">
                <input type="text" id="usuario" required>
                <label for="usuario">Usuário</label>
            </div>

            <div class="label-float">
                <input type="password" id="senha" required>
                <label for="senha">Senha</label>
            </div>

            <div class="justify-center">
                <button id="t">Entrar</button>
            </div> <br>

            <p>Não tem uma conta?
                <a href="file:///C:/Users/vinicius.santo/Desktop/projeto-facul/cadastro.html">Cadastre-se</a>
            </p>

        </div>
    </div>

</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
	$('#t').click(function() {
		alert('erro')
	})
</script>
