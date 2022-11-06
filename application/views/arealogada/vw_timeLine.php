<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://bootswatch.com/5/cosmo/bootstrap.min.css' rel='stylesheet'>
	<title>Document</title>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GIVI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Inicio
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Meus feedbacks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Feedbacks respondidos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Configurações</a>
        </li>
      </ul>
	  <a class="navbar-brand">Olá <?= $nome?></a>
	  <a href="./" class="navbar-brand">Sair</a>
    </div>
  </div>
</nav>
<body style="height: 100vh;">

<div style="width:100%; height:100%; display: flex; justify-content:center; align-items:center; flex-direction:column;">
	<div style="width: 800px; margin-bottom:90px;" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
  		<div class="toast-header">
    		<strong class="me-auto">(Usuario anonimo) Assedio moral - direcionado a - <b class="text-dark">Washington contratos e sluções LTDA</b></strong>
    		<small>11 mins ago</small>
  		</div>	
  		<div class="toast-body">
    		Durante toda a minha fase de estágio na empresa, eu sofria assédio do meu gestor, eram cobranças absurdas para um estagiário
			enquanto funcionários efetivos eram muito bem tratados, a cultura da emrpesa parece repreender estagiário
			como se estivesse nos fazendo um favor.
  		</div>
	</div>

	<div style="width: 800px; margin-bottom:90px;" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
  		<div class="toast-header">
    		<strong class="me-auto">(Maria clara) Assedio sexual - direcionado a - <b class="text-dark">Ribeirão eletro</b></strong>
    		<small>40 mins ago</small>
  		</div>	
  		<div class="toast-body">
    		Eu gostaria de compartilhar que sofri assédio sexual de um colega de trabalho que é gestor de outra área,
			no inicio, por eu ser nova ele me chamava para almoçar com ele, e eu mesmo me sentindo pressionada pro ser nova recusava,
			ele pensou que eu não recusaria porque ele é gestor e eu apenas uma novata. <br>
			Mas ele continuou insistindo, e cada vez mais agressivo, perguntava se eu namorava, perguntava por que eu estava me fazendo de difícil,
			quando eu disse para ele parar, ele me ameaçou dizendo que com uma mensagem eu seria demitida. <br>
			Fiz uma denuncia no RH, e o pessal do RH pareceu acolhedor, achei que tomariam uma ação, porém fui demitida no dia seguinte,
			e  assediador continua na empresa!
  		</div>
	</div>

	<div style="width: 800px; margin-bottom:90px;" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
  		<div class="toast-header">
    		<strong class="me-auto">(Fernando) Demissão injusta - direcionado a - <b class="text-dark">Corretora Abel</b></strong>
    		<small>11 mins ago</small>
  		</div>	
  		<div class="toast-body">
    		Gostaria de denunciar uma demissão injusta pelo meu gestor, sempre bati minha meta em vendas de produtos
			porem da noite pro dia, fui demitido por motivo de "cortes da empresa" porém uma colega que trabalhava comigo disse 
			que ele contratou na semana seguinte uma moça extremamente atraente para meu lugar, e que a boatos de que ela tem algum
			tipo de relacionamento com ele, então basicamente fui demitido porque ele queria empregar alguém de seu interesse unicamente pessoal.
			Um absurdo!
  		</div>
	</div>
	</div>
</body>
</html>
