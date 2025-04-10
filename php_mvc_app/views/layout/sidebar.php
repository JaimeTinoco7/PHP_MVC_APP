<div class="d-flex flex-column flex-shrink-0 p-3 bg-dark text-white position-fixed" style="width: 250px; height: 100vh;">
  <h4 class="text-center">Menú</h4>
  <hr class="border-light">
  
  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="?url=UserController/index" class="nav-link text-white <?php echo ($_GET['url'] == 'UserController/index' ? 'active' : ''); ?>">
        Usuarios
      </a>
    </li>
    <li>
      <a href="?url=StudentController/index" class="nav-link text-white <?php echo ($_GET['url'] == 'StudentController/index' ? 'active' : ''); ?>">
        Estudiantes
      </a>
    </li>
  </ul>
</div>
