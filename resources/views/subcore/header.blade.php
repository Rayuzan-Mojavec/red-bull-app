<header class="navbar sticky-top flex-md-nowrap p-0 shadow" style="background-color: #FFD300">
    <a class="navbar-brand bg-none col-md-3 col-lg-2 me-0 px-3" style="color: black; background-color: #FFD300" href="/">Test Site</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
          <form action="/logout" method="post">
              @csrf
              <button type="submit" class="nav-link px-3 border-0 text-dark" style="background-color: #FFD300">
                Log out
              </button>
            </form>
      </div>
    </div>
  </header>