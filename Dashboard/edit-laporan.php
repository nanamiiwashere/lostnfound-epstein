<?php
if (session_status() === PHP_SESSION_NONE) session_start();
require_once '../connect.php';
require_once '../Auth/auth3thparty.php';
requireLogin();
$u = currentUser();
$activePage = 'laporan';
$error = $success = '';

$id = (int)($_GET['id' ?? 0]);
if (!$id){
    header('Location: laporan.php');
    exit();
}

$stmt = $pdo -> prepare("SELECT * FROM laporan_kehilangan WHERE id_laporan=? AND id_pelapor=?");
$stmt -> execute

?>