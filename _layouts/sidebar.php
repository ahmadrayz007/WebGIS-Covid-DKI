 <!-- Left side column. contains the sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!--Dashboard Beranda -->
        <li>
          <a href="<?=url('beranda')?>">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
          </a>
        </li>
        <?php if ($session->get('nm_pengguna')=='admin'): ?>
        <!--Dashboard Kecamatan -->
        <li>
          <a href="<?=url('kecamatan')?>">
            <i class="fa fa-folder"></i> <span>Kecamatan</span>
          </a>
        </li>
        <?php endif ?>
        <!--Dashboard Leaflet -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-map"></i>
            <span>Peta Covid-19 Tiap Fase</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=url('leaflet-FaseAwal')?>"><i class="fa fa-circle-o"></i> PSBB Awal</a></li>
            <li><a href="<?=url('leaflet-FaseTransisi')?>"><i class="fa fa-circle-o"></i> PSBB Transisi</a></li>
            <li><a href="<?=url('leaflet-FaseKetat')?>"><i class="fa fa-circle-o"></i> PSBB Ketat</a></li>
          </ul>
        </li>
        <!--Dashboard Transaksi -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-map-marker"></i>
            <span>Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=url('hotspot')?>"><i class="fa fa-circle-o"></i> Hotspot</a></li>
            <li><a href="<?=url('leaflet-point')?>"><i class="fa fa-circle-o"></i> Point</a></li>
          </ul>
        </li>
        <!--Dashboard Logout -->
          <li>
          <a href="<?=url('logout')?>">
            <i class="fa fa-sign-out"></i> <span>Keluar</span>
          </a>
        </li>
      </ul>
    </section>
        </li>
    <!-- /.sidebar -->
  </aside>
