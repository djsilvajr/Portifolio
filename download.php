<?php
// Caminho do arquivo PDF
$file = './files/resume.pdf'; // Substitua com o caminho do seu PDF

// Verifica se o arquivo existe
if (file_exists($file)) {
    // Define cabeçalhos para o download
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Content-Length: ' . filesize($file));
    header('Pragma: public');

    // Lê o arquivo e envia ao navegador para download
    readfile($file);
    exit;
} else {
    echo 'O arquivo não foi encontrado.';
}