<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="pr-BR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cadastro</title>
	<?php $this->load->view('template/vw_headerScriptCadastro'); ?>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Cadastrar</h1>

            <div id="cadastrar">
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
                <input type="text" id="usuario" required>
                <label for="usuario">Nome</label>
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
                <input type="password" id="confirmsenha" required>
                <label for="confirmsenha">Confirmar Senha</label>
            </div>


            <div class="justify-center">
                <button>Cadastrar</button>
            </div> <br>

        </div>
    </div>

</html>
