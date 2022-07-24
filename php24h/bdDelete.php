<?php

$i = $_POST['i'];

$link = mysqli_connect("localhost", "root", "123456", "bd");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 
$sql = "DELETE FROM aluno WHERE id=$i";

 
if($result = mysqli_query($link, $sql)){
    echo "Deu Certo";  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>