<li class="nav-item dropdown user user-menu open">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
      <span class="hidden-xs">{{ Auth::user()->alias }}</span>
    </a>
    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
      <!-- User image -->
      <li class="user-header">
        <img src="{{ Auth::user()->avatar }}" class="img-circle" alt="User Image">

        <p>
          {{ Auth::user()->name }}
          <small>{{ Auth::user()->created_at }}</small>
        </p>
      </li>
      <!-- Menu Body -->
      <li class="user-body">
        <div class="row">
          <div class="col-md-5 text-center">
            <a href="app/account">Meus Dados</a>
          </div>
          <div class="col-md-3 text-center">

          </div>
          <div class="col-md-4 text-center">
            <a href="app/logout">Sair</a>
          </div>
        </div>
        <!-- /.row -->
      </li>

    </ul>
  </li>
