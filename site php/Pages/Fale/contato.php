<?php
header("Content-type:text/html; charset=utf8");
require_once '../../Inc/inc_usuario/header_u.php';
require_once '../../Inc/footer.php';
?>

    <div class="row">


        <div class="col-md-4"></div>
        <div class="col-md-4">
            <br>
            <div class="formulario-title">
                <img style="width: 30px; height: 30px;" src="../../img/patamenor.png"><a>Formulário de Contato</a>
                <hr>
            </div>
		<form method="POST" action="contato.php">
            <div class="reg-design">
			<label>Nome</label>
			<input class="form-control" type="text" name="nome" placeholder="Nome completo"><br>
			
			<label>Email</label>
			<input class="form-control" type="email" name="email" placeholder="Seu e-mail"><br>
			
			<label>Mensagem</label>
			<textarea style="resize: none" class="form-control" name="mensagem" rows="4" cols="50"></textarea><br>
            </div>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Enviar</button>
		</form>
        </div>
        <div class="col-md-4"></div>
    </div>
    

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Menssagem enviada com sucesso!</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <?php
		$nome = "nome";
		$email = "email";
		$mensagem = "mensagem";
		
        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, "21802254@aluno.cotemig.com.br");
        $subject = "Mensagem de contato";
        $to = new SendGrid\Email(null, "vini3067@gmail.com");
        $content = new SendGrid\Content("text/html", "Olá CEO da Tech Pet, <br><br>Nova mensagem de contato<br><br>Nome: $nome<br>Email: $email <br>Mensagem: $mensagem");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo "Mensagem enviada com sucesso";
		
        ?>
        <br>
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>