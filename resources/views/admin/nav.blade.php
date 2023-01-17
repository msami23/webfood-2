<!-- Sidebar Menu -->
 <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="{{route('admin.categories.index')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>
            Categories
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('admin.menus.index')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>
            Menus
          </p>
        </a>
      </li>
      </li>
      <li class="nav-item">
        <a href="{{route('admin.about.index')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>
            About Us
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('admin.tables.index')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>
            Tables
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('admin.reservation.index')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>
            Reservations
          </p>
        </a>
      </li>


      <li class="nav-item menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Starter Pages
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
            <a href="{{route('logout')}}" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <button type="submit" class="btn btn-sm btn-danger">Logout</button>
            </a>
            </form>
          </li>

        </ul>
      </li>


    </ul>
  </nav>

