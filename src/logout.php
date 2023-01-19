<?php
session_start();

if (isset($_SESSION['session_id'])) {
    unset($_SESSION['session_id']);
    unset($_SESSION['session_username']);
    unset($_SESSION['session_userid']);
}
header('Location: ../welcome.php');
exit;