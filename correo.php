<?php include '../extend/header.php';
$nombre = htmlentities($_GET['nombre']);
$correo = htmlentities($_GET['correo']);
$id_mensaje = htmlentities($_GET['id_mensaje']);
 ?>

<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Enviar correo a: <?php echo $nombre ?></span>
        <form  action="email.php" method="post">
          <div class="input-field">
            <input type="text" name="asunto"  title="asunto"  id="asunto" onblur="may(this.value, this.id)"  >
            <label for="asunto">Asunto:</label>
          </div>
          <div class="input-field">
            <textarea name="mensaje" rows="8" cols="80" id="mensaje" onblur="may(this.value, this.id)" class="materialize-textarea"></textarea>
            <label for="mensaje">Mensaje:</label>
          </div>
          <input type="hidden" name="correo" value="<?php echo $correo ?>">
          <input type="hidden" name="id_mensaje" value="<?php echo $id_mensaje ?>">
          <input type="hidden" name="correo_asesor" value="<?php echo $_SESSION['correo']?>" >
            <input type="hidden" name="asesor" value="<?php echo $_SESSION['nombre']?>" >
          <button type="submit" class="btn">Enviar correo</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include '../extend/scripts.php'; ?>

</body>
</html>
