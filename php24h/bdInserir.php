<?php


$i = $_POST['id'];
$n = $_POST['nome'];

$link = mysqli_connect("localhost", "root", "123456", "bd");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$sql = "INSERT INTO aluno(id, nome) VALUES ($i, '".$n."');";

if($result = mysqli_query($link, $sql)){
      echo "Deu Certo";  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>