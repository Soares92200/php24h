<?php

 

$link = mysqli_connect("localhost", "root", "123456", "bd");

 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 

$sql = "SELECT * FROM aluno";

 

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
      echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>nome</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);  
    } else{
        echo "Não tem dados cadastrados.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 

?>