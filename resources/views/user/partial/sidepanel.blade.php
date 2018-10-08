
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
        <a class="nav-link" href="{{url('home.index')}}">
            <i class="menu-icon mdi mdi-television"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="useraccounts">
            <i class="menu-icon mdi mdi-account"></i>
            <span class="menu-title">Accounts</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth1" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Ways of Earnings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="firstwoe"> Discount on Repeat Purchase </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="secondwoe"> Direct Referral </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="thirdwoe"> Global Pool Sharing </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="fourthwoe"> Infinity Pass Up </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="fifthwoe"> Company Reward System </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth2" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-settings"></i>
              <span class="menu-title">Personal Settings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="changeuseraccount"> View User Account </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="changeuseraccount"> Change User Account </a>
                </li>
              </ul>
            </div>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="orderhistory">
            <i class="menu-icon mdi mdi-history"></i>
            <span class="menu-title">Order History</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="companyinfo">
            <i class="menu-icon mdi mdi-information-outline"></i>
            <span class="menu-title">Company Information</span>
          </a>
        </li>
        <li class="nav-item nav-profile">
            <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          <i class="fa fa-sign-out side"></i> {{ __('Logout') }}
            </a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
  
          </button>
       </li>
      </ul>
    </nav>
    <!-- partial -->
   