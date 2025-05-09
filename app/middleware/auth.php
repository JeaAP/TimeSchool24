<?php
require_once __DIR__ . '/../helpers/functions.php';

function requireLogin()
{
  if (!isset($_SESSION['user'])) {
    redirect('/login');
    exit;
  }
}

function requireRole($role)
{
  if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== $role) {
    echo "403 Forbidden - Akses ditolak.";
    exit;
  }
}
?>