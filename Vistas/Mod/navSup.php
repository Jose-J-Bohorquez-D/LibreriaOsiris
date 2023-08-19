<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="">
      Biblioteca Osiris
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item">
        Inicio
      </a>

      <a class="navbar-item">
        Nosotros
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Servicios
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            Consultas
          </a>
          <a class="navbar-item">
            Trabajos
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Ayuda
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary">
            <strong>Registrarme</strong>
          </a>
          <a class="button is-light">
            Ingresar
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', () => {

// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Add a click event on each of them
$navbarBurgers.forEach( el => {
  el.addEventListener('click', () => {

    // Get the target from the "data-target" attribute
    const target = el.dataset.target;
    const $target = document.getElementById(target);

    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
    el.classList.toggle('is-active');
    $target.classList.toggle('is-active');

  });
});

});
</script>