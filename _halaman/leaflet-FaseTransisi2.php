<?php
  $title="Peta Perkembangan Covid-19 Fase PSBB Transisi II";
  $judul=$title;
  $url='leaflet-FaseTransisi';
  $fileJs='leaflet-FaseTransisi2Js';
 ?>
<?=content_open($title)?>
<section class="content">
<div class="row">
<div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-blue">
      <div class="inner">
        <h3 class='lol'>11154</h3>

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
        <h3 class='lol'>11702</h3>

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
        <h3 class='lol'>13448</h3>

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
        <h3 class='lol'>260</h3>

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
        <div class="chart" id="revenue.chart1" style="height: 300px;"></div>
        <script type="text/javascript">
        new Morris.Line({
    element: 'revenue.chart1',
    resize: true,
    data: [
      {y: '12 Oktober 2020', item1: 88174, item2: 72633, item3: 1922},
      {y: '13 Oktober 2020', item1: 89228, item2: 73733, item3: 1944},
      {y: '14 Oktober 2020', item1: 90266, item2: 74924, item3: 1961},
      {y: '15 Oktober 2020', item1: 91337, item2: 75974, item3: 1984},
      {y: '16 Oktober 2020', item1: 92382, item2: 76956, item3: 2008},
      {y: '17 Oktober 2020', item1: 93356, item2: 78062, item3: 2032},
      {y: '18 Oktober 2020', item1: 94327, item2: 79136, item3: 2051},
      {y: '19 Oktober 2020', item1: 95253, item2: 80261, item3: 2064},
      {y: '20 Oktober 2020', item1: 96217, item2: 81107, item3: 2086},
      {y: '21 Oktober 2020', item1: 97217, item2: 82178, item3: 2105},
      {y: '22 Oktober 2020', item1: 98206, item2: 83338, item3: 2120},
      {y: '23 Oktober 2020', item1: 99158, item2: 84430, item3: 2138},
      {y: '24 Oktober 2020', item1: 100220, item2: 85586, item3: 2153},
      {y: '25 Oktober 2020', item1: 100991, item2: 86815, item3: 2164},
      {y: '26 Oktober 2020', item1: 101897, item2: 87977, item3: 2185},
      {y: '27 Oktober 2020', item1: 102678, item2: 89060, item3: 2195},
      {y: '28 Oktober 2020', item1: 103522, item2: 90157, item3: 2211},

      ],
    xkey: 'y',
    xLabels: "month",
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
        <div class="chart" id="revenue-chart2" style="height: 300px;"></div>
        <script type="text/javascript">
        new Morris.Line({
    element: 'revenue-chart2',
    resize: true,
    data: [
      {y: '12 Oktober 2020', item1: 1168, item2: 1084, item3: 21},
      {y: '13 Oktober 2020', item1: 1054, item2: 1100, item3: 22},
      {y: '14 Oktober 2020', item1: 1038, item2: 1191, item3: 17},
      {y: '15 Oktober 2020', item1: 1071, item2: 1050, item3: 23},
      {y: '16 Oktober 2020', item1: 1045, item2: 982, item3: 24},
      {y: '17 Oktober 2020', item1: 974, item2: 1106, item3: 24},
      {y: '18 Oktober 2020', item1: 971, item2: 1074, item3: 19},
      {y: '19 Oktober 2020', item1: 926, item2: 1125, item3: 13},
      {y: '20 Oktober 2020', item1: 964, item2: 846, item3: 22},
      {y: '21 Oktober 2020', item1: 1000, item2: 1071, item3: 19},
      {y: '22 Oktober 2020', item1: 989, item2: 1160, item3: 15},
      {y: '23 Oktober 2020', item1: 952, item2: 1092, item3: 18},
      {y: '24 Oktober 2020', item1: 1062, item2: 1156, item3: 15},
      {y: '25 Oktober 2020', item1: 771, item2: 1229, item3: 11},
      {y: '26 Oktober 2020', item1: 906, item2: 1162, item3: 21},
      {y: '27 Oktober 2020', item1: 781, item2: 1083, item3: 10},
      {y: '28 Oktober 2020', item1: 844, item2: 1097, item3: 16},
      ],
    xkey: 'y',
    xLabels: "month",
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
        <div class="chart" id="revenue-chart3" style="height: 300px;"></div>
        <script type="text/javascript">
        new Morris.Line({
    element: 'revenue-chart3',
    resize: true,
    data: [
      {y: '12 September 2020', item1: 13619},
      {y: '13 September 2020', item1: 13551},
      {y: '14 September 2020', item1: 13381},
      {y: '15 September 2020', item1: 13379},
      {y: '16 September 2020', item1: 13418},
      {y: '17 September 2020', item1: 13262},
      {y: '18 September 2020', item1: 13140},
      {y: '19 September 2020', item1: 12928},
      {y: '20 September 2020', item1: 13024},
      {y: '21 September 2020', item1: 12934},
      {y: '22 September 2020', item1: 12748},
      {y: '23 September 2020', item1: 12590},
      {y: '24 September 2020', item1: 12481},
      {y: '25 September 2020', item1: 12012},
      {y: '26 September 2020', item1: 11735},
      {y: '27 September 2020', item1: 11423},
      {y: '28 September 2020', item1: 11154},

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
        <div class="chart" id="revenue-chart4" style="height: 300px;"></div>
        <script type="text/javascript">
        new Morris.Line({
    element: 'revenue-chart4',
    resize: true,
    data: [
      {y: '12 September 2020', item1: 10.1},
      {y: '13 September 2020', item1: 10.2},
      {y: '14 September 2020', item1: 10.2},
      {y: '15 September 2020', item1: 9.7},
      {y: '16 September 2020', item1: 10.0},
      {y: '17 September 2020', item1: 12.5},
      {y: '18 September 2020', item1: 11.5},
      {y: '19 September 2020', item1: 9.1},
      {y: '20 September 2020', item1: 9.9},
      {y: '21 September 2020', item1: 8.9},
      {y: '22 September 2020', item1: 9.0},
      {y: '23 September 2020', item1: 8.4},
      {y: '24 September 2020', item1: 7.6},
      {y: '25 September 2020', item1: 13.0},
      {y: '26 September 2020', item1: 10.2},
      {y: '27 September 2020', item1: 10.2},
      {y: '28 September 2020', item1: 10.6},

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

