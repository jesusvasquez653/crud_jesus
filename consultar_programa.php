<!DOCTYPE html>
<html>
  <head>
    <title>Consulta de Programa</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="miscss/estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
  </head>
  <body>
  <body background="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACoCAMAAABt9SM9AAAAA1BMVEX//wCKxvRFAAAAR0lEQVR4nO3BAQEAAACCIP+vbkhAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAO8GxYgAAb0jQ/cAAAAASUVORK5CYII="

    <div id="divconsulta" class="container">
      <br>
      <div id="div2">
      <center><img src="https://pandorafms.com/blog/wp-content/uploads/2020/08/sistema-operativo-de-red-513-featured.jpg" width="300px" height="300px"></center>
        <div id="div4">
            <form name="formulario" role="form" method="post">
              <div class="col-md-12">
               <center>INGRESE<strong class="lgris"/strong>
                <br><br>
                <div class="form-row">
                 <div class="form-group cold-md-3">
                  <input class="form-control" style="text-transform:uppercase;" type="text" name="nombre" value="" placeholder="Nombre" />
                 </div>
                 <div class="form-group col-md-3">
                  <input class="form-control" style="text-transform: uppercase;" type="text" name="tipos" value="" placeholder="Tipo" />
                 </div>
                 <div class="form-group col-md-3">
                 <input class="btn btn-primary" type="submit" value="Consultar Programa" >
                 </div>
                </div>
                <br>
              </div>
            </form>
            <br>
        </div>
        <div id="divconsulta2">
        <?php
        if ($_SERVER['REQUEST_METHOD']==='POST')
        {
           include('funciones.php');
             $vnombre=$_POST['nombre'];
             $vtipo=$_POST['tipos'];
             $miconexion=conectar_bd('', 'sena_bd');
             $resultado=consulta($miconexion,"select * from programa where trim(Progra_Nombre) like '%{$vnombre}%' and (trim(Progra_tipo) like '%{$vtipo}%')");
          if($resultado->num_rows>0)
            {
              while ($fila = $resultado->fetch_object())
                {
                   echo $fila->progra_id." ".$fila->progra_nombre." ".$fila->progra_tipo."<br>";
                }
            }
          else{
            echo "No existen registros";
              }  
          $miconexion->close();
        }?>
        </div>
      </div>
    </div>
  </body>
</html>