<?php
   include('funciones.php');
   session_start();
   if (!isset($_SESSION['nusuario']))
   {$_SESSION['nusuario']=$_POST['usuario'];
    $_SESSION['nclave']=$_POST['clave'];
   }
   

   $miconexion=conectar_bd('', 'sena_bd');
   $resultado=consulta($miconexion,"select * from usuarios where usua_nomuser='{$_SESSION['nusuario']}' and usua_contra='{$_SESSION['nclave']}'");
?>
<!doctype html>
<html>
<head>
   <title>Menu principal</title> 
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   <link herf="miscss/estilos.css" rel="stylesheet"/>
</head>
<body>
<body background="https://fondosmil.com/fondo/31830.jpg">

  <div id="div1" class="container">
        <br>
        <div id="div2">
             <center><img src="https://pandorafms.com/blog/wp-content/uploads/2020/08/sistema-operativo-de-red-513-featured.jpg" widht="200px" height="200px"></center> 
            <div id="div3" >
                  <?php
                        if($resultado->num_rows>0)
                           {
                              $fila=$resultado->fetch_object();
                               $_SESSION['tipo_usuario']=$fila->usua_tipo;
                     ?>
                                    <center><h1><label class="lgris">BIENVENIDO <?php echo $_SESSION['nusuario'] ?></label><h1></center> <br>
                                    <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='registro_aprendiz.php'" value="Registro de Aprendices">
                                    <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='consulta_aprendiz.php'" value="Consulta de Aprendices">
                                    <br><br>
                                    <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='modificar_aprendiz.php'" value="Actualizacion de Aprendices">
                                    <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='borrar_aprendiz.php'" value="Borrar Aprendices">
                                    <br><br>
                                    <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='crear_programa.php'" value="Crear Programa">
                                    <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='consultar_programa.php'" value="Consultar Programa">
                                    <br><br>
                                    <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='modificar_programa.php'" value="Modificar Programa">
                                    <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='eliminar_programa.php'" value="Eliminar Programa">
                                    <br><br>
                                    <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='crear_ficha.php'" value="Crear Ficha">
                                    <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='consultar_ficha.php'" value="Consultar Ficha">
                                    <br><br>
                                    <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='modificar_ficha.php'" value="Modificar Ficha">
                                    <input style="width:40%;" class="btn btn-primary" type="button" onclick="location.href ='eliminar_ficha.php'" value="Eliminar Ficha">
                        <?php
                        
                            }
                            else
                           {
                              echo "usuario o clave invalido";
                           }
                           $miconexion->close();
                        ?><br><br>
                        
             </div>     
          </div>   
    </div>
</body>
</html>         