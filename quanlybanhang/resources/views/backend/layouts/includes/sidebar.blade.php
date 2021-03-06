<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PĐ Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('backend.pages.dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Màn Hình Quản Trị</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Chức Năng Hệ Thống
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- category -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategories" aria-expanded="true" aria-controls="collapseCategories">
            <i class="fas fa-fw fa-cog"></i>
            <span>Loại sản phẩm</span>
        </a>
        <div id="collapseCategories" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Chức năng Loại Sản phẩm:</h6>
                <a class="collapse-item" href="{{ route('backend.category.index') }}">Danh sách Loại Sản Phẩm</a>
                <a class="collapse-item" href="{{ route('backend.category.create') }}">Thêm mới</a>
            </div>
        </div>
      </li>
      <!-- end category -->
      <!-- start supplier -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSuppliers" aria-expanded="true" aria-controls="collapseSuppliers">
            <i class="fas fa-fw fa-cog"></i>
            <span>Nhà Cung Cấp</span>
        </a>
        <div id="collapseSuppliers" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Chức năng Nhà Cung Cấp:</h6>
                <a class="collapse-item" href="{{ route('backend.supplier.index') }}">Danh sách Nhà Cung Cấp</a>
                <a class="collapse-item" href="{{ route('backend.supplier.create') }}">Thêm mới</a>
            </div>
        </div>
      </li>
      <!-- end supplier -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Sản Phẩm</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Chức Năng Sản Phẩm:</h6>
            <a class="collapse-item" href="{{route('backend.product.index') }}">Danh Sách Sản Phẩm</a>
            <a class="collapse-item" href="{{route('backend.customer.index') }}">Danh Sách Khách Hàng</a>
            <a class="collapse-item" href="{{route('backend.employee.index') }}">Danh Sách Nhân Viên</a>
            <a class="collapse-item" href="{{route('backend.category.index') }}">Danh Sách Loại Sản Phẩm</a>
            <a class="collapse-item" href="cards.html">Thêm mới</a>
          </div>
        </div>
      </li>
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>