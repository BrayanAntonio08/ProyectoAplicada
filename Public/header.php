<header class="navbar justify-content-center mb-4">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?=ROUTE('page','home')?>">FutCalendar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?=ROUTE('page','home')?>">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Equipo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=ROUTE('page','calendar')?>">Calendario</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action 1</a></li>
              <li><a class="dropdown-item" href="#">Action 2</a></li>
              <li><a class="dropdown-item" href="#">Action 3</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>