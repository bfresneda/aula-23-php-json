<?php
  if ($_POST) {
    //capturando as informacoes recebidas via $_POST
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    

    //faz a verificação se o email possui @, caso nao emite sinal de invalido
    if(strstr($email, '@')){
      echo 'email valido';
    }else{
      echo 'email invalido';
    }
    
    // Criando um hash a partir da senha cadastrda
    $senhaconvert = password_hash($senha , PASSWORD_DEFAULT);
    
    echo('<pre>');
    print_r($email);
    print_r($senha);
    echo('</pre>');

    // adicionando as informacoes em um array associativo
    $infologin['email'] = $email;
    $infologin['senha'] = $senha;
    $infologin['senhacrypt'] = $senhaconvert;

    // codificando todas as informacoes em um array json
    $logincodificado = json_encode($infologin);


    // salvando as informacoes em um arquivo de cadastro
    file_put_contents('cadastros.json',$logincodificado . "\n" , FILE_APPEND);

    echo('<pre>');
    print_r($logincodificado);
    echo('</pre>');


  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Cadastro</h2>
    <form class="" action="cadastro.php" method="post">
      <label>
        Email: <input type="text" name="email" value="""> 
        Senha: <input type="password" name="senha" value="">
        <input type="submit" name="" value="Enviar">
      </label>
    </form>
    <br>
    <a href="./login.php">Voltar para o login</a>
  </body>
</html>
