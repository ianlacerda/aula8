<?php

//criar variáveis de conexão
$servidor = "127.0.0.1";
$usuario = "root";
$senha = "";
$bd = "bdcurso";

//criar a conexão
//mysqli_connect(SERVIDOR,USUARIO,SENHA,BD);
$con = mysqli_connect($servidor,$usuario,$senha,$bd);
//var_dump($con);
if($con){
    echo "Conectou ao BD";
} else{
    echo "Falha ao conectar ao BD";
}
