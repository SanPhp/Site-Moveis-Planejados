<?php $title = 'Contato - Jali Móveis Planejados'; ?>
<?php include 'header.php'; ?>

<body>

<?php include 'cabecalho_nav.php'; ?>

	<section id="contato">
    	<h1>Contato</h1>
        	<p>Se ainda restou alguma dúvida sobre a qualidade e importância dos nossos produtos,  
               aqui é o espaço para entrar em contato e solicitar outras informações sobre nossa 
               empresa, planos, preços, entre outros assuntos.</p>
                    
                <?php
				if(isset($_POST['submit'])) {
				$name = $_POST['name'];
				$fone = $_POST['fone'];
				$assunto = $_POST['assunto'];
				$email = $_POST['email'];
				$mensagem = $_POST['mensagem'];
				$output_form = 'no';
				
				if(empty($name) || empty($fone) || empty($assunto) || empty($email) || empty($mensagem)) {
					echo '<p class="error">Por favor, Preencha todos os campos do formulario!</p>';
					$output_form = 'yes';
				}
				
				}//ISSET
				
				else {
					$output_form = 'yes';
				}
				
				if(!empty($name) && !empty($fone) && !empty($assunto) && !empty($email) && !empty($mensagem)) {
					$from = 'Jali Móveis';
					$to = 'sandro@hrsweb.com.br';
					$subject = 'Contato Site Jali Móveis';
					$msg = "Formulário de Contato: $from \n" .
	       			   	   "Nome: $name \n" .
						   "Fone: $fone \n" .
						   "Assunto: $assunto \n" .
	        		       "Email: $email \n" .
			               "Mensagem: $mensagem";
						   
				mail($to, $subject, $msg);
				echo '<p class="sucesso">Mensagem enviada com sucesso!</br> <a href="http://www.jalimoveis.com.br/contato.php"                      title="voltar">Voltar</a></p>';
				$output_form = 'no';		   
				
				
				
				$name = '';
				$fone = '';
				$assunto = '';
				$email = '';
				$mensagem = '';
				
				}//Empty
				
				if($output_form == 'yes') {
				
				?>
                   
              <form action="" method="post">
              <table>
              <tr>
              	<th><label for="nome">Nome</label></th>
                 <th><label for="fone">Fone</label></th>
                 <th><label id="mensagem" for="mensagem">Mensagem</label></th>
              </tr>
              
              <tr>
                <td width="300"><input type="text" id="name" name="name" size="39"></td>
                <td><input type="text" id="fone" name="fone" size="32"></td>
                <td width="430" rowspan="6"><textarea id="mensagem" name="mensagem"></textarea></td>
              </tr> 
              
              <tr>
              <td><label for="assunto">Assunto</label></td>
             </tr>
             
             <tr>
             <td colspan="2"><input type="text" id="assunto" name="assunto" size="75"></td>
             </tr>
             
             <tr>
              <td><label for="email">Email</label></td>
             </tr>
             
             <tr>
             <td colspan="2"><input type="text" id="email" name="email" size="75"></td>
             <td><input type="submit" id="submit" name="submit" value="Enviar"></td>
             </tr>
                     
            
              </table>
               </form>
             <?php } ?>
             
             
          <div class="localizacao">
          
          	<div class="mapa">
            <h5>Mapa</h5>
            <iframe width="400" height="160" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Rua+Tecel%C3%A3o,+Arapongas+-+Paran%C3%A1+161&amp;sll=-23.404432,-51.430835&amp;sspn=0.011796,0.013797&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Tecel%C3%A3o,+161,+Arapongas+-+Paran%C3%A1,+86703-030&amp;ll=-23.404419,-51.430864&amp;spn=0.013391,0.034332&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=Rua+Tecel%C3%A3o,+Arapongas+-+Paran%C3%A1+161&amp;sll=-23.404432,-51.430835&amp;sspn=0.011796,0.013797&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Tecel%C3%A3o,+161,+Arapongas+-+Paran%C3%A1,+86703-030&amp;ll=-23.404419,-51.430864&amp;spn=0.013391,0.034332&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left"></a></small>
            
            </div>
          
          	<h5>Localização</h5>
            <p>Jali Móveis Planejados - Jorge Luiz<br>
               Rua Tecelão, 161 - Vila Cascata - Fones: (43) 9904-0898 - (43) 3274-3349</p>
            <p>Arapongas - Paraná</p>
            <img src="estru/icone_contato.png" alt="Icone Contato">
          </div>   
             
               
    </section><!--CONTATO-->
    
    

<?php include 'footer.php'; ?>

</body>
</html>