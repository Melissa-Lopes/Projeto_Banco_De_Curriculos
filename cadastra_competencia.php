<?php
    session_start();
    if((!isset($_SESSION['id_user']) == true) and (!isset($_SESSION['nome_user']) == true) and (!isset($_SESSION['tipo_user']) == true) and (!isset($_SESSION['email_user']) == true)){
        unset($_SESSION['id_user']);
        unset($_SESSION['nome_user']);
        unset($_SESSION['email_user']);
        unset($_SESSION['tipo_user']);
        header('Location: login.php');
    }
    include 'conecta.php';

    
    
    $id_curriculo = $_POST['id_curriculo'];
    $competencia = $_POST['competencia'];
    

    echo "id => $id_curriculo <br>";
    echo "habilidade => $habilidade <br>";
    

    $consulta = "INSERT INTO competencias (competencia,id_curr) VALUES ('$competencia','$id_curriculo')";

    $conexao->query($consulta);

    ?>

    <script type="text/javascript">
        alert("Competencia cadastrada.");
        window.location.href = "index.php";
        
    </script> 
