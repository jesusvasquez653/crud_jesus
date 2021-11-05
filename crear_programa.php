<!DOCTYPE html>
<html lang="es">
<head>
    <title>crear programa</title>
    <meta http-equiv="content-Type" content="text/html: charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shirnk_to_fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link herf="miscss/estilos.css" rel="stylesheet"/>
</head>
<body>
<body background="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACoCAMAAABt9SM9AAAATlBMVEXnNpHpNZHkN5HdS5nkP5XcR5XnNZLjOpLaQZHrNJHtMpDmOJDXS5LdSZTgOpDiQpfdPpDiSJrpMJPZVZ3WVZjZS5fgTJviQpPgP5XfPJDoBc9IAAAA7UlEQVR4nO3U7W7CIBgG0AKF2mG1zI/q/d/o6qaJyy5As5yTQAj8efOEPF0HAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPDvhRJu+32t4v0Yw+OGu3HYDGMM8Seese+6j1BKF8J4y0pav9TtlHdxX1tKqbaW6+ZUY8tzWlJO7dXTvZnr9jPuQz7keg7HoR52xyn389hC23a578ur53sr8TRNQ2n79VvFw/mcr3mpfVqW3FqcLxdhPSlhmC8lrq2+1lZ/rbF8F3wMu7X46/r+6gHfzFOJx7+vX8UoBUNcwyPXAAAAAElFTkSuQmCC">

    <div id="div1" class="container">
      <br>
        <div id="div2">
            <?php session_start();  if(! empty($_SESSION['tipo_usuario'])) { ?><img src="https://1.bp.blogspot.com/-EBeLepzSWLg/W89UOm1PsmI/AAAAAAAABYw/geQ29OYt1kUlqI1bpmYTEpG46dwirPcdQCEwYBhgL/s1600/aprendices-01.jpg" widht="400px" height="400px"> <?php } ?>
            <div id="div3" >
                <?php
                if($_SESSION['tipo_usuario']=='ADMINISTRADOR')
                {
              ?>
                 <form id="formulario" role="form" method="post" action="guardar_programa.php">
                          <div class="col-md-12">
                                 <strong class="lgris">ingrese los datos del programa</strong>
                                  <br>
                                  <label class="lgris">nombre</label>
                                  <input class="form-control" style="text-transform: uppercase;" type="text" name="nombre" value="" placeholder="nombres" required/>

                                  <label class="lgris">tipo de programa</label>
                                  <div class="form-group col-xs-2">
                                  <?php 
                                include('funciones.php');
                                $miconexion=conectar_bd('','sena_bd');
                                $consulta = "SELECT * FROM tiposprograma";
                                $resultado = mysqli_query ($miconexion, $consulta) or die (mysqli_error($miconexion));
                                
                                ?>
                  <select class="form-control" name="otipo">
                    <option value="" selected></option>
                    <?php while ($opcion = $resultado -> fetch_object()) { ?>
                    <option value="<?php echo $opcion->tiposp_id;?>"><?php echo $opcion->tipos;?></option>
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
                               echo "No tiene permisos para realizar esta acción";
                              }
                         ?> 
                        <br>
            </div>
        </div>
    </div> 
</body>
</html>