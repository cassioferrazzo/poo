<?php

require_once "Cliente.php";

class PessoaJuridica extends Cliente {

    private $_cnpj;
    
    public function get_cnpj() {
        return $this->_cnpj;
    }

    public function set_cnpj($_cnpj) {
        $this->_cnpj = $_cnpj;
        return $this;
    }
};
