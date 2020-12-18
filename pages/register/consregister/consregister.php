<?php
include '../../../db.php';

$sql= "INSERT INTO CONSUMIDOR (NOME_CONSUMIDOR, RG_CONSUMIDOR, CPF_CONSUMIDOR, TEL_CONSUMIDOR,
LOGRADOURO_END_CONSUMIDOR,NUMERO_END_CONSUMIDOR,COMPLEMENTO_END_CONSUMIDOR,BAIRRO_END_CONSUMIDOR,CIDADE_END_CONSUMIDOR,
ESTADO_END_CONSUMIDOR, CEP_END_CONSUMIDOR, SENHA_CONSUMIDOR, EMAIL_CONSUMIDOR) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
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