<!--start header-->
<header class="top-header">
  <nav class="navbar navbar-expand align-items-center gap-4">

    <!-- LEFT SIDE ITEMS -->
    <ul class="navbar-nav me-auto align-items-center gap-3">
      <ul class="navbar-nav align-items-center gap-3">

      <!-- Cart -->
      <li class="nav-item d-md-flex d-none">
        <a class="nav-link position-relative" data-bs-toggle="offcanvas" href="#offcanvasCart">
          <i class="material-icons-outlined">shopping_cart</i>
          <span class="badge-notify">8</span>
        </a>
      </li>

    </ul>

      <!-- Profile -->
      <li class="nav-item dropdown">
        <a href="javascript:;" class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
          <img src="assets/images/avatars/01.png" class="rounded-circle p-1 border" width="45" height="45" alt="">
        </a>

        <!-- DROPDOWN -->
        <div class="dropdown-menu dropdown-user shadow">
          <a class="dropdown-item gap-2 py-2" href="javascript:;">
            <div class="text-center">
              <img src="assets/images/avatars/01.png" class="rounded-circle p-1 shadow mb-3" width="90" height="90" alt="">
              <h5 class="user-name mb-0 fw-bold">Hello, Jhon</h5>
            </div>
          </a>

          <hr class="dropdown-divider">

          <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('backend.profile_edit') }}">
            <i class="material-icons-outlined">person_outline</i>Profile
          </a>

          <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('backend.profile_update_password') }}">
            <i class="material-icons-outlined">local_bar</i>Change Password
          </a>
          
          <hr class="dropdown-divider">

          <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('backend.logout') }}">
            <i class="material-icons-outlined">power_settings_new</i>Logout
          </a>
        </div>
      </li>

    </ul>

  </nav>
</header>
<!--end top header-->
