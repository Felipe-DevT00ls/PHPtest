<?php

require "environment.php";
    $config = array();

    if(ENVIRONMENT == "development"){
        define("BASE_URL", "http://localhost/vagaEmprego/PHPtest/");
        $config = [
            "dbname" => "apiCep",
            "host" => "localhost",
            "user" => "root",
            "pass" => ""
        ];
    }
    else{
        define("BASE_URL", "");
        $config = [
            "dbname" => "",
            "host" => "",
            "user" => "",
            "pass" => ""
        ];
    }

global $pdo;
    try {
        $pdo = new PDO("mysql:dbname=".$config["dbname"].";host=".$config["host"],$config["user"], $config["pass"]);

    } catch (PDOEXception $e) {
        echo "Error: ".$e->getMessage();
    }
?>