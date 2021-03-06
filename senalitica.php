<?php

$title = "Uriangato | Señalitica";

require_once("config/load.php");
$types = find_all('type');
?>
<?php
if(isset($_GET["status"])){
  $status = intval($_GET["status"]);
}
if (isset($_POST['add_senalitica'])) {
  if (empty($errors)) {

    $name =             $db->escape($_POST['name_p']); //letra
    $descripcion =      $db->escape($_POST['description_p']); //letra
    $direccion =        $db->escape($_POST['addres_p']); //letra
    $telefono =         $db->escape($_POST['tel_p']); //letra
    $tipo =             $db->escape($_POST['type_p']); //letra
    $coor_la =          $_POST['coor_lat_p']; //letra
    $coor_lng =         $_POST['coor_lon_p']; //letra

    $query  = "INSERT INTO punto (";
    $query .= "name_p,type_p,description_p,addres_p,tel_p,coor_lat_p,coor_lon_p";
    $query .= ") VALUES (";
    $query .= " '{$name}','{$tipo}','{$descripcion}','{$direccion}','{$telefono}','{$coor_la}','{$coor_lng}')";
    //$query .= " ON DUPLICATE KEY UPDATE id_{$le} = '{$dat}'";

    if ($db->query($query)) {
      // redirect('com?l=' . $le, true);
    } else {
      $session->msg('d', ' Lo siento, registro falló.');
      //redirect('add_com', false);
    }
  } else {
    $session->msg('w', $errors);
    //redirect('add_com', true);
    $status = 0;
  }
}
?>

<head>
  <?php require_once('head.php') ?>
  <link href="css/style-personas2.css" rel="stylesheet">
  <style>
    #mapid {
      height: 180px;
    }
  </style>
</head>


<script async defer type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "Presidencia Municipal de Uriangato",
    "url": "https://www.uriangato.gob.mx",
    "sameAs": ["https://www.facebook.com/UriangatoGobiernoMunicipal", "https://twitter.com/Uriangato_Gto", "https://www.instagram.com/uriangatomunicipio"]
  }
</script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v4.0"></script>
<div class="header_top_area">
</div>
<section class="solid_banner_area">
  <div class="container">
  </div>
</section>
<!----Seccion de Transparencia--->
<section class="contact_area p_40">
  <div class="container mt-40">
    <div class="card table-responsive p-0">
      <div class="card-header">
        <center>
          <h3>Datos de Señalitica</h3>
        </center>
      </div>
      <?php
          if($status){
            echo "<div class='alert alert-success' role='alert'> Registro Exitoso </div>";
          }else{
            echo "<div class='alert alert-danger' role='alert'> Algo salio mal </div>";
          }
      ?>
      <!-- /.card-header -->
      <div class="card-body">
        <div id="contenedor">
          <form class="well form-horizontal" action="senalitica.php?status=1" method="post" id="contact_form">

            <div class="row">
              <div class="col-md-6">
                <!-- Text input-->
                <div class="form-group">
                  <label class="control-label">Nombre:</label>
                  <div class="inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                      <input name="name_p" placeholder="Nombre" class="form-control" type="text" required>
                    </div>
                  </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                  <label class="control-label">Descripcion:</label>
                  <div class="inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                      <input name="description_p" placeholder="Descripcion" class="form-control" type="text">
                    </div>
                  </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                  <label class="control-label">Direccion:</label>
                  <div class="inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                      <input name="addres_p" placeholder="Direccion" class="form-control" type="text" required>
                    </div>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="control-label">Telefono:</label>
                  <div class="inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                      <input name="tel_p" placeholder="Telefono" class="form-control" type="text">
                    </div>
                  </div>
                </div>
              </div>
              <!------Separacion------>
              <div class="col-md-6">

                <!-- Select Basic -->
                <div class="form-group">
                  <label class="control-label">Tipo</label>
                  <div class="selectContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select name="type_p" class="form-control selectpicker" required>
                        <option value=" ">--Selecciona un tipo--</option>
                        <?php foreach ($types as $type) : ?>
                          <option value="<?php echo $type[0]; ?>"><?php echo strtoupper($type[1]); ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-md-6">
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="control-label">Latitud:</label>
                      <div class="inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                          <input name="coor_lat_p" id="lng" required>
                        </div>
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="control-label">Longiud:</label>
                      <div class="inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                          <input name="coor_lon_p" id="lat" required>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div id="mapid"></div>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-success float-right" name="add_senalitica">Agregar</button>
          </form>
        </div>
      </div>
</section>
<footer>
  <?php require_once('footer.php') ?>
  <!--MAPS JS     -->
  <script src="js/leaflet.js"></script>
  <script src="js/maps/mapLeaflet.js"></script>
  <!-- END MAPS JS -->

</footer>