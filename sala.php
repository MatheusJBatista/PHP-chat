<?php
#IGNORE
#IGNORE
require_once 'classes/Model/sala.php';
session_start();
try {
	$nomeSala = $_GET['sala'];
	$jogador = $_GET['numero'];
	$s = new Sala($nomeSala,$jogador);
	echo $s->getResult();
} catch (SalaException $e) {
	echo $e->getMessage();
}