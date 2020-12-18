<?php
  include "../../../db.php";
  session_start();
  $sec = $_SESSION['id_forn'];

  $sql = "SELECT * FROM SERVICO WHERE ID_FORNECEDOR = '$sec'";
  $result = mysqli_query($mysqli,$sql);
  $resultado = mysqli_fetch_assoc($result);
  
  if(!empty($resultado)){
  $_SESSION['img_forn'] = $resultado['IMG_SERVICO'];
  $_SESSION['serv'] = $resultado['TIPO_SERVICO'];
  $_SESSION['dde'] = $resultado['DISPONIVEL_AGENDA_DISP'];
  $_SESSION['date'] = $resultado['DISPONIVEL_AGENDA_ATE'];
  $_SESSION['descforn'] = $resultado['DESCRICAO_SERVICO'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="/pages/account/fornconfigacc/fornconfigacc.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="/assets/images/platsericon.png" type="image/x-icon">
        <title>PlatSer - Meus Serviços</title>
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
              <a class="nav-link" href="/pages/service/fornserv/fornserv.php"><b>Meus Serviços</b><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pages/service/fornserv/fornaddserv/fornaddserv.html">Adicionar</a>
            <li class="nav-item">
            <a class="nav-link" href="/pages/account/fornconfigacc/Nfornconfigacc.php">Conta</a>
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
                  <table class="table table-image">
                    <thead>
                      <tr>
                        
                        <th scope="col">Imagem</th>
                        <th scope="col">Serviço</th>
                        <th scope="col">Fornecedor</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Disponibilidade</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        
                        <td class="w-25">
                            <a href="/pages/detail/forndet/forndet.php"><img src="<?php echo $_SESSION['img_forn'] ?>" class="img-fluid img-thumbnail"></a>
                        </td>
                        <td><?php echo $_SESSION['serv'] ?></td>
                        <td><?php echo $_SESSION['nome'] ?></td>
                        <td><?php echo $_SESSION['cidade'] ?></td>
                        <td><?php echo $_SESSION['dde']?> a <?php echo $_SESSION['date']?></td>
                      </tr>
            
                    </tbody>
                  </table>   
              </div>
            </div>
          </div>
    </body>
</html>