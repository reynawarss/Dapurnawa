<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <img src="foto/shifu.png" style="width: 100%;position: absolute;opacity: .1;bottom: 0px;">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/logo1.png" alt="AdminLTE Logo" 
class="brand-image">
      <span class="brand-text font-weight-light">Admin Dapur Nawa</span>
    </a>
 
    <!-- Sidebar -->
    <div class="sidebar">
 
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" 
        data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="index.php?include=profil" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Data Menu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?include=kategori-menu" 
                class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?include=tag" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tag Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?include=promo" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Promo</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="index.php?include=menu" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Menu
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?include=info" class="nav-link">
              <i class="nav-icon fab fa-file-alt"></i>
              <p>
                Info
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?include=konten" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Tentang Kami
              </p>
            </a>
          </li>
          <?php 
  if (isset($_SESSION['level'])){
   if ($_SESSION['level']=="Superadmin"){?>
   <li class="nav-item">
        <a href="index.php?include=user" class="nav-link">
        <i class="nav-icon fas fa-user-cog"></i>
        <p>
           Pengaturan User
        </p>
        </a>
   </li>
  <?php }}?>
          <li class="nav-item">
            <a href="index.php?include=ubah-password" class="nav-link">
              <i class="nav-icon fas fa-user-lock"></i>
              <p>
                Ubah Password
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?include=signout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Sign Out
              </p>
            </a>
          </li>
        </ul>
      </nav>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
