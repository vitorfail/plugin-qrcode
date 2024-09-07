<?php
// Inclua a biblioteca
include('phpqrcode/qrlib.php');

// Defina o conteúdo do QR Code
$conteudo = isset($_GET['conteudo']) ? $_GET['conteudo'] : '';

// Gera o QR Code e exibe diretamente no navegador
QRcode::png($conteudo);
?>