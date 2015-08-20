<?php

require_once "JsonHelper.php";

abstract class Cliente extends JsonHelper {

    protected $_id;
    protected $_nome;
    protected $_endereco;

    public function get_id() {
        return $this->_id;
    }

    public function get_nome() {
        return $this->_nome;
    }

    public function get_endereco() {
        return $this->_endereco;
    }

    public function set_id($_id) {
        $this->_id = $_id;
        return $this;
    }

    public function set_nome($_nome) {
        $this->_nome = $_nome;
        return $this;
    }

    public function set_endereco($_endereco) {
        $this->_endereco = $_endereco;
        return $this;
    }

};