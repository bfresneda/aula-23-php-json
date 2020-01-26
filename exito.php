<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2 align="center">Bem vindo <?php echo $_SESSION["usuario"]; ?></h2>
    <p align="center">Seu login foi realizado com sucesso</p>
     <form class="" action="login.php" method="post" align="center">
       <button type="submit" name="logout">Logout</button>
     </form>
  </body>
</html>
