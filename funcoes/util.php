<?php

require_once 'conexao.php';

function mensagem($msg) {
    echo "<script>alert('$msg')</script>";
}

function alertSucesso($msg) {
    echo '<div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <i class="fa fa-check-circle"></i> teste</div>';
//    '.$msg.'
}

function redirect($pg) {
    return "<script>location.href ='$pg'</script>";
}

function convertDataIngles($data) {
    return substr($data, 6, 4) . '-' . substr($data, 3, 2) . '-' . substr($data, 0, 2);
}

function convertDataPortugues($data) {
    return substr($data, 8, 2) . '/' . substr($data, 5, 2) . '/' . substr($data, 0, 4);
}

function convertDataHoraPortugues($data) {
    return substr($data, 8, 2) . '/' . substr($data, 5, 2) . '/' . substr($data, 0, 4) . "  " . substr($data, 11);
}

function formatCelular($celular) {
    if (strlen($celular) == 11) {
        $novo = substr_replace($celular, '(', 0, 0);
        $novo = substr_replace($novo, ')', 3, 0);
        return $novo;
    } else {
        return $celular;
    }
}

// fun��o que verifica se as senhas s�o iguais
function validaSenha($pagina) {
    if ($_POST['senha'] != $_POST['senha2']) {
        exit(mensagem("As senhas não coinscidem") . redirect($pg));
    }
}

function validaApelido() {

    $con = conectar();
    $apelido = $_POST['apelido'];

    $query = "SELECT apelido from usuarios WHERE apelido = '$apelido'";
    $rs = mysqli_query($con, $query);


    if (mysqli_num_rows($rs) > 0) {
        return true;
    } else {
        return false;
    }
}

function validaEmail() {

    $con = conectar();
    $email = $_POST['email'];

    $query = "SELECT email FROM usuarios WHERE email = '$email'";
    $rs = mysqli_query($con, $query);

    if (mysqli_num_rows($rs) > 0) {
        return true;
    } else {
        return false;
    }
}

function criptografaSenha($senha) {
    if (!empty($senha)) {
        return md5($senha);
    }
}
