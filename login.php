<?php
session_start();
?>
<html>
  <head>
    <title>Formulário de Login</title>
  </head>
  <body>
    <h1>Qual seu nome?</h1>
    <?php
  if(!empty($_SESSION['erro'])){
    echo $_SESSION['erro'];
    unset($_SESSION['erro']);
  }
    ?>
    <form action="processa_formulario.php" method="post">
      <input required name="nome" type="text"><br>
      <input type="submit" value="salvar">
    </form>
  </body>
</html>