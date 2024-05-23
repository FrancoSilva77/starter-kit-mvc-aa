<main>
  <h1>Iniciar Sesión</h1>

  <?php foreach ($errores as $error) : ?>
    <div class="alerta">
      <?php echo $error; ?>
    </div>
  <?php endforeach; ?>

  <form method="POST" class="formulario" novalidate>
    <fieldset>
      <legend>Email y Password</legend>

      <label for="email">E-mail</label>
      <input type="email" name="email" placeholder="Tu Email" id="email">

      <label for="password">Password</label>
      <input type="password" name="password" placeholder="Tu Contraseña" id="password">
    </fieldset>

    <input type="submit" value="Iniciar Sesión" class="boton">
  </form>
</main>