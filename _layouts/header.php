<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbarlol">
        <div class="container1">
        <a class="navbar-brand" href="https://www.instagram.com/holaspatial/">
  <img id="brand-image" src="<?=templates()?>dist/img/virus.png" style="display: inline-block;">
  <span style="display: inline-block;"><b>HolaCovid</b>JKT</span>
</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?=url('beranda')?>">Beranda </a></li>
            <li><a href="<?=url('kecamatan')?>">CRUD </a></li>
            <li><a href="<?=url('leaflet-point')?>">Rumah Sakit Rujukan</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Peta Persebaran <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?=url('leaflet-FaseAwal')?>">Peta Persebaran PSBB Awal</a></li>
                <li><a href="<?=url('leaflet-FaseTransisi')?>">Peta Persebaran PSBB Transisi I</a></li>
                <li><a href="<?=url('leaflet-FaseKetat')?>">Peta Persebaran PSBB Ketat</a></li>
                <li><a href="<?=url('leaflet-FaseTransisi2')?>">Peta Persebaran PSBB Transisi II</a></li>
                <li class="divider"></li>
                <li><a href="<?=url('leaflet-point')?>">Rumah Sakit Rujukan Covid-19</a></li>
                <li class="divider"></li>
                <li><a href="<?=url('hotspot')?>">Faqih Anjeng</a></li>
              </ul>
            </li>
            <li><a href="https://corona.jakarta.go.id/id/clm">Tes Mandiri (CLM)</a></li>
          </ul>
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="https://www.instagram.com/holaspatial/" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-instagram"></i>
                  <span class="label label-success">4</span>
                </a>  
                <li><a href="https://www.instagram.com/holaspatial/">Check Our Instagram!</a></li>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>