
<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($nome && $email && $idade) {
  $expiracao = time() + (86400 * 30);
  setcookie('nome', $nome, $expericao);
  
  echo 'NOME: '.$nome."<br/>";
  echo 'EMAIL: '.$email."<br/>";
  echo 'IDADE: '.$idade;
} else {
  $_SESSION['aviso'] = 'Preencha os itens corretamente!';
  
  header("Location: index.php");
  exit;
}
