<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];

    if (preg_match('/^\(\d{2}\) \d{5}-\d{4}$/', $phone)) {
        file_put_contents("cadastros.txt", $phone . PHP_EOL, FILE_APPEND);
        echo "<script>alert('Número cadastrado com sucesso! Você começará a receber as receitas diárias para melhorar seu dia.');</script>";
    } else {
        echo "<script>alert('Por favor, insira um número de WhatsApp válido!');</script>";
    }
}
?>