<?php
  /*
  -- ler um arquivo txt converter para CSV e mostra em uma tabela
  --fgetcsv - LER
  --fputcsv - GRAVA
  */



  $usuariotxt=file("usuario.txt");
  
 // --Gerar CSV
  $usuariocsv = fopen('usuario.csv', 'a+');
  foreach ($usuariotxt as $usuario) {
    $item=explode("-",str_replace("\n","",$usuario));
    fputcsv($usuariocsv,$item);             
  }
  fclose($usuariocsv);
  
  // Abrindo o csv  
  $usuarioscsv = fopen("usuario.csv","r");
 
 
?>
<!DOCTYPE html>
<html lang="pt-br">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   
  <body>
    
      <div class="row">  <!--Linha 02-->
        <div class="col-md-12">
          <div class="table" border="2">
             <h3> Lista de produtos</h3>
             <table class="table">
                <thead>
                  <th>Nome</th>
                  <th>Email</th>
                </thead>  
                <tbody>
                   <?php

                      $row = 0;
                      while (($item = fgetcsv($usuarioscsv, 0, ",")) !== TRUE) {
                          if ($row++ == 0) {
                            
                       }
                       ?>
                    <tr>
                      <td><?php echo $item[0]; ?></td>
                      <td><?php echo $item[1]; ?></td>
                    </tr>   
                   <?php
                     }
                     
                  ?>  

                </tbody> 

             </table> 
          </div>
      </div>
    
</body>
</html>