

<div class="page-wrapper chiller-theme"> <!-- add class "toggled" to on load open -->
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">
        <div class="sidebar-brand">
          <a href="/index.php">Navigation</a>
          <div id="close-sidebar">
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="sidebar-header">
          <div class="user-pic">
            <img class="img-responsive img-rounded" src="assets/img/user.png"
              alt="User picture">
          </div>
          <div class="user-info">
            <span class="user-name">Unlogged
              <strong>User</strong>
            </span>
            <span class="user-role">
                <i class="fa-duotone fa-user"></i>
                <span>Player</span>
            </span>
            <span class="user-status">
                <i class="fa-duotone fa-circle fa-beat" style="--fa-primary-color: #00ff1e; --fa-secondary-color: #00ff1e;"></i>
              <span>Online</span>
            </span>
          </div>
        </div>
        <!-- sidebar-header  -->
        <div class="sidebar-search">
          <div>
            <div class="input-group">
              <input type="text" class="form-control search-menu" placeholder="Search...">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="fa-duotone fa-magnifying-glass fa-xl" aria-hidden="true"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- sidebar-search  -->
        <div class="sidebar-menu">
          <ul>
            <li class="header-menu">
              <span>General</span>
            </li>
            <li class="sidebar-dropdown">
              <a href="#">
                <i class="fa-duotone fa-circle-info"></i>
                <span>Informatii</span>
                <span class="badge badge-pill badge-warning">New</span>
              </a>
              <div class="sidebar-submenu" >
                <ul>
                  <li>
                    <a href="informatii.php?q=1">Informatii 1</a>
                  </li>
                  <li>
                    <a href="informatii.php?q=2">Informatii 2</a>
                  </li>
                  <li>
                    <a href="informatii.php?q=3">Informatii 3</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="sidebar-dropdown">
              <a href="#">
                <i class="fa-duotone fa-gamepad-modern"></i>
                <span>Joc</span>
                <span class="badge badge-pill badge-danger"><i class="fa-duotone fa-sparkles fa-lg"></i></span>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="single_player.php">Single Player
                        <span class="badge badge-pill badge-success"><i class="fa-duotone fa-person fa-lg"></i></span>
                    </a>
                  </li>
                  <li>
                    <a href="multiplayer.php">Multiplayer
                        <span class="badge badge-pill badge-success"><i class="fa-duotone fa-people-pants-simple fa-lg"></i></span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
        <!-- sidebar-menu  -->
      </div>
      <!-- sidebar-content  -->
      <div class="sidebar-footer">
        <a href="#">
            <i class="fa-duotone fa-screwdriver-wrench fa-lg" id="admin_login"></i>
            <span class="badge badge-pill badge-warning notification">AD</span>
        </a>
        <a href="#">
            <i class="fa-duotone fa-copyright fa-lg" id="credits_page" style="--fa-primary-color: #dcdcdc; --fa-secondary-color: #dcdcdc;"></i>
        </a>
        <a href="#">
            <i class="fa-duotone fa-ticket fa-lg" id="support_modal" style="--fa-primary-color: #dcdcdc; --fa-secondary-color: #dcdcdc;"></i>
            <span class="badge-sonar"></span>
        </a>
      </div>
    </nav>
</div> 
