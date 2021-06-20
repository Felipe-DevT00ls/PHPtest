<?php
require "config.php";
require __DIR__."/vendor/autoload.php";

use Api\ApiClass;
use Models\Cep;

class Api{
    public function search($cep){
        $apiCep = new Cep();
        if($apiCep->inDatabase($cep)){
            $arr = $apiCep->cepInDatabase($cep);
            $newXml = new SimpleXMLElement("<?xml version='1.0' encoding='utf-8'?><xmlcep />");
            foreach ($arr as $key => $value) {
                if(gettype($key) == "string" && $key != "id"){
                    $newXml->addChild($key, $value);
                }
            }
            $newXml->addChild("Service", "Recebido do Banco de dados, este cep já foi pesquisado antes...");
        
            $xmlDocument = new DOMDocument('1.0');
            $xmlDocument->preserveWhiteSpace = false;
            $xmlDocument->formatOutput = true;
            $xmlDocument->loadXML($newXml->asXML());

            echo $xmlDocument->saveXML();
        }else{
            $def = new ApiClass($cep);
            $def->defineConfiguration();
            $xml = new SimpleXMLElement($def->executeQuery());
            $def->finallyCurlRequests();

            $xml->addChild("Service", "Recebido via webservice VIACEP, este dado foi cadastro no BD, á proxima requisição séra retornada pelo banco de dados");
            echo $xml->asXML();

            $apiCep->insertData($xml);
        }
    }
};

$data = $_GET["id"];
$api = new Api();
$api->search($data);