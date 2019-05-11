<aside class="sidebar col-xs-12 col-lg-4">
  <div class="widget redes-sociales">
    <div class="titulo-seccion">
      <h3>Siguenos</h3>
      <div class="redes-sociales">
        <a class="youtube" href="https://www.youtube.com/channel/UC4PXU59b8LpxWP6qix96kBg">
          <i class="icono fa fa-youtube"></i>
          <span class="seguidores">4k</span>
        </a>
        <a class="facebook" href="https://www.facebook.com/groups/1929621727324951/">
          <i class="icono fa fa-facebook-square"></i>
          <span class="seguidores">10k</span>
        </a>
      </div>
    </div>
  </div>


  <div class="widget boletin">
    <div class="titulo-seccion">
      <h3>Suscribete</h3>
      <form class="formulario" action="index.html" method="post">
        <label for="email">Unete a nosotros</label>
        <input type="email" id="email" placeholder="Correo electronico" required>
        <input type="submit" value="Enviar">
      </form>
    </div>
  </div>


  <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')) : endif; ?>

</aside>
