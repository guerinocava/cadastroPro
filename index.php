<?php
   
/* primeiro fazer a conexao */
include './conexao.php';
/* segundo, verificar se exite alguma digitada nos inputs */
if(isset($_POST['usuario']) && isset($_POST['senha'])) {
    /* fazer pesquisa no bco de dados */
    $sql = mysqli_query($conexao, "select * from usuario where usuario = '$_POST[usuario]' and senha = '$_POST[senha]'"); 
    
        if(mysqli_num_rows($sql)!= 0){
            if($resu = mysqli_fetch_assoc($sql)){
                echo $resu['usuario'] . ', vc tem esse login';
            } else {
                echo 'usuario nao enontrado';
            }
        }
}

    

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>prodec</title>
</head>
<body>
<main class="login">
    <div class="login__container">
      <h1 class="login__title">Login</h1>
      <form class="login__form" action="principal.php" method="POST">
          <input class="login__input" type="text" placeholder="Usuário" autocomplete="off" />
        <span class="login__input-border"></span>
        <input class="login__input" type="password" placeholder="senha" autocomplete="off"/>
        <span class="login__input-border"></span>
        <button class="login__submit">Login</button>
      </form>
    </div>
  </main>
</body>
</html>


<!-- 
  <form action="">
    <h2>
      Entrar na lista
    </h2>

    <div class="input">
      <input required type="text" />
      <label>Nome</label>
      <span class="error"></span>
    </div>


    <div class="input">
      <input required type="email" />
      <label>Email</label>
      <span class="error"></span>
    </div>

    <button type="submit">Enviar</button>

  </form>
-->
