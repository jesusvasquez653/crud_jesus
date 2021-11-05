<!DOCTYPE html>
<html lang="es">
<head>
    <title>crear fichas</title>
    <meta http-equiv="content-Type" content="text/html: charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shirnk_to_fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link herf="miscss/estilos.css" rel="stylesheet"/>
</head>
<body>
<body background="https://www.mactualidad.com/wp-content/uploads/2014/07/smooth-turquoise.jpg">

    <div id="div1" class="container">
      <br>
        <div id="div2">
            <?php session_start();  if(! empty($_SESSION['tipo_usuario']))  { ?> <center><img src="https://www.reciphergroup.com/assets-new/images/what-is-crm.png" widht="400px" height="400px"></center> <?php }  ?>
            <div id="div3" >
                <?php
                if($_SESSION['tipo_usuario']=='ADMINISTRADOR')
                {
              ?>
                 <form id="formulario" role="form" method="post" action="guardado_ficha.php">
                        <div class="col-md-12">
                           <strong class="lgris">ingresar datos </strong>
                           <br>
                            <label class="lgris">FICHA</label>
                             <input class="form-control" style="text-transform: uppercase;" type="text" name="NUMERO" value="" placeholder="NUMERO" required/>

                            <label class="lgris">PROGRAMA </label>
                            <div class="form-group col-xs-2">
                                      <?php

                                         include('funciones.php');
                                             $miconexion=conectar_bd('','sena_bd');
                                             $consulta = "SELECT * FROM programa";
                                             $resultado = mysqli_query ($miconexion, $consulta) or die (mysqli_error($miconexion));
                                
                                        ?>
                                          <select class="form-control" name="programa">
                                             <option value="" selected></option>
                                             <?php while ($opcion = $resultado -> fetch_object()) { ?>
                                             <option value="<?php echo $opcion->Progra_id;?>"><?php echo $opcion->Progra_Nombre;?></option>
                                             <?php } ?>
                                          </select>
                                   </div>              
                                    <br>
                                    <input class="btn btn-primary" type="submit" value="Guardar">
                                    <input style="width: 30%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver">
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
            </div>
        </div>
    </div> 
</body>
</html>