<?php
session_start();

if (isset($_SESSION['session_id'])) {
    unset($_SESSION['session_id']);
    unser($_SESSION['session_user']);
}
header('Location: ../welcome.php');
exit;