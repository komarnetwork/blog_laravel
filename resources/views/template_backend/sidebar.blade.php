<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">

      <li class="menu-header">Dashboard</li>
      <li class=active><a class="nav-link" href="{{ route('dashboard') }}">
          <i class="fas fa-chalkboard-teacher"></i> <span>Dashboard</span></a>
      </li>

      <li class="menu-header">Starter</li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
          <i class="fas fa-book-open"></i> <span> Post </span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('post.index') }}">List Post</a></li>
          <li><a class="nav-link" href="{{ route('post.tampil_hapus') }}">List Post Dihapus</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
          <i class="far fa-clipboard"></i> <span> Kategori </span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('category.index') }}">List Kategori</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
          <i class="far fa-bookmark"></i> <span> Tags </span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('tag.index') }}">List Tags</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
          <i class="far fa-user"></i> <span> Users </span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('user.index') }}">List Users</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="bootstrap-alert.html">Alert</a></li>
          <li><a class="nav-link" href="bootstrap-badge.html">Badge</a></li>
          <li><a class="nav-link" href="bootstrap-breadcrumb.html">Breadcrumb</a></li>
          <li><a class="nav-link" href="bootstrap-buttons.html">Buttons</a></li>
          <li><a class="nav-link" href="bootstrap-card.html">Card</a></li>
          <li><a class="nav-link" href="bootstrap-carousel.html">Carousel</a></li>
          <li><a class="nav-link" href="bootstrap-collapse.html">Collapse</a></li>
          <li><a class="nav-link" href="bootstrap-dropdown.html">Dropdown</a></li>
          <li><a class="nav-link" href="bootstrap-form.html">Form</a></li>
          <li><a class="nav-link" href="bootstrap-list-group.html">List Group</a></li>
          <li><a class="nav-link" href="bootstrap-media-object.html">Media Object</a></li>
          <li><a class="nav-link" href="bootstrap-modal.html">Modal</a></li>
          <li><a class="nav-link" href="bootstrap-nav.html">Nav</a></li>
          <li><a class="nav-link" href="bootstrap-navbar.html">Navbar</a></li>
          <li><a class="nav-link" href="bootstrap-pagination.html">Pagination</a></li>
          <li><a class="nav-link" href="bootstrap-popover.html">Popover</a></li>
          <li><a class="nav-link" href="bootstrap-progress.html">Progress</a></li>
          <li><a class="nav-link" href="bootstrap-table.html">Table</a></li>
          <li><a class="nav-link" href="bootstrap-tooltip.html">Tooltip</a></li>
          <li><a class="nav-link" href="bootstrap-typography.html">Typography</a></li>
        </ul>
      </li>
    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
      <a href="" class="btn btn-primary btn-lg btn-block btn-icon-split">
        <i class="fas fa-home"></i> Blog
      </a>
    </div>
  </aside>
</div>