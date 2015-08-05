<?php

class Cliente {

    private $_id;
    private $_nome;
    private $_endereco;
    private $_inscricaoFederal;

    function get_id() {
        return $this->_id;
    }

    function get_nome() {
        return $this->_nome;
    }

    function get_endereco() {
        return $this->_endereco;
    }

    function get_inscricaoFederal() {
        return $this->_inscricaoFederal;
    }

    function set_id($_id) {
        $this->_id = $_id;
        return $this;
    }

    function set_nome($_nome) {
        $this->_nome = $_nome;
        return $this;
    }

    function set_endereco($_endereco) {
        $this->_endereco = $_endereco;
        return $this;
    }

    function set_inscricaoFederal($_inscricaoFederal) {
        $this->_inscricaoFederal = $_inscricaoFederal;
        return $this;
    }

    function getJsonData(){
        $var = get_object_vars($this);
        foreach($var as &$value){
           if(is_object($value) && method_exists($value,'getJsonData')){
              $value = $value->getJsonData();
           }
        }
        return $var;
     }
}

;
$array = array();

$cliente = new Cliente();
$cliente->set_id(3)->set_nome("Leomar Sartor")->set_endereco("Quilombo")->set_inscricaoFederal("11111111111");
array_push($array, $cliente->getJsonData());

$cliente = new Cliente();
$cliente->set_id(2)->set_nome("Wesley Wiliams")->set_endereco("São Paulo")->set_inscricaoFederal("11111111111");
array_push($array, $cliente->getJsonData());

$cliente = new Cliente();
$cliente->set_id(4)->set_nome("Cezar Bortolini")->set_endereco("Chapecó")->set_inscricaoFederal("11111111111");
array_push($array, $cliente->getJsonData());

$cliente = new Cliente();
$cliente->set_id(5)->set_nome("Sandro Oliveira")->set_endereco("Chapecó")->set_inscricaoFederal("11111111111");
array_push($array, $cliente->getJsonData());

$cliente = new Cliente();
$cliente->set_id(7)->set_nome("Neli Valentini")->set_endereco("Xanxerê")->set_inscricaoFederal("11111111111");
array_push($array, $cliente->getJsonData());

$cliente = new Cliente();
$cliente->set_id(10)->set_nome("Luciano Cavichioli")->set_endereco("Xanxerê")->set_inscricaoFederal("11111111111");
array_push($array, $cliente->getJsonData());

$cliente = new Cliente();
$cliente->set_id(8)->set_nome("Diego Zaniol")->set_endereco("Florianópolis")->set_inscricaoFederal("11111111111");
array_push($array, $cliente->getJsonData());

$cliente = new Cliente();
$cliente->set_id(9)->set_nome("Maria Emilia Lunardi")->set_endereco("Xaxim")->set_inscricaoFederal("11111111111");
array_push($array, $cliente->getJsonData());

$cliente = new Cliente();
$cliente->set_id(6)->set_nome("José Toniazzo")->set_endereco("Chapecó")->set_inscricaoFederal("11111111111");
array_push($array, $cliente->getJsonData());

$cliente = new Cliente();
$cliente->set_id(1)->set_nome("Cássio Ferrazzo")->set_endereco("Xanxerê")->set_inscricaoFederal("11111111111");
array_push($array, $cliente->getJsonData());

return json_encode($array);