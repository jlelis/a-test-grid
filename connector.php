<?php
//my_connector.php

require_once("codebase/grid_connector.php"); // connector file
require_once("codebase/db_pdo.php");


try {
    $res = new PDO("mysql:dbname=contatos;host=localhost", "root", ""); // db connection
    // connector object; parameters: db connection and the type of the used db
    $gridConn = new GridConnector($res, "PDO");
    print_r("conectado");
} catch (Exception $e) {
    print_r($e->getMessage());
}
$gridConn->enable_log("log.txt", true);

$gridConn->render_table("contato", "id", "id,nome,valor");// data configuration
