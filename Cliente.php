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
