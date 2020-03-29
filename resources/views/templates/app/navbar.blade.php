  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        @include('templates.app.navbar-messages')
        @include('templates.app.navbar-notifications')
        @include('templates.app.navbar-userview')
    </ul>
  </nav>
  <!-- /.navbar -->
