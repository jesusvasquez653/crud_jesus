<!DOCTYPE html>
<html>
<head>
    <title>modificacion de aprendices</title>
    <meta http-equiv="content-Type" content="text/html: charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shirnk_to_fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link herf="miscss/estilos.css" rel="stylesheet"/>
</head>
<body>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvSRmh8nKWZTptcU7s0mEHMOzUnHVNXExiyQ&usqp=CAU"

   <div id="consulta" class="container">
       <br>
       <div id="div2">
       <img src="https://www.yunbitsoftware.com/blog/wp-content/uploads/2018/02/154092-OUD9IM-908-e1519685852364.jpg" width="400px" height="300px">
         <div id="div4">
              <form name="formulario" role="form" methond="post">
                  <div class="col-md-12">
                    <strong class="lgris">INGRESAR CRITERIO DE BUSQUEDA</strong>
                    <br><br>
                    <div class="form-row">
                      <div class="form-group col-md-5">
                        <input class="form-control" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACION"/>
                      </div>
                      <div class="form-group col-md-3">
                        <input class="btn btn-primary" type="submit" value="consultar">
                      </div>
                    </div>
                    <br>
                  </div>
              </from>
              <br>
         </div>
         <div id="divconsulta2">
        <?php
        if ($_SERVER['REQUEST_METHOD']==='POST')
           {
                 include('funciones.php');
                 session_start();
                 $vnumid=$_POST['numid'];
               $miconexion=conectar_bd('', 'sena_bd');
               $resultado=consulta($miconexion,"select * from aprendices where apre_numid='%{$vnumid}%'");  
                if ($resultado->num_rows>0)
             {
                $fila = $resultado->fetch_object();
                $_SESSION['ide1']=$fila->apre_id;
                ?>
                <?php
                 }
                    else
                     {
                         echo "no existen registros";
                      }
                     $miconexion->close();
                 
                 
             } ?>
        </div>
    </div>
</body>
</html>