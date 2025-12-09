<!--start header-->
<header class="top-header">
  <nav class="navbar navbar-expand align-items-center gap-4">

    <!-- LEFT SIDE ITEMS -->
    <ul class="navbar-nav me-auto align-items-center gap-3">
      <!-- Add left-side nav items here if needed -->
    </ul>

    <!-- RIGHT SIDE ITEMS -->
    <ul class="navbar-nav align-items-center gap-3">

      <!-- Cart -->
      <li class="nav-item d-md-flex d-none">
        <a class="nav-link position-relative" data-bs-toggle="offcanvas" href="#offcanvasCart">
          <i class="material-icons-outlined">shopping_cart</i>
          <span class="badge-notify">8</span>
        </a>
      </li>

      <!-- Profile -->
      <li class="nav-item dropdown">
        <a href="javascript:;" class="dropdown-toggle" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="assets/images/avatars/01.png" class="rounded-circle p-1 border" width="45" height="45" alt="Profile">
        </a>

        <!-- DROPDOWN -->
        <ul class="dropdown-menu dropdown-menu-end shadow p-0" aria-labelledby="profileDropdown" style="min-width: 250px; max-height: 400px; overflow-y: auto;">
          <li class="text-center py-3 border-bottom">
            <img src="assets/images/avatars/01.png" class="rounded-circle p-1 shadow mb-2" width="90" height="90" alt="Profile">
            <h5 class="user-name mb-0 fw-bold">Hello, Jhon</h5>
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('backend.profile_edit') }}">
              <i class="material-icons-outlined">person_outline</i> Profile
            </a>
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('backend.profile_change_password') }}">
              <i class="material-icons-outlined">local_bar</i> Change Password
            </a>
          </li>

          <li><hr class="dropdown-divider"></li>

          <li>
            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('backend.logout') }}">
              <i class="material-icons-outlined">power_settings_new</i> Logout
            </a>
          </li>
        </ul>
      </li>

    </ul>

  </nav>
</header>
<!--end top header-->
