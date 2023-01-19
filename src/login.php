<?php
session_start();
require_once('database.php');

if (isset($_SESSION['session_id'])) {
    header('Location: /index.php');
    exit;
}

if (isset($_POST['login'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if (empty($username) || empty($password)) {
        $msg = 'Inserisci username e password %s';
    } else {
        $query = "
            SELECT ID, Password
            FROM infermieri
            WHERE ID = :username
        ";
        
        $check = $pdo->prepare($query);
        $check->bindParam(':username', $username, PDO::PARAM_STR);
        $check->execute();
        
        $user = $check->fetch(PDO::FETCH_ASSOC);
        
        if (!$user || password_verify($password, $user['Password']) === false) {
            $msg = urlencode("Credenziali errate, accesso negato.");;
        } else {
            session_regenerate_id();
            $_SESSION['session_id'] = session_id();
            $_SESSION['session_user'] = $user['username'];
            
            header('Location: /index.php');
            exit;
        }
    }
    
    header("Location: /welcome.php?Message=".$Message);
}
