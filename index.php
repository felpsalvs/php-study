<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
    session_start();
    require('header.php');

    if($_SESSION['aviso']){
      echo $_SESSION['aviso'];
      $_SESSION['aviso'] = '';
    }
      ?>
      <a href="apagar.php">Apagar cookies</a>
    
  <form method="post" action="recebedor.php">
    <label>
      Nome:
        <input type="text" name="nome"/>
    </label>
    <label>
      Email:
        <input type="text" name="email"/>
    </label>
  </form>
    <script src="https://replit.com/public/js/replit-badge.js" theme="dark" defer></script> 
  </body>
</html>