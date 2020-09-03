<?php
    $title = "Uriangato | Definir ";
?>

<head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<section class="contact_area p_40">
  <div class="container mt-40">
    <div class="card table-responsive p-0">
      <div class="card-header">
        <center>
          <h3>Nombre propuesta de icono</h3>
        </center>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div id="contenedor">
          <form class="form-horizontal" action="guardarIcono.php" method="post" id="contact_form">

            <div class="row">
              <div class="col-md-6">
               
                <div class="form-group">
                  <label class="control-label">Nombre:</label>
                  <div class="inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                      <input name="name_p" placeholder="Nombre" class="form-control" type="text" required>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                <label class="control-label">Seleccionar icono</label>
                <input type="file" class="form-control-file border">
                </div>
              </div>

              <div class="col-md-6">
                <center>
                  <img src="css/images/not_available.jpg" style="width: 200px; height:auto">
                </center>
              </div>
            </div>
          
            <button type="submit" class="btn btn-success float-right" name="add_senalitica">Agregar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>