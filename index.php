
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="SSC/CSS2.css">
    
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="panel-control.php">KETAB</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">ventas<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index2.php">cotizaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index3.php">clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index4.php">productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index5.php">caja</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index6.php">usuario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index7.php">estadisticas</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.co" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*||*</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">configuracion</a>
              <a class="dropdown-item" href=logout.php>Cerrar Sesion</a>

            
            </div>
          </li>
        </ul>
    <!--    <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Ventas</h1>
          
        </div>
      </div>
      <!--<h1><a href="javascript:openVentana();">crear</a></h1>-->
      <form> 
        <div class="alert" role="alert">
          
          <a class="btn btn-outline-success" onclick="openVentana()">Crear</a>
        </div>
      </form> 
        <div class="col-md-10">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>nombre(codigo) producto</th>
                <th>Precio</th>
                <th>Fecha</th>
                <th>Cliente</th>
                <th>Descuento</th>
                <th>Total</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Martillo</td>
                <td>120000</td>
                <td>2000/12/12</td>
                <td>Juanito de calcuma</td>
                <td>0%</td>
                <td>120000</td>
                
              </tr>
            </tbody>
          </table>
        </div>
<div id="holaaa" style="max-height: 0vh; transition: all 2s ease 0s; overflow: hidden;">
  <form action="index.php" method="POST" enctype="multipart/form-data"> 
    <div class="form-group">
 
    <label for="cod_d">Codigo del departamento</label>
    <input type="text" class="form-control" name="cod_d" placeholder="Ejemplo.. 509"> 

    <label for="nom_d">Nombre del departamento</label>
    <input type="text" class="form-control" name="nom_d" placeholder="Ejemplo.. Recursos Humanos"> 

    <label for="ubi_d">Ubicacion del departamento</label>
    <input type="text" class="form-control" name="ubi_d" placeholder="Ejemplo.. 8 Piso"> 

    <label for="ger_d">Gerente del departamento</label>
    <input type="text" class="form-control" name="ger_d" placeholder="Ejemplo.. Antonio Banderas"> 

    <label for="tel_d">Telefono del departamento</label>
    <input type="text" class="form-control" name="tel_d" placeholder="Ejemplo.. 305457841"> 

    <label for="pre_d">Presupuesto del departamento</label>
    <input type="text" class="form-control" name="pre_d" placeholder="Ejemplo.. 50000000"> 

    <label for="fec_d">Creacion del departamento</label>
    <input type="text" class="form-control" name="fec_d" placeholder="Ejemplo.. aaaa/mm/dd"> 
    
    <div class="form-group">
      <div class="otra">
        <button type="button" onclick="cerrarVentana();">Cerrar X</button>
      </div>
  </div>
    
    
  <div class="alert alert-warning" role="alert">
    <button type="submit" name="bt1" class="btn btn-outline-success">Registrar</button>
    </div>
      </div>
  </form>

</div>

      <div class="container">
      
        <!-- Example row of columns -->
          
<!--  <div class="row">
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div> -->

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; ANDAP 2017-2018</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function openVentana(){
            element.getElementById('holaaa').style.maxHeight = "100vh";
            element.getElementById('holaaa').style.overflow = "hidden";
            element.getElementById('holaaa').style.transition = "2";

        }
        function cerrarVentana(){
            element.getElementById('holaaa').style.maxHeight = "0";
            element.getElementById('holaaa').style.height = "hidden";
            element.getElementById('holaaa').style.transition = "2";
        }
        
    </script> 

  </body>
</html>
