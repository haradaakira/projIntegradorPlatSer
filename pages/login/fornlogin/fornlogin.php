<?php
    include "../../../db.php"; 
    session_start();
    if((isset($_POST['email'])) && (isset($_POST['psw']))){
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);
        $psw = mysqli_real_escape_string($mysqli, $_POST['psw']);

        $sql = "SELECT * FROM FORNECEDOR WHERE EMAIL_FORNECEDOR = '$email' AND SENHA_FORNECEDOR = '$psw' limit 1";
        $result = mysqli_query($mysqli,$sql);
        $resultado = mysqli_fetch_assoc($result);
        
        if(!empty($resultado)){
            $_SESSION['logado'] = true;
            $_SESSION['id_forn'] = $resultado['ID_FORNECEDOR'];
            $_SESSION['nome'] = $resultado['NOME_FORNECEDOR'];
            $_SESSION['rg'] = $resultado['RG_FORNECEDOR'];
            $_SESSION['cpf'] = $resultado['CPF_FORNECEDOR'];
            $_SESSION['tel'] = $resultado['TEL_FORNECEDOR'];
            $_SESSION['rua'] = $resultado['LOGRADOURO_END_FORNECEDOR'];
            $_SESSION['num'] = $resultado['NUMERO_END_FORNECEDOR'];
            $_SESSION['comp'] = $resultado['COMPLEMENTO_END_FORNECEDOR'];
            $_SESSION['bairro'] = $resultado['BAIRRO_END_FORNECEDOR'];
            $_SESSION['cidade'] = $resultado['CIDADE_END_FORNECEDOR'];
            $_SESSION['estado'] = $resultado['ESTADO_END_FORNECEDOR'];
            $_SESSION['cep'] = $resultado['CEP_END_FORNECEDOR'];
            $_SESSION['email'] = $resultado['EMAIL_FORNECEDOR'];
            $_SESSION['senha'] = $resultado['SENHA_FORNECEDOR'];       

            header("Location: ../../../pages/service/fornserv/fornaddserv/fornaddserv.html");
        }elseif(empty($resultado)){
            header("Location: fornlogin.php");
        }


    }else{
        header('Location: fornlogin.php');
    }