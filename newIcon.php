<?php
    $title = "Uriangato | Definir ";
?>

<head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<section class="contact_area p-40">
  <div class="container" style="margin-top: 60px;">
    <div class="card table-responsive p-0">
      <div class="card-header">
        <center>
          <h3>Nombre propuesta de icono</h3>
        </center>
      </div>
      <?php
        if(isset($_GET["status"]) && isset($_GET["upload"])){
          $status = $_GET["status"];
          $upload = $_GET["upload"];
          if(intval($upload)){
            echo "<div class='alert alert-success' role='alert'> $status </div>";
          }else{
            echo "<div class='alert alert-danger' role='alert'> $status </div>";
          }
        }
      ?>
      <!-- /.card-header -->
      <div class="card-body">
        <div id="contenedor">
          <form class="form-horizontal" action="guardarIcono.php" method="post" id="icon_form" enctype="multipart/form-data" autocomplete="FALSE">

            <div class="row">
              <div class="col-md-6">
               
                <div class="form-group">
                  <label class="control-label">Nombre:</label>
                  <div class="inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                      <input name="name" id="name" placeholder="Nombre" class="form-control" type="text" required>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label">Seleccionar icono</label>
                  <input type="file" name="fileToUpload" id="fileToUpload" class="form-control-file border">
                </div>
              </div>

              <div class="col-md-6">
                <center>
                  <img src="css/images/not_available.jpg" style="width: 200px; height:auto" id="icono">
                </center>
              </div>
            </div>
          
            <button type="submit" class="btn btn-success float-right" id="submit" name="submit">Solicitar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
var submit = document.getElementById("fileToUpload");
submit.onchange = (e) =>{
  var URL = window.URL || window.webkitURL;
  var temporal;
  var file = e.target.files[0];
  var filename = file.name;
  var formatFile = filename.slice(filename.lastIndexOf(".")+1)
  
  if(formatFile.localeCompare("png") === 0 || formatFile.localeCompare("jpg") === 0 || formatFile.localeCompare("jpeg") === 0){
    console.log("imagen valida");
  }else{
    console.log("imagen no valida");
  }

  /*temporal = URL.createObjectURL(file);
        console.log(temporal);
        document.getElementById("icono").setAttribute("src",temporal);
   */   
  
}
</script>