<?php

function db_connect(){
    define("DB_DOMAIN", "localhost");
    define("DB_USERNAME", "projet_chaussures");
    define("DB_PASSWORD", "040904Adanledji");
    define("DB_DATABASE", "shoes_chaussures");
    $mysqli = new mysqli(DB_DOMAIN, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    if($mysqli){
        return $mysqli;
}
}
