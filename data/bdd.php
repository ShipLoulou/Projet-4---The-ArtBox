<?php

function connexion() {
    try {
        return $mysqlClient = new PDO('mysql:host=127.0.0.1;dbname=artbox;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}