
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-profile">
          <div class="nav-link">
            <a class="btn btn-success btn-block"  href="{{ url('account') }}">New Member
              <i class="mdi mdi-plus"></i>
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('dashboard.index') }}">
            <i class="menu-icon mdi mdi-television"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>

       <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#members" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Members</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="members">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('member')}}"> Hierarchical Tree </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('codes')}}"> Generate Code </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ url('managepayout')}}"> Manage Payout </a>
                </li>
              </ul>
            </div>
          </li>

        <li class="nav-item">
          <a class="nav-link" href="waysofearning">
            <i class="menu-icon mdi mdi-content-copy"></i>
            <span class="menu-title">Ways of Earnings</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#catalog" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-clipboard"></i>
              <span class="menu-title">Catalog</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="catalog">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                  <a class="nav-link" href="products"> Products </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="categories"> Categories </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="distributors"> Distributors </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="reviews"> Reviews </a>
                </li>
              </ul>
            </div>
          </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sales" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-cart-outline"></i>
              <span class="menu-title">Sales</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sales">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="orders"> Orders </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="vouchers"> Gift Vouchers </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="statistics"> Statistics </a>
                </li>
              </ul>
            </div>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="money">
            <i class="menu-icon mdi mdi-cash"></i>
            <span class="menu-title">Money</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#reportsmanager" aria-expanded="false" aria-controls="auth">
            <i class="menu-icon mdi mdi-file"></i>
            <span class="menu-title">Reports Manager</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="reportsmanager">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="incomesales">Income Sales (Yearly/Monthy/Weekly/Daily)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="rmsales">Sales (Yearly/Monthy/Weekly/Daily)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="topearners">Top Earners</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="generalsettings">
            <i class="menu-icon mdi mdi-settings"></i>
            <span class="menu-title">General Settings</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="adminaccount">
            <i class="menu-icon mdi mdi-account"></i>
            <span class="menu-title">Admin Account</span>
          </a>
        </li>
      </ul>
    </nav>

   