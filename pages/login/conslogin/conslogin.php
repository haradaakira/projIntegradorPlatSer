<?php
    include "../../../db.php"; 
    session_start();
    if((isset($_POST['email'])) && (isset($_POST['psw']))){
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);
        $psw = mysqli_real_escape_string($mysqli, $_POST['psw']);

        $sql = "SELECT * FROM CONSUMIDOR WHERE EMAIL_CONSUMIDOR = '$email' AND SENHA_CONSUMIDOR = '$psw' limit 1";
        $result = mysqli_query($mysqli,$sql);
        $resultado = mysqli_fetch_assoc($result);
        
        if(!empty($resultado)){
            $_SESSION['logado'] = true;
            $_SESSION['id_cons'] = $resultado['ID_CONSUMIDOR'];
            $_SESSION['nome'] = $resultado['NOME_CONSUMIDOR'];
            $_SESSION['rg'] = $resultado['RG_CONSUMIDOR'];
            $_SESSION['cpf'] = $resultado['CPF_CONSUMIDOR'];
            $_SESSION['tel'] = $resultado['TEL_CONSUMIDOR'];
            $_SESSION['rua'] = $resultado['LOGRADOURO_END_CONSUMIDOR'];
            $_SESSION['num'] = $resultado['NUMERO_END_CONSUMIDOR'];
            $_SESSION['comp'] = $resultado['COMPLEMENTO_END_CONSUMIDOR'];
            $_SESSION['bairro'] = $resultado['BAIRRO_END_CONSUMIDOR'];
            $_SESSION['cidade'] = $resultado['CIDADE_END_CONSUMIDOR'];
            $_SESSION['estado'] = $resultado['ESTADO_END_CONSUMIDOR'];
            $_SESSION['cep'] = $resultado['CEP_END_CONSUMIDOR'];
            $_SESSION['email'] = $resultado['EMAIL_CONSUMIDOR'];
            $_SESSION['senha'] = $resultado['SENHA_CONSUMIDOR'];
            
            header("Location: ../../../pages/service/consserv/consserv.php");
        }elseif(empty($resultado)){
            header("Location: conslogin.php");
        }


    }else{
        header('Location: conslogin.php');
    }