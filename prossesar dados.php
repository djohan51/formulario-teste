<?php

//pegando dados vindo do formulario


$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$javeio = $_POST['ja veio'];
$data_atual = date('d/m/Y');
$HORA_atual = date('H:i:s');

//configuraçoes de credenciais
$server = 'localhost';
$usuario = 'root';
$senha ='';
$banco ='formulario-fablab';

//conexao com o banco de dados
$conn = new mysqli($server,$usuario,$senha,$banco);

//verificar conexao
if($conn->connect_error){
    die("falha ao se comunicar com o banco de dados: ".$conn->);
}

$smtp =$conn->prepare("INSERT INTO mensagens (nome,e-mail,idade,genero,primira vez,data,hora)") values (?,?,?,?,?,?,?)") 
$smtp->bind_param("sssssss",$nome,$email,$idade,$sexo,$javeio,$data_atual,$hora_atual);

if($smtp->is_executable(){
echo "mensage enviada com sucesso!";

}else{
echo "erro no envio da mensagem: ".$smtp->erro;
}

$smtp->close();
$conn->close();

?>