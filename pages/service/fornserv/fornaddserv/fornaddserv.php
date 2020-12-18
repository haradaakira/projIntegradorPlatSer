<?php
    include '../../../../db.php';
    session_start();
    $sql= "INSERT INTO SERVICO (ID_FORNECEDOR,TIPO_SERVICO, IMG_SERVICO, DISPONIVEL_AGENDA_DISP, DISPONIVEL_AGENDA_ATE, DESCRICAO_SERVICO)
    VALUES (?,?,?,?,?,?)";
    $stmt = $mysqli->prepare($sql);
    $stmt ->bind_param('isssss',$id_forn,$tipo,$img,$dispd,$dispa,$descri);

    $id_forn = $_SESSION['id_forn'];
    $tipo = $_POST['serv'];
    $img = $_POST['url'];
    $dispd = $_POST['disp'];
    $dispa = $_POST['dispate'];
    $descri = $_POST['desc'];

    $stmt->execute();
    $stmt->close();

    echo "<script>
    alert('Sua Inserção de dados foi feita com Sucesso!');
    window.location.href='../fornserv.php';
    </script>";