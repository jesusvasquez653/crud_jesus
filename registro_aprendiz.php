<!doctype html>
<html>
<head>
    <title>Registro de Aprendices</title>
    <meta http-equiv="Content-Type" content="text/html; charset=uf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shirnk-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link herf="miscss/estilos.css" rel="stylesheet"/>
</head>
<body>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTthy6350qdKXV7QrgEifb4KtSmSfR2gy3eA&usqp=CAUhttps://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTthy6350qdKXV7QrgEifb4KtSmSfR2gy3eA&usqp=CAUhttps://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTthy6350qdKXV7QrgEifb4KtSmSfR2gy3eA&usqp=CAUhttps://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTthy6350qdKXV7QrgEifb4KtSmSfR2gy3eA&usqp=CAUhttps://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTthy6350qdKXV7QrgEifb4KtSmSfR2gy3eA&usqp=CAU">

   <div id="div1" class="container">
    <br>
      <div id="div2">
         <?php session_start();  if(! empty($_SESSION['tipo_usuario']))  { ?> 
             <img src="http://www.cdtisena.com/img/cdti/contratacion.png" widht="400px" height="300px"> <?php }  ?>
         <div id="div3" >
            <?php
              if($_SESSION['tipo_usuario']=='ADMINISTRADOR')
              {
            ?>
            <form id="formulario" role="form" method="post" action="guardado_aprendiz.php">
               <div class="col-md-12">
                   <strong class="lgris">ingresar datos del aprendiz</strong>
                   <br>

                   <label class="lgris">identificacion:</label>
                    <div class="form-row">

                       <div class="form-group col-xs-2">
                           <select class="form-control" name="tipoid">
                            <option value="CC" selected>CC</option>
                            <option value="TI">TI</option>
                            <option value="RC">RC</option>
                            <option value="PEP">PEP</option>
                           </select>
                         </div><br>
                         <div class="form-group col-md-12">
                             <input class="form-control input-lg" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACION" required/>
                           </div>
                     </div>
                    <label class="lgris">nombres:</label>
                    <input class="form-control" style="text-transform: uppercase;" type="text" name="nombres" value="" placeholder="nombres" required/>
                
                    <label class="lgris">apellidos:</label>
                    <input class="form-control" style="text-transform: uppercase;" type="text" name="apellidos" value="" placeholder="apellidos" required/>

                    <label class="lgris">direccion:</label>
                    <input class="form-control" style="text-transform: uppercase;" type="text" name="direccion" value="" placeholder="direccion" required/>
                
                    <label class="lgris">telefono:</label>
                    <input class="form-control" type="number" name="telefono" min="9999" max="9999999999999" value="" placeholder="telefono" required/>

                    <label class="lgris">ficha:</label>
                    <input class="form-control" type="number" name="ficha" min="9999" max="9999999999999" value="" placeholder="ficha" required/>
                    <br>
                    <input class="btn btn-primary" type="submit" value="guardar">
                 </div>
             </form>
           <?php
               }
                else
                {
                   echo "no tiene permisos para realizar esta accion";
                } 
             ?>
             <br>
             <input style="width: 30%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver">
          </div>
     </div>
    </div>
</body>
</html>