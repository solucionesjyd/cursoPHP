<?php include 'admin/conexion/conexion_web.php';
$id = htmlentities($_GET['id']);
$sel = $con->prepare("SELECT * FROM inventario WHERE propiedad = ? ");
$sel->bind_param('s', $id);
$sel->execute();
$res = $sel->get_result();
if ($f =$res->fetch_assoc()) {

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="admin/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Sitio web</title>
</head>
<body class="blue-grey lighten-5">
<nav class="red" >
  <a href="#" class="brand-logo center">Logo</a>
</nav>

<div class="container">
  <div class="row">
  <div class="col s12">
    <h5 class="header"><?php echo $f['tipo_inmueble'] ?> EN <?php echo $f['operacion'] ?> PRECIO <?php echo $f['precio'] ?></h5>
    <div class="card horizontal">
      <div class="card-image">
        <img src="admin/propiedades/<?php echo $f['foto_principal'] ?>">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p><b>UBICACION:</b> <?php echo $f['mapa'] ?></p>
          <p><b>DESCRIPCION:</b> <?php echo $f['comentario_web'] ?></p>
          <p><b>RECAMARAS:</b> <?php echo $f['recamaras'] ?></p>
          <p><b>BAÑOS:</b> <?php echo $f['banos'] ?></p>
          <p><b>COCHERAS:</b> <?php echo $f['cocheras'] ?></p>
          <p><b>PLANTAS:</b> <?php echo $f['plantas'] ?></p>
          <div class="row">
            <br>
            <div class="col s4">
              <?php
              $asesor = $f['asesor'];
              $sel_ase = $con->prepare("SELECT correo, foto FROM usuario WHERE nombre = ? ");
              $sel_ase->bind_param('s', $asesor);
              $sel_ase->execute();
              $res_ase = $sel_ase->get_result();
              if ($f_ase =$res_ase->fetch_assoc()) {

              }
               ?>
               <img src="admin/usuarios/<?php echo $f_ase['foto'] ?>" width="100" class="circle">
            </div>
            <div class="col s8">
              <p><b>ASESOR: </b><?php echo $asesor ?></p>
              <p><b>CORREO: </b><?php echo $f_ase['correo'] ?></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
   </div>

   <div class="row">
     <div class="col s12">
       <div class="card">
         <div class="card-content">
           <?php $sel_img = $con->prepare("SELECT * FROM imagenes WHERE id_propiedad = ? ");
           $sel_img->bind_param('s', $id);
           $sel_img->execute();
           $res_img = $sel_img->get_result();
           while ($f_img =$res_img->fetch_assoc()) {?>
            <img src="admin/propiedades/<?php echo $f_img['ruta'] ?>" width="200" >
            <?php }
             ?>
         </div>
       </div>
     </div>
   </div>

   <div class="row">
     <div class="col s12">
       <div class="card">
         <div class="card-content">
           <span class="card-title">UBICACION</span>
           <div class="row">
             <div class="col s6">
               <!-- MAPA AQUI -->
             </div>
             <div class="col s6">
               <form  action="comentario.php" method="post">
                 <div class="input-field">
                   <input type="text" name="nombre" pattern="[A-Za-z/s ]+"  title=""  id="nombre" required >
                   <label for="nombre">Nombre:</label>
                 </div>
                 <div class="input-field">
                   <input type="text" name="telefono"   title=""  id="telefono"  >
                   <label for="telefono">Telefono:</label>
                 </div>
                 <div class="input-field">
                   <input type="email" name="correo"   title=""  id="correo" required  >
                   <label for="correo">Correo:</label>
                 </div>
                 <div class="input-field">
                   <textarea name="mensaje" rows="8" cols="80" id="" onblur="may(this.value, this.id)" class="materialize-textarea"></textarea>
                   <label for="">Mensaje:</label>
                   <input type="hidden" name="id_propiedad" value="<?php echo $id ?>">
                 </div>
                 <button type="submit" class="btn">Enviar</button>
               </form>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

</div>


  <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
  <script src="admin/js/materialize.min.js"></script>
</body>
</html>
