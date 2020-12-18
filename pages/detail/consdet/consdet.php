<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="/pages/detail/consdet/consdet.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="/assets/images/platsericon.png" type="image/x-icon">
        <title>PlatSer - Detalhes</title>
    </head>

    <body>
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/pages/service/consserv/consserv.php"><img src="/assets/images/platser-lat-noslo.png" width="120"  alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/pages/service/consserv/consserv.php"><b>Serviços </b><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pages/account/consconfigacc/Nconsconfigacc.php">Conta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="container"><hr>
        <div class="row">
          <div class="col">
            <h1><b>Arquiteto</b></h1>
            <img src="https://cdn.pixabay.com/photo/2015/12/07/10/56/architect-1080589_960_720.jpg" class="img-fluid img-thumbnail">
          </div>
          <div class="col"><br><br>
            <h3>Christopher</h3>
            <hr>
            <label for="desc"><b>Descrição do Serviço</b></label><br>
            <textarea rows="4" cols="90" name="desc" form="usrform" readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lorem libero, porttitor in metus a, interdum auctor nisi. Praesent efficitur non leo sed ultricies. Nullam vestibulum rhoncus velit, vel pretium velit sagittis non.</textarea><br><br>
            
            <div class="container">
              <div class="row">
                <div class="col">
                  <span>
                    <div class="col-9 col-6">
                      <h6 class="mbr-text align-right links mbr-fonts-style display-7"><b>Contato: </b><br><a href="tel:0800 123-1234">0800 123-1234</a><br><a href="tel:41 99999-9999">(41)99999-9999</a></h6>
                    </div>
                  </span>
                </div>
                <div class="col">
                  <label for="disp"><b>Disponível</b></label><br>
                  <input type="date" name="disp" id="disp">
                </div>
                <div class="col">
                  <label for="dispate"><b>Até</b></label><br>
                  <input type="date" name="dispate" id="dispate">
                </div>
              </div>
            </div>    
            <!--<hr> LINHA DE FOOTER-->
          </div>
        </div>
        <hr>
      </div>  
    </body>
</html>