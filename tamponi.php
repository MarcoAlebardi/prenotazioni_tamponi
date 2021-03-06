<?php

//dice a livello dello script che gli errori verranno mostrati e che non verranno loggati
ini_set('display_errors', 1);
ini_set('log_errors', 0);

$host = 'localhost';
$db = 'tamponi';
$user = 'root';
$pass = '';
//stringa connessione
$dsn = 'mysql:host='.$host.';dbname='. $db;


$pdo = new PDO($dsn, $user, $pass);

$codice_fiscale = 'LBRMRC02A21E333K';
$giorno = '2021-03-06';

//query di inserimento
$sql = "INSERT TO prenotazioni VALUES(null, :codice_fiscale, :giorno)";

$stmt = $pdo-> prepare($sql);

//inviamo i dati che verrano messi al posto dei segna posto
$stmt -> execute (
    [
        'codice_fiscale' => $codice_fiscale,
        'giorno' => $giorno
    ]
);