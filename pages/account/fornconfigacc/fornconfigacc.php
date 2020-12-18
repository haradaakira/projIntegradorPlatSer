<?php
    include '../../../db.php';
    session_start();
    $sql= "UPDATE FORNECEDOR SET NOME_FORNECEDOR=?, RG_FORNECEDOR=?, CPF_FORNECEDOR=?, TEL_FORNECEDOR=?,
    LOGRADOURO_END_FORNECEDOR=?,NUMERO_END_FORNECEDOR=?,COMPLEMENTO_END_FORNECEDOR=?,BAIRRO_END_FORNECEDOR=?,CIDADE_END_FORNECEDOR=?,
    ESTADO_END_FORNECEDOR=?, CEP_END_FORNECEDOR=?, SENHA_FORNECEDOR=?, EMAIL_FORNECEDOR=? WHERE ID_FORNECEDOR=?";
    $stmt = $mysqli->prepare($sql);
    $stmt ->bind_param("sssssssssssssd",$nome,$rg,$cpf,$tel,$logra,$num,$comp,$bairro,
    $cid,$est,$cep,$psw,$email,$_SESSION['id_forn']);

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