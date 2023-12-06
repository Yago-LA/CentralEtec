<?php
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $from = 'centraletectcc@gmail.com';       

//Essencial para garantir a exibição correta dos caracteres
$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/html; charset=utf-8\n";
$headers .= "From: Meu site <$from\n>";
$headers .= "Return-Path: $from\n";
$headers .= "Reply-to: $email\n";

//Enviar
mail($email, $mensagem, $headers, $from);
?>