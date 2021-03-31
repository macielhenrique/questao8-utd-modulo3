<!DOCTYPE html>
<html lang="pt-br">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   
  <body>
    <form action="salvarUser.php" method="post" >

      <div class="row">  <!--Linha 02-->

        <div class="col-md-2">
          <div class="form-group">
            <label>nome cliente<label>
            <input type="text" name="nome" class="form-control" placeholder="nome">
          </div> 
        </div>
      </div>
      </br>
      
      <div class="row">  <!--Linha 02-->
        <div class="col-md-8">
          <div class="form-group">
            <label>emai</label>
            <input type="text" name="email"   class="form-control" placeholder="email"  >
          </div>
        </div>
      </div>    
      </br>
      
      
  
     </br>
          <div class="row">  <!--Linha 03-->
              <div class="col-md-12">
                 <p class="text-right">
                  <button class="btn btn-primary"> Cadastrar  </button>  
                     
                    </p>
            </div> 

   
  </form>
</body>
</html>