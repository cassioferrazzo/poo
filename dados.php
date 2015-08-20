<?php
include "PessoaFisica.php";
include "PessoaJuridica.php";
$array = array();

$cliente = new PessoaFisica();
$cliente->set_id(3)->set_nome("Leomar Sartor")->set_endereco("Quilombo")->set_cpf("11111111111");
array_push($array, $cliente->getJsonData());

$cliente = new PessoaJuridica();
$cliente->set_id(2)->set_nome("Wesley Wiliams")->set_endereco("São Paulo")->set_cnpj("11111111111");
array_push($array, $cliente->getJsonData());

$cliente = new PessoaFisica();
$cliente->set_id(4)->set_nome("Cezar Bortolini")->set_endereco("Chapecó")->set_cpf("11111111111");
array_push($array, $cliente->getJsonData());

$cliente = new PessoaJuridica();
$cliente->set_id(5)->set_nome("Sandro Oliveira")->set_endereco("Chapecó")->set_cnpj("11111111111");
array_push($array, $cliente->getJsonData());

$cliente = new PessoaFisica();
$cliente->set_id(7)->set_nome("Neli Valentini")->set_endereco("Xanxerê")->set_cpf("11111111111");
array_push($array, $cliente->getJsonData());

$cliente = new PessoaJuridica();
$cliente->set_id(10)->set_nome("Luciano Cavichioli")->set_endereco("Xanxerê")->set_cnpj("11111111111");
array_push($array, $cliente->getJsonData());

$cliente = new PessoaFisica();
$cliente->set_id(8)->set_nome("Diego Zaniol")->set_endereco("Florianópolis")->set_cpf("11111111111");
array_push($array, $cliente->getJsonData());

$cliente = new PessoaJuridica();
$cliente->set_id(9)->set_nome("Maria Emilia Lunardi")->set_endereco("Xaxim")->set_cnpj("11111111111");
array_push($array, $cliente->getJsonData());

$cliente = new PessoaFisica();
$cliente->set_id(6)->set_nome("José Toniazzo")->set_endereco("Chapecó")->set_cpf("11111111111");
array_push($array, $cliente->getJsonData());

$cliente = new PessoaJuridica();
$cliente->set_id(1)->set_nome("Cássio Ferrazzo")->set_endereco("Xanxerê")->set_cnpj("11111111111");
array_push($array, $cliente->getJsonData());

return json_encode($array);