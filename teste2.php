<html lang="pt-br">  
   <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   </head>
<body>  
<div class="container">  
    <form action="" method="get">
      <div class="row">
         <div class="col-3">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Escolha um valor
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <span class="dropdown-item"><div class="form-group form-check">
                <input value="0" type="checkbox" name="vxvalor[]" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">0</label>
              </div></span>
              <span class="dropdown-item" ><div class="form-group form-check">
                <input value="1" type="checkbox" name="vxvalor[]" class="form-check-input" id="exampleCheck2">
                <label class="form-check-label" for="exampleCheck2">1</label>
              </div></span>
              <span class="dropdown-item" ><div class="form-group form-check">
                <input value="2" type="checkbox" name="vxvalor[]" class="form-check-input" id="exampleCheck3">
                <label class="form-check-label" for="exampleCheck3">2</label>
              </div></span>

              <span class="dropdown-item" ><div class="form-group form-check">
                <input value="3" type="checkbox" name="vxvalor[]" class="form-check-input" id="exampleCheck4">
                <label class="form-check-label" for="exampleCheck4">3</label>
              </div></span>            
            </div>
          </div>
         </div>         
       </div>

       <button  class="btn" type="submit">Enviar</button>
    </form>
</div>   
</form>
  
</body>  
</html>  