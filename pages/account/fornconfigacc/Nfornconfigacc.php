<?php 
include "../../../db.php";
session_start(); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="/pages/register/fornregister/fornregister.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="/assets/images/platsericon.png" type="image/x-icon">
        <title>PlatSer - Conta</title>
    </head>

    <body>
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/pages/service/fornserv/fornserv.php"><img src="/assets/images/platser-lat-noslo.png" width="120"  alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/pages/service/fornserv/fornserv.php">Meus Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pages/service/fornserv/fornaddserv/fornaddserv.html">Adicionar</a>
            <li class="nav-item">
            <a class="nav-link" href="/pages/account/fornconfigacc/Nfornconfigacc.php"><b>Conta</b><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
        <div class="container">
            <div class="row">
              <div class="col-12">

                <form action="fornconfigacc.php" method="POST">
                  <div class="container">
                    <h1>Conta</h1>
                    <p>Alterar o cadastro da conta.</p>
                    <hr>
      
                    <label for="nome"><b>Nome Completo</b></label>
                    <input type="text" placeholder="Nome e Sobrenome" name="nome" id="nome" value="<?php echo $_SESSION["nome"] ?>" required>
                    
                    <label for="rg"><b>RG: </b></label>
                    <input type="number" placeholder="Apenas números!" name="rg" id="rg" value="<?php echo $_SESSION["rg"] ?>" required>
      
                    <label for="cpf"><b>CPF: </b></label>
                    <input type="number" placeholder="Apenas números!" name="cpf" id="cpf" value="<?php echo $_SESSION["cpf"] ?>" required><br>

                    <label for="tel"><b>Telefone: </b></label>
                    <input type="number" placeholder="Apenas números!" name="tel" id="tel" value="<?php echo $_SESSION["tel"] ?>" required><br>
      
                    <div class="end">
                    <hr>
                    <label for="rua"><b>Logradouro</b></label>
                      <input type="text" placeholder="Rua" name="rua" id="rua" value="<?php echo $_SESSION["rua"] ?>" required>

                      <label for="num"><b>Número: </b></label>
                      <input type="number" placeholder="Apenas números!" name="num" id="num" value="<?php echo $_SESSION["num"] ?>" required>

                      <label for="comp"><b>Complemento: </b></label>
                      <input type="number" placeholder="Apenas números!" name="comp" id="comp" value="<?php echo $_SESSION["comp"] ?>" required>

                      <label for="bairro"><b>Bairro: </b></label>
                      <input type="text" placeholder="Bairro" name="bairro" id="bairro" value="<?php echo $_SESSION["bairro"] ?>" required>

                      <label for="cidade"><b>Cidade: </b></label>
                      <input type="text" placeholder="Cidade" name="cidade" id="cidade" value="<?php echo $_SESSION["cidade"] ?>" required>

                      <label for="est"><b>Estado: </b></label>
                      <input type="text" placeholder="Estado" name="est" id="est" value="<?php echo $_SESSION["estado"] ?>" required>

                      <label for="cep"><b>CEP: </b></label>
                      <input type="text" placeholder="Apenas números!" name="cep" id="cep" value="<?php echo $_SESSION["cep"] ?>" required>
                    <hr>
                    </div>
      
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Insira o Email" name="email" id="email" value="<?php echo $_SESSION["email"] ?>" required>
                
                    <label for="psw"><b>Senha</b></label>
                    <input type="password" placeholder="Insira a senha" name="psw" id="psw" value="<?php echo $_SESSION["senha"] ?>" required>
                    
                    <br>
                    <br>
                    
                    <button type="submit" class="registerbtn">Atualizar</button>
                  </div>
                
                </form>
              </div>
            </div>
          </div>
    </body>
</html>