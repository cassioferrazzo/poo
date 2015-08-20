<?php

require_once "Cliente.php";

class PessoaFisica extends Cliente {

    private $_cpf;
    
    public function get_cpf() {
        return $this->_cpf;
    }

    public function set_cpf($_cpf) {
        $this->_cpf = $_cpf;
        return $this;
    }
};
