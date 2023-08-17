
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AdminCW</title>

    <link
      rel="stylesheet"
      href="/node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="/node_modules/bootstrap-icons/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="/assets/css/styles.min.css" />

    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="">
    <nav
      class="navbar layout-navbar navbar-expand-lg bg-body-tertiary shadow-sm fixed-top"
    >
      <div class="container-fluid position-relative">
        <button
          class="btn btn-toggle-menu shadow-sm me-lg-3 order-lg-1 order-3"
          aria-label="Menu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand fw-bold order-1" href="#"
          >Admin<span class="text-primary">CW</span></a
        >
        <ul
          class="navbar-nav ms-auto me-3 me-lg-0 mb-lg-0 d-flex flex-row align-items-center order-lg-3 order-2"
        >
          <li class="nav-item me-3 me-lg-0">
            <a
              class="nav-link"
              href="#"
              id="btnFullscreen"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <i class="bi bi-arrows-fullscreen"></i>
            </a>
          </li>
          <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto d-none d-lg-flex">
            <div class="vr h-100 mx-lg-2"></div>
          </li>

          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <img
                src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                class="avatar img-fluid rounded-circle me-1"
                alt=""
              />
            </a>
            <ul class="dropdown-menu dropdown-menu-lg-end border-0 shadow">
              <li>
                <span class="px-2 py-1 d-flex align-items-center">
                  <img
                    src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                    class="avatar img-fluid rounded-circle me-2 flex-shrink-0"
                    alt=""
                  />
                  <div class="small text-truncate">
                    <h6 class="mb-0">John Doe</h6>
                    <span class="text-muted">admincw@gmail.com</span>
                  </div>
                </span>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item" href="#"
                  ><i class="bi bi-gear me-2"></i> Account</a
                >
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item" href="#"
                  ><i class="bi bi-box-arrow-right me-2"></i> Logout</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto d-none d-lg-flex">
            <div class="vr h-100 mx-lg-2"></div>
          </li>
          <li class="nav-item dropdown d-none d-lg-flex">
            <a
              class="nav-link dropdown-toggle theme-active"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
            </a>
            <ul class="dropdown-menu dropdown-menu-lg-end border-0 shadow">
              <li>
                <button
                  class="dropdown-item"
                  type="button"
                  data-bs-theme-value="dark"
                >
                  <i class="bi bi-moon-stars-fill me-2"></i> Dark
                </button>
              </li>
              <li>
                <button
                  class="dropdown-item"
                  type="button"
                  data-bs-theme-value="light"
                >
                  <i class="bi bi-sun-fill me-2"></i> Light
                </button>
              </li>
              <li>
                <button
                  class="dropdown-item"
                  type="button"
                  data-bs-theme-value="auto"
                >
                  <i class="bi bi-circle-half me-2"></i> Auto
                </button>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

    <div>
      <!-- sidebar -->
      <div class="layout-sidenav mt-3 bg-body-tertiary">
        <div class="sidenav-content shadow-sm">
          <div class="sidenav-menu" id="accordionExample">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="/index.html"
                  ><div class="sidenav-icon me-2">
                    <i class="bi bi-speedometer"></i>
                  </div>
                  DashBoard</a
                >
              </li>
              <li class="nav-header">EXAMPLES</li>
              <li class="nav-item">
                <a class="nav-link" href="/pages/user.html"
                  ><div class="sidenav-icon me-2">
                    <i class="bi bi-speedometer"></i>
                  </div>
                  User List</a
                >
              </li>
              <li class="nav-item">
                <a
                  href="#"
                  class="nav-link active"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseExtras"
                  aria-expanded="true"
                  aria-controls="collapseExtras"
                >
                  <div class="sidenav-icon me-2">
                    <i class="bi bi-plus-square"></i>
                  </div>
                  Extras
                  <div class="sidenav-collapse-arrow">
                    <i class="bi bi-chevron-down"></i>
                  </div>
                </a>

                <div
                  id="collapseExtras"
                  class="collapse nav-item-sub show"
                  aria-labelledby="headingExtras"
                  data-bs-parent="#accordionExample"
                >
                  <a href="/pages/account.html" class="nav-link"> Account</a>
                  <a href="/pages/login.html" class="nav-link"> Login</a>
                  <a href="/pages/register.html" class="nav-link"> Register</a>
                  <a href="" class="nav-link active"> Blank Page</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- content -->
      <div class="layout-content d-flex flex-column align-items-stretch">
        <div class="main-content container-fluid px-lg-5 flex-grow-1 pb-4">
          <nav style="--bs-breadcrumb-divider: '>'" class="pt-4" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../">DashBoard</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Blank Page
              </li>
            </ol>
          </nav>
          <div class="d-flex align-items-center justify-content-between">



          </div>

          <div class="row">
            <div class="col-12">
              <div class="card border-0 shadow-sm">
                <div class="card-body"></div>
              </div>
            </div>
          </div>
        </div>

        <footer class="">
          <div class="container-fluid px-lg-5 py-2 text-muted small mt-auto">
            Copyright © AdminCW 2023
          </div>
          
        </footer>
      </div>
    </div>

    <div class="overlay"></div>

    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/colorMode.js"></script>
  </body>
</html>
