<?php
namespace Api;

Class ApiClass{
    private $cep;
    private $ch;
    private $result;
    public function __construct($cep){
        $this->cep = $cep;
        $this->ch = curl_init();
    }

    public function defineConfiguration(){
        curl_setopt($this->ch, CURLOPT_URL, "viacep.com.br/ws/$this->cep/xml/");
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
    }

    public function executeQuery(){
        return $this->result = curl_exec($this->ch);
    }

    public function finallyCurlRequests(){
        curl_close($this->ch);
    }
}