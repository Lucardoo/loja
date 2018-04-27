<?php
session_start();

//configura com o TEU caminho de instalação
$base_path = 'C:\Bitnami\wappstack-7.1.12-0\apache2\htdocs\lpwlojamaster\\';
$base_url = 'http://localhost/lpwlojamaster/';

$conexao = pg_connect('host=localhost port=5432 dbname=lojalpw user=postgres password=senha5');
if(!$conexao){
	echo 'Não conectou com o banco de dados.';
}