<?php
require_once('database.php');

if (isset($_POST['register'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $nome = $_POST['nome'] ?? '';
    $cognome = $_POST['cognome'] ?? '';
    $email = $_POST['email'] ?? '';
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $query = "
        SELECT ID
        FROM infermieri
        WHERE ID = :username
        ";
        
    $check = $pdo->prepare($query);
    $check->bindParam(':username', $username, PDO::PARAM_STR);
    $check->execute();
        
    $user = $check->fetchAll(PDO::FETCH_ASSOC);
        
    if (count($user) > 0) {
        $msg = 'Username già in uso %s';
    } else {
        $query = "
            INSERT INTO infermieri (ID, Password, Nome, Cognome, Email)
            VALUES (:username, :password, :nome, :cognome, :email)
            ";
        
        $check = $pdo->prepare($query);
        $check->bindParam(':username', $username, PDO::PARAM_STR);
        $check->bindParam(':password', $password_hash, PDO::PARAM_STR);
        $check->bindParam(':nome', $nome, PDO::PARAM_STR);
        $check->bindParam(':cognome', $cognome, PDO::PARAM_STR);
        $check->bindParam(':email', $email, PDO::PARAM_STR);
        $check->execute();
           
        if ($check->rowCount() > 0) {
            $msg = 'Registrazione eseguita con successo';
        } else {
            $msg = 'Problemi con l\'inserimento dei dati %s';
        }
    }
    
    printf($msg, '<a href="../register.html">torna indietro</a>');
}   
