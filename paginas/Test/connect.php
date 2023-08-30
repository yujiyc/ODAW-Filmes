<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // conexão com a database
    $conn = new mysql('localhost', 'root', '', 'horafilme');
    if($conn->connection_error){
        die('connection failed :' .conn->connection_error);
    }
    else{
        $stmt = $conn->prepare("insert into usuario(nome, email, senha) values (?,?,?")
        $stmt->bind_param("sss", $nome, $email, $senha)
        $stmt->execute();
        echo "registration successfuly"
        $stmt->close();
        $conn0>close();
    }
?>