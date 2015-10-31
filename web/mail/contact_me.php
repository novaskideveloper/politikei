<?php

		if(isset($_POST['nome'])){

		
	
		$body = '<div style="display:table;">'.$_POST['mensagem'].'</div>';	
			
		contato($_POST['nome'],$_POST['telefone'],$_POST['email'],'CONTATO WEBSITES',$body,'','politikeiapp@gmail.com');
		
		
		$body = '<div style="display:table;">Atenciosamente,</div>';		
		$body = $body.'<div style="display:table;">'.$tit.'</div>';		
		$body = $body.'<div style="display:table;"> Tel: '.$tel_1.'</div>';		
		$body = $body.'<div style="display:table;">-</div>';		
		$body = $body.'<div style="display:table;">-</div>';		
		$body = $body.'<div style="display:table;">-</div>';					
		$body = $body.'<div style="display:table;">Acesse:</div>';		
		$body = $body.'<div style="display:table;">'.$url_w.'</div>';
		
		echo "<script language=\"JavaScript\">alert('mensagem enviada com sucesso');</script>";
		
		echo '<script> window.location="'.$url_w.'contato";</script>'; 
		
	} else {
		$msg = '';	
	}
			

			 

?> 
<form name="formular" id="formular" method="post" action="" onsubmit="return valida();">
						<fieldset>
							<p id="formstatus" />
							<div class="row">
								<div class="span3">
								
									<p>
										<label for="name">Seu nome: <span class="required">*</span></label>
										<input class="text" name="nome" placeholder="Digite seu nome" value="" />
									</p>
									<p>
										<label for="email">Seu email: <span class="required">*</span></label>
				
										<input class="text" type="text" name="email"  placeholder="Digite seu e-mail" value="" />
									</p>
									<p>
										<label for="subject">Telefone: <span class="required">*</span></label>
										<input class="text" type="text" name="telefone" value=""  placeholder="Digite seu telefone" />
									</p>
									
								</div>
								<div class="span6">
									<p>
										<label for="msg">Mensagem: <span class="required">*</span></label>
										<textarea id="message" name="msg" rows="3" cols="25"   placeholder="Digite sua mensagem"></textarea>
									</p>
                                <fieldset>
                                <script type="text/javascript">

function valida() {
	// Validation functions obtained from:
	// http://www.devshed.com/c/a/JavaScript/Form-Validation-with-JavaScript/7/
	
	// check to see if input is numeric
	function isNumeric(val)
	{
		if (val.match(/^[0-9]+$/))
		{
			return true;
		}
		else
		{
			return false;
		}	
	}
	// check to see if input is alphanumeric
	function isAlphaNumeric(val)
	{
		if (val.match(/^[a-zA-Z0-9]+$/))
		{
			return true;
		}
		else
		{
			return false;
		}	
	}
	// check to see if input is a valid email address
	function isEmailAddress(val)
	{
		if (val.match(/^([a-zA-Z0-9])+([.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-]+)+/))
		{
			return true;
		}
		else
		{
			return false;
		}	
	}
	nome = document.formular.nome.value;
	emailpa = document.formular.email.value;
	tel = document.formular.telefone.value;
	msg = document.formular.msg.value


	if (nome == "Digite seu nome"  || nome == "") {
	alert("Digite seu nome");
	document.formular.nome.focus();
	return false;
	}
	if (emailpa == 'Digite seu e-mail' || emailpa.length < 6 || emailpa.length > 60) {
	alert("Digite seu e-mail");
	document.formular.email.focus();
	return false;
	}
	if (tel == "Digite seu telefone" || tel == "") {
	alert("Digite seu telefone");
	document.formular.telefone.focus();
	return false;
	}
	
	if (msg == "Digite sua mensagem" || msg == "") {
	alert("Digite sua mensagem");
	document.formular.msg.focus();
	return false;
	}
	return true;
}


</script>