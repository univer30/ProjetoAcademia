<?php
session_start();
require("config.php");


$email=$_POST['palavra'];
//pesquisar no banco o nome do curso referente a palavra digitada.

$aluno="SELECT * FROM usuarios Where email LIKE '%$email%' ";
$resultatdo_aluno=mysqli_query($conn, $aluno);

if(mysqli_num_rows($resultatdo_aluno)<=0){

    echo"Nenhum aluno não encontrado!";

}else
{
    while($row=mysqli_fetch_assoc($resultatdo_aluno)){
        echo "<li>".$row['email']."</li>";

    }
  
}
?>

