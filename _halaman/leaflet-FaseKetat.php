<?php
  $title="Peta Perkembangan Covid-19 Fase PSBB Ketat";
  $judul=$title;
  $url='leaflet-FaseKetat';
  $fileJs='leaflet-FaseKetatJs';
 ?>
 <section class="content">
 <div class="callout callout-danger lead">
          <h4>Info!</h4>

          <p><b>PSBB Awal</b> berlangsung pada tanggal <b>10 April - 3 Juni 2020</b> dengan jumlah hari yaitu <b>54 hari </b></p>
          <p>Silahkan menganalisis peta sebaran serta grafik!
        </div>

    <!-- Main content -->
    
      <!-- Default box -->
      <div class="box box-success">
        <div class="box-header with-border">
          <h4 class="box-title">Peta Perkembangan Covid-19</h4>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

<section class="content">
<div class="row">
<div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-blue">
      <div class="inner">
        <h3 class='lol'>13556</h3>

        <p class='lol'>Perkembangan Kasus Aktif</p>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

      <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3 class='lol'>30211</h3>

        <p class='lol'>Perkembangan Kasus Positif</p>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
          <!-- /.close box -->
          <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3 class='lol'>28052</h3>

        <p class='lol'>Perkembangan Kasus Sembuh</p>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
          <!-- /.close box -->
          <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3 class='lol'>459</h3>

        <p class='lol'>Perkembangan Total Kematian</p>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
          <!-- /.close box -->
      </div>      

<div class="row">

  <style type="text/css">
  .info {
    padding: 6px 8px;
    font: 14px/16px Arial, Helvetica, sans-serif;
    background: white;
    background: rgba(255,255,255,0.8);
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
    border-radius: 5px;
}
.info h4 {
    margin: 0 0 5px;
    color: #777;
}
.legend {
    line-height: 22px;
    color: #555;
}
.legend i {
    width: 18px;
    height: 18px;
    float: left;
    margin-right: 8px;
    opacity: 0.7;
}
 </style>
    <div id="mapid" style="centre";></div>

<!-- Coding Grafik -->
</div>
</div>
</div>
<!-- /.box -->
<div class="row">
  <div class="col-md-12">
    <!-- AREA CHART -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Grafik Akumulasi Positif PSBB Awal</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body chart-responsive">
        <div class="chart" id="chart.akumulasiawal" style="height: 300px;"></div>
        <script type="text/javascript">
        new Morris.Line({
    element: 'chart.akumulasiawal',
    resize: true,
    data: [
      {y: '14 September 2020', item1: 55926, item2: 42325, item3: 1440},
      {y: '15 September 2020', item1: 56953, item2: 43306, item3: 1468},
      {y: '16 September 2020', item1: 58458, item2: 44251, item3: 1498},
      {y: '17 September 2020', item1: 59472, item2: 45207, item3: 1513},
      {y: '18 September 2020', item1: 60875, item2: 46235, item3: 1535},
      {y: '19 September 2020', item1: 61807, item2: 47260, item3: 1546},
      {y: '20 September 2020', item1: 62886, item2: 49209, item3: 1561},
      {y: '21 September 2020', item1: 64196, item2: 49630, item3: 1592},
      {y: '22 September 2020', item1: 65318, item2: 50473, item3: 1624},
      {y: '23 September 2020', item1: 66505, item2: 51578, item3: 1650},
      {y: '24 September 2020', item1: 67638, item2: 52742, item3: 1664},
      {y: '25 September 2020', item1: 68927, item2: 54352, item3: 1677},
      {y: '26 September 2020', item1: 70184, item2: 55350, item3: 1679},
      {y: '27 September 2020', item1: 71370, item2: 56413, item3: 1692},
      {y: '28 September 2020', item1: 72177, item2: 57741, item3: 1704},
      {y: '29 September 2020', item1: 73309, item2: 58865, item3: 1718},
      {y: '30 September 2020', item1: 74368, item2: 60320, item3: 1731},
      {y: '1 Oktober 2020', item1: 75521, item2: 61444, item3: 1737},
      {y: '2 Oktober 2020', item1: 76619, item2: 62279, item3: 1740},
      {y: '3 Oktober 2020', item1: 77784, item2: 63286, item3: 1743},
      {y: '4 Oktober 2020', item1: 79214, item2: 64319, item3: 1761},
      {y: '5 Oktober 2020', item1: 80036, item2: 65295, item3: 1772},
      {y: '6 Oktober 2020', item1: 81043, item2: 66315, item3: 1806},
      {y: '7 Oktober 2020', item1: 82383, item2: 67310, item3: 1819},
      {y: '8 Oktober 2020', item1: 83392, item2: 68352, item3: 1838},
      {y: '9 Oktober 2020', item1: 84364, item2: 69203, item3: 1860},
      {y: '10 Oktober 2020', item1: 85617, item2: 70487, item3: 1877},
      {y: '11 Oktober 2020', item1: 87006, item2: 71549, item3: 1901}
      ],
    xkey: 'y',
    xLabels: "month",
    parseTime:false,
    ykeys: ['item1', 'item2', 'item3'],
    labels: ['Positif', 'Sembuh', 'Meninggal'],
    lineColors: ['#e2e600', '#3c8dbc', '#db0000']
  });
  </script>

      </div>
      <!-- /.box-body -->
      </div>
      <!-- /.box -->
      </div>
      </div>
<div class="row">
  <div class="col-md-12">
    <!-- AREA CHART -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Grafik Harian Positif PSBB Awal</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body chart-responsive">
        <div class="chart" id="chart.harianawal" style="height: 300px;"></div>
        <script type="text/javascript">
        new Morris.Line({
    element: 'chart.harianawal',
    resize: true,
    data: [
      {y: '14 September 2020', item1: 1062, item2: 1311, item3: 30},
      {y: '15 September 2020', item1: 1027, item2: 981, item3: 28},
      {y: '16 September 2020', item1: 1505, item2: 945, item3: 30},
      {y: '17 September 2020', item1: 1014, item2: 956, item3: 15},
      {y: '18 September 2020', item1: 1403, item2: 1028, item3: 22},
      {y: '19 September 2020', item1: 932, item2: 1025, item3: 11},
      {y: '20 September 2020', item1: 1079, item2: 1949, item3: 15},
      {y: '21 September 2020', item1: 1310, item2: 421, item3: 31},
      {y: '22 September 2020', item1: 1122, item2: 843, item3: 32},
      {y: '23 September 2020', item1: 1187, item2: 1105, item3: 26},
      {y: '24 September 2020', item1: 1133, item2: 1164, item3: 14},
      {y: '25 September 2020', item1: 1289, item2: 1610, item3: 13},
      {y: '26 September 2020', item1: 1257, item2: 998, item3: 2},
      {y: '27 September 2020', item1: 1186, item2: 1063, item3: 13},
      {y: '28 September 2020', item1: 807, item2: 1328, item3: 12},
      {y: '29 September 2020', item1: 1132, item2: 1124, item3: 14},
      {y: '30 September 2020', item1: 1059, item2: 1455, item3: 13},
      {y: '1 Oktober 2020', item1: 1153, item2: 1124, item3: 6},
      {y: '2 Oktober 2020', item1: 1098, item2: 835, item3: 3},
      {y: '3 Oktober 2020', item1: 1165, item2: 1007, item3: 3},
      {y: '4 Oktober 2020', item1: 1430, item2: 1033, item3: 18},
      {y: '5 Oktober 2020', item1: 822, item2: 976, item3: 11},
      {y: '6 Oktober 2020', item1: 1007, item2: 1020, item3: 34},
      {y: '7 Oktober 2020', item1: 1340, item2: 995, item3: 13},
      {y: '8 Oktober 2020', item1: 1009, item2: 1042, item3: 19},
      {y: '9 Oktober 2020', item1: 972, item2: 851, item3: 22},
      {y: '10 Oktober 2020', item1: 1253, item2: 1284, item3: 17},
      {y: '11 Oktober 2020', item1: 1389, item2: 1062, item3: 24}
      ],
    xkey: 'y',
    parseTime:false,
    ykeys: ['item1', 'item2', 'item3'],
    labels: ['Positif', 'Sembuh', 'Meninggal'],
    lineColors: ['#e2e600', '#3c8dbc', '#db0000'],
  });
  </script>
      </div>
      <!-- /.box-body -->
      </div>
      <!-- /.box -->
      </div>
      </div>
  <div class="row">
  <div class="col-md-6">
    <!-- AREA CHART -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Grafik Kasus Aktif</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body chart-responsive">
        <div class="chart" id="chart.aktifawal" style="height: 300px;"></div>
        <script type="text/javascript">
        new Morris.Line({
    element: 'chart.aktifawal',
    resize: true,
    data: [
      {y: '14 September 2020', item1: 12161,},
      {y: '15 September 2020', item1: 12179,},
      {y: '16 September 2020', item1: 12709,},
      {y: '17 September 2020', item1: 12752,},
      {y: '18 September 2020', item1: 13105,},
      {y: '19 September 2020', item1: 13001,},
      {y: '20 September 2020', item1: 12116,},
      {y: '21 September 2020', item1: 12974,},
      {y: '22 September 2020', item1: 13221,},
      {y: '23 September 2020', item1: 13277,},
      {y: '24 September 2020', item1: 13232,},
      {y: '25 September 2020', item1: 12898,},
      {y: '26 September 2020', item1: 13155,},
      {y: '27 September 2020', item1: 13265,},
      {y: '28 September 2020', item1: 12732,},
      {y: '29 September 2020', item1: 12726,},
      {y: '30 September 2020', item1: 12317,},
      {y: '1 Oktober 2020', item1: 12340,},
      {y: '2 Oktober 2020', item1: 12600,},
      {y: '3 Oktober 2020', item1: 12755,},
      {y: '4 Oktober 2020', item1: 13134,},
      {y: '5 Oktober 2020', item1: 12969,},
      {y: '6 Oktober 2020', item1: 12922,},
      {y: '7 Oktober 2020', item1: 13254,},
      {y: '8 Oktober 2020', item1: 13202,},
      {y: '9 Oktober 2020', item1: 13301,},
      {y: '10 Oktober 2020', item1: 13253,},
      {y: '11 Oktober 2020', item1: 13556,}
      ],
    xkey: 'y',
    ykeys: ['item1'],
    labels: ['Kasus Aktif'],
    parseTime:false,
    lineColors: ['#a0d0e0', '#3c8dbc', '#3c8dbc'],
    hideHover: 'auto'
  });
  </script>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    </div>
     <!-- /.row -->
    <div class="col-md-6">
    <!-- AREA CHART -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Grafik Positivity Rate (%)</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body chart-responsive">
        <div class="chart" id="chart.positivityawal" style="height: 300px;"></div>
        <script type="text/javascript">
        new Morris.Line({
    element: 'chart.positivityawal',
    resize: true,
    data: [
      {y: '14 September 2020', item1: 10.1},
      {y: '15 September 2020', item1: 12},
      {y: '16 September 2020', item1: 8},
      {y: '17 September 2020', item1: 10.8},
      {y: '18 September 2020', item1: 8.4},
      {y: '19 September 2020', item1: 10.6},
      {y: '20 September 2020', item1: 13.6},
      {y: '21 September 2020', item1: 9},
      {y: '22 September 2020', item1: 9.6},
      {y: '23 September 2020', item1: 7.1},
      {y: '24 September 2020', item1: 8.4},
      {y: '25 September 2020', item1: 9.6},
      {y: '26 September 2020', item1: 11.6},
      {y: '27 September 2020', item1: 13.2},
      {y: '28 September 2020', item1: 13.1},
      {y: '29 September 2020', item1: 10.3},
      {y: '30 September 2020', item1: 11.5},
      {y: '1 Oktober 2020', item1: 12.3},
      {y: '2 Oktober 2020', item1: 10.5},
      {y: '3 Oktober 2020', item1: 12.1},
      {y: '4 Oktober 2020', item1: 13.7},
      {y: '5 Oktober 2020', item1: 10.6},
      {y: '6 Oktober 2020', item1: 10.5},
      {y: '7 Oktober 2020', item1: 11.3},
      {y: '8 Oktober 2020', item1: 10.8},
      {y: '9 Oktober 2020', item1: 10.8},
      {y: '10 Oktober 2020', item1: 11},
      {y: '11 Oktober 2020', item1: 10.8}
      ],
    xkey: 'y',
    ykeys: ['item1'],
    labels: ['Positivity Rate'],
    parseTime:false,
    lineColors: ['#a0d0e0', '#3c8dbc', '#3c8dbc'],
    hideHover: 'auto'
  });
  </script>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    </div>
     <!-- /.row -->
    </div>

    

  </section>
