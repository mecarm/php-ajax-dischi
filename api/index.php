<?php
// Richiamo la directory del database
include_once __DIR__ . '/../db/index.php';
// var_dump(__DIR__);

$genereFiltrato = [];

//chiede all'url se c'è un parametro definito e se c'è un parametro genere con del valore all'interno
if( !empty($_GET) && !empty($_GET['genre'] ) ){

  foreach( $database as $elem ){

    if( $elem['genre'] == $_GET['genre'] ){
      //se il tipo del genere corrisponde al genere scritto nel parametro url "genere" pusho l'elemento dell'genere filtrato
      $genereFiltrato[] = $elem;
    }
  }

  //Se non c'è nessun parametro nell'url e se ci sono sono vuoti
} else {
  //associazione dell'array genereFiltrato con l'intero array di elementi
      $genereFiltrato = $database;
}

header('Content-type: application/json');

echo json_encode( $genereFiltrato );

?>