<?php 
require_once"Conexao.php";
$nome_livro = $_GET["txt_livro"];

$sql = "INSERT INTO public.book
(nome,paginas,autor)
VALUES('$nome-livro',100,'???');";
Conexao::exec($sql);

header("Location: ../index.php");