<!--start sidebar-->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="logo-icon">
            <img src="assets/images/logo-icon.png" class="logo-img" alt="">
        </div>
        <div class="logo-name flex-grow-1">
            <h5 class="mb-0">Mayur Footware</h5>
        </div>
        <div class="sidebar-close">
            <span class="material-icons-outlined">close</span>
        </div>
    </div>

    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">

            <li class="{{ Route::currentRouteName() == 'backend.dashboard' ? 'mm-active' : '' }}">
                <a href="{{ route('backend.dashboard') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">join_right</i></div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>

            <li class="{{ in_array(Route::currentRouteName(), [
                    'backend.category_list',
                    'backend.category_create',
                    'backend.category_edit'
                ]) ? 'mm-active' : '' }}">
                <a href="{{ route('backend.category_list') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">join_right</i></div>
                    <div class="menu-title">Category</div>
                </a>
            </li>

            <li class="{{ in_array(Route::currentRouteName(), [
                    'backend.brand_list',
                    'backend.brand_create',
                    'backend.brand_edit'
                ]) ? 'mm-active' : '' }}">
                <a href="{{ route('backend.brand_list') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">join_right</i></div>
                    <div class="menu-title">Brand</div>
                </a>
            </li>

            <li class="{{ in_array(Route::currentRouteName(), [
                    'backend.product_list',
                    'backend.product_create',
                    'backend.product_edit'
                ]) ? 'mm-active' : '' }}">
                <a href="{{ route('backend.product_list') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">join_right</i></div>
                    <div class="menu-title">Product</div>
                </a>
            </li>

        </ul>
        <!--end navigation-->
    </div>
</aside>
<!--end sidebar-->
