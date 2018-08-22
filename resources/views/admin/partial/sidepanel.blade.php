
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
          <a class="nav-link" href="#">
            <i class="menu-icon mdi mdi-television"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="account">
            <i class="menu-icon mdi mdi-account"></i>
            <span class="menu-title">Members</span>
          </a>
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
                  <a class="nav-link" href="order"> Orders </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="vouchers"> Gift Vouchers </a>
                </li>
                
              </ul>
            </div>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
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
                <a class="nav-link" href="../../pages/ui-features/buttons.html">Income Sales (Yearly/Monthy/Weekly/Daily)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/ui-features/typography.html">Sales (Yearly/Monthy/Weekly/Daily)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../pages/ui-features/typography.html">Top Earners</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="menu-icon mdi mdi-settings"></i>
            <span class="menu-title">General Settings</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="menu-icon mdi mdi-account"></i>
            <span class="menu-title">Admin Account</span>
          </a>
        </li>
      </ul>
    </nav>

   