<?php
  $usuario=$_POST;
  $arquivo = fopen("usuario.txt", "a+");
  $registro=implode("-",$usuario);

  fwrite($arquivo,$registro."\n");
  fclose($arquivo);
?>