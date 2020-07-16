<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['tel'];
$data = $_POST['data'];
$numero = $_POST['num_pessoas'];
$festa = $_POST['festa'];
$mensagem = $_POST['conteudo'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');


if($nome != "" &&  $email != ""){

// Compo E-mail
$arquivo = "
<style type='text/css'>
body {
margin:0px;
font-family:Verdane;
font-size:12px;
color: #666666;
}
a{
color: #666666;
text-decoration: none;
}
a:hover {
color: #FF0000;
text-decoration: none;
}
</style>
  <html>
      <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
          <tr>
            <td>
              <tr>
                <td width='500'>Nome:$nome</td>
              </tr>
              <tr>
                <td width='320'>E-mail:<b>$email</b></td>
              </tr>
              <tr>
                <td width='320'>celular:<b>$telefone</b></td>
              </tr>
              <tr>
                <td width='320'>data da festa:<b>$data</b></td>
              </tr>
              <tr>
                <td width='320'>numero de pessoas:<b>$numero</b></td>
              </tr>
              <tr>
                <td width='320'>Mensagem:$mensagem</td>
              </tr>
              <tr>
                <td width='320'>tipo de festa:$festa</td>
              </tr>
          </td>
        </tr>  
        <tr>
          <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
        </tr>
      </table>
  </html>
";

//enviar
   
  // emails para quem será enviado o formulário
  $emailenviar = "lestehalleventos@gmail.com";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site Leste Hall Eventos";
 
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: Orçamento da leste hall <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";
   
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='10;URL=index.html'>";
  
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }

}
else{
    echo  "<script>alert('informe os dados corretamente!');</script>";
}


?>
