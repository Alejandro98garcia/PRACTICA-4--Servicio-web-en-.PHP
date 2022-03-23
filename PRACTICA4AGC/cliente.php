<?php
require_once "lib/nusoap.php";
$lugares = new nusoap_client("http://localhost/practica4AGC/server.php");
$error = $lugares->getError();
if ($error){
    echo "<h2> Constructor Error</h2><pre>". $error. "</pre>";
  }

  $result = $lugares->call("getPaises", array ("datos" => "Paises"));
  if ($lugares->fault){
      echo "<h2>Fault</h2><pre>";
      print_r($result);
      echo "</pre>";
  }
  else{
    $error = $lugares->getError();
    if($error){
        echo "<h2>Error</h2><pre>". $error. "</pre>";
    }
    else{
        echo "<h2>PAISES QUE ME GUSTARIA VISITAR</h2><pre>";
        echo $result;
        echo"</pre>";
    }  
  }
?>
