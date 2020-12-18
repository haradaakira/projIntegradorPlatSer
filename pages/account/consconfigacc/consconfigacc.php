<?php
    include '../../../db.php';
    session_start();
    $sql= "UPDATE CONSUMIDOR SET NOME_CONSUMIDOR=?, RG_CONSUMIDOR=?, CPF_CONSUMIDOR=?, TEL_CONSUMIDOR=?,
    LOGRADOURO_END_CONSUMIDOR=?,NUMERO_END_CONSUMIDOR=?,COMPLEMENTO_END_CONSUMIDOR=?,BAIRRO_END_CONSUMIDOR=?,CIDADE_END_CONSUMIDOR=?,
    ESTADO_END_CONSUMIDOR=?, CEP_END_CONSUMIDOR=?, SENHA_CONSUMIDOR=?, EMAIL_CONSUMIDOR=? WHERE ID_CONSUMIDOR=?";
    $stmt = $mysqli->prepare($sql);
    $stmt ->bind_param("sssssssssssssd",$nome,$rg,$cpf,$tel,$logra,$num,$comp,$bairro,
    $cid,$est,$cep,$psw,$email,$_SESSION['id_cons']);

    $nome = $_POST['nome'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $tel = $_POST['tel'];
    $logra = $_POST['rua'];
    $num = $_POST['num'];
    $comp = $_POST['comp'];
    $bairro = $_POST['bairro'];
    $cid = $_POST['cidade'];
    $est = $_POST['est'];
    $cep = $_POST['cep'];
    $psw = $_POST['psw'];
    $email = $_POST['email'];
 

    $stmt->execute();
    $stmt->close();



    echo "<script>
    alert('Sua Atualização Foi Realizada Com Sucesso!');
    window.location.href='../../../index.html';
    </script>";