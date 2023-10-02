<?php 
require_once "models/Curso.php";
require_once "models/Carro.php";

$praQue = new Curso();
$praQue->setNome("Tecnologia da informação");
$praQue->setNivel("Superior");
$praQue->setModalidade("Presencial");
$praQue->setDuracao(4);

$psiu = new Curso();
$psiu->setNome("Ciência da Computação")->setNivel("Superior")->setModalidade("Mista")->setDuracao(6);

echo "<pre>";
print_r($praQue);
print_r($psiu);
echo "</pre>";

$carrin = new Carro();
$carrin->setModelo("Onix")->setMarca("Chevrolet")->setAno(2023);

echo "<pre>";
print_r($carrin);
echo "</pre>";

?>