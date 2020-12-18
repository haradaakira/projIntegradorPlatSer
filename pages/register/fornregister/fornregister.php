<?php
    include '../../../db.php';

    $sql= "INSERT INTO FORNECEDOR (NOME_FORNECEDOR,RG_FORNECEDOR,CPF_FORNECEDOR,TEL_FORNECEDOR,
    LOGRADOURO_END_FORNECEDOR,NUMERO_END_FORNECEDOR,COMPLEMENTO_END_FORNECEDOR,BAIRRO_END_FORNECEDOR,CIDADE_END_FORNECEDOR,
    ESTADO_END_FORNECEDOR,CEP_END_FORNECEDOR,SENHA_FORNECEDOR,EMAIL_FORNECEDOR) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
    $stmt = $mysqli->prepare($sql);
    $stmt ->bind_param("sssssisssssss",$nome,$rg,$cpf,$tel,$logra,$num,$comp,$bairro,
    $cid,$est,$cep,$psw,$email);

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
   alert('Seu Cadastro Foi Realizado Com Sucesso!');
   window.location.href='../../../index.html';
   </script>";