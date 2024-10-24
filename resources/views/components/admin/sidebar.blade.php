<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                      fill="#7367F0"
                  />
                  <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                      fill="#161616"
                  />
                  <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                      fill="#161616"
                  />
                  <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                      fill="#7367F0"
                  />
                </svg>
              </span>
            <span class="app-brand-text demo menu-text fw-bold">Vuexy</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item {{ request()->is('admin/dashboard-penjualan*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">3</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('admin/dashboard-penjualan*') ? 'active' : '' }}">
                    <a href="{{route('admin.dashboard-penjualan')}}" class="menu-link">
                        <div data-i18n="Penjualan">Penjualan</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Product</span>
        </li>
        <!-- Dashboards -->
        <li class="menu-item {{ Str::is(['admin/tag-product*', 'admin/category-product*', 'admin/product*', 'admin/discount*'], request()->path()) ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-bottle"></i>
                <div data-i18n="Product">Product</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">4</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('admin/tag-product*') ? 'active' : '' }}">
                    <a href="{{route('admin.tag-product.index')}}" class="menu-link">
                        <div data-i18n="Tag">Tag</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('admin/category-product*') ? 'active' : '' }}">
                    <a href="{{route('admin.category-product.index')}}" class="menu-link">
                        <div data-i18n="Category">Category</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('admin/product*') ? 'active' : '' }}">
                    <a href="{{route('admin.product.index')}}" class="menu-link">
                        <div data-i18n="Product">Product</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('admin/discount*') ? 'active' : '' }}">
                    <a href="{{route('admin.discount.index')}}" class="menu-link">
                        <div data-i18n="Discount">Discount</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Dashboards -->
        <li class="menu-item {{ Str::is(['admin/order*', 'admin/order-item*'], request()->path()) ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-truck-delivery"></i>
                <div data-i18n="Order">Order</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('admin/tag-product*') ? 'active' : '' }}">
                    <a href="{{route('admin.tag-product.index')}}" class="menu-link">
                        <div data-i18n="Order">Order</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('admin/tag-product*') ? 'active' : '' }}">
                    <a href="{{route('admin.tag-product.index')}}" class="menu-link">
                        <div data-i18n="Order Item">Order Item</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<!-- / Menu -->
