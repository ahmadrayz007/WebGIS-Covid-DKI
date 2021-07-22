<?php
  $title="Peta Perkembangan Covid-19 Fase PSBB Awal";
  $judul=$title;
  $url='leaflet-FaseAwal';
  $fileJs='leaflet-FaseAwalJs';
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
        <h3 class='lol'>4476</h3>

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
        <h3 class='lol'>5729</h3>

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
        <h3 class='lol'>2452</h3>

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
        <h3 class='lol'>373</h3>

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
      {y: '10 April 2020', item1: 1810, item2: 82, item3: 156},
      {y: '11 April 2020', item1: 1903, item2: 142, item3: 168},
      {y: '12 April 2020', item1: 2082, item2: 142, item3: 195},
      {y: '13 April 2020', item1: 2242, item2: 142, item3: 209},
      {y: '14 April 2020', item1: 2349, item2: 163, item3: 243},
      {y: '15 April 2020', item1: 2447, item2: 164, item3: 246},
      {y: '16 April 2020', item1: 2670, item2: 202, item3: 248},
      {y: '17 April 2020', item1: 2823, item2: 203, item3: 250},
      {y: '18 April 2020', item1: 2902, item2: 206, item3: 257},
      {y: '19 April 2020', item1: 3033, item2: 207, item3: 292},
      {y: '20 April 2020', item1: 3112, item2: 237, item3: 297},
      {y: '21 April 2020', item1: 3279, item2: 286, item3: 305},
      {y: '22 April 2020', item1: 3399, item2: 291, item3: 308},
      {y: '23 April 2020', item1: 3506, item2: 292, item3: 316},
      {y: '24 April 2020', item1: 3605, item2: 327, item3: 331},
      {y: '25 April 2020', item1: 3681, item2: 334, item3: 350},
      {y: '26 April 2020', item1: 3746, item2: 338, item3: 357},
      {y: '27 April 2020', item1: 3832, item2: 338, item3: 375},
      {y: '28 April 2020', item1: 3950, item2: 341, item3: 379},
      {y: '29 April 2020', item1: 4033, item2: 412, item3: 381},
      {y: '30 April 2020', item1: 4138, item2: 412, item3: 381},
      {y: '1 Mei 2020', item1: 4283, item2: 427, item3: 393},
      {y: '2 Mei 2020', item1: 4355, item2: 562, item3: 400},
      {y: '3 Mei 2020', item1: 4417, item2: 622, item3: 410},
      {y: '4 Mei 2020', item1: 4472, item2: 650, item3: 412},
      {y: '5 Mei 2020', item1: 4641, item2: 711, item3: 414},
      {y: '6 Mei 2020', item1: 4709, item2: 713, item3: 420},
      {y: '7 Mei 2020', item1: 4775, item2: 718, item3: 430},
      {y: '8 Mei 2020', item1: 4901, item2: 763, item3: 431},
      {y: '9 Mei 2020', item1: 4958, item2: 767, item3: 437},
      {y: '10 Mei 2020', item1: 5140, item2: 803, item3: 444},
      {y: '11 Mei 2020', item1: 5195, item2: 836, item3: 453},
      {y: '12 Mei 2020', item1: 5303, item2: 1262, item3: 457},
      {y: '13 Mei 2020', item1: 5437, item2: 1277, item3: 461},
      {y: '14 Mei 2020', item1: 5617, item2: 1279, item3: 466},
      {y: '15 Mei 2020', item1: 5679, item2: 1286, item3: 474},
      {y: '16 Mei 2020', item1: 5795, item2: 1292, item3: 475},
      {y: '17 Mei 2020', item1: 5922, item2: 1295, item3: 478},
      {y: '18 Mei 2020', item1: 5996, item2: 1301, item3: 483},
      {y: '19 Mei 2020', item1: 6053, item2: 1417, item3: 487},
      {y: '20 Mei 2020', item1: 6150, item2: 1425, item3: 493},
      {y: '21 Mei 2020', item1: 6220, item2: 1536, item3: 498},
      {y: '22 Mei 2020', item1: 6316, item2: 1558, item3: 501},
      {y: '23 Mei 2020', item1: 6443, item2: 1587, item3: 504},
      {y: '24 Mei 2020', item1: 6561, item2: 1594, item3: 505},
      {y: '25 Mei 2020', item1: 6628, item2: 1648, item3: 506},
      {y: '26 Mei 2020', item1: 6689, item2: 1678, item3: 508},
      {y: '27 Mei 2020', item1: 6826, item2: 1698, item3: 510},
      {y: '28 Mei 2020', item1: 6929, item2: 1719, item3: 514},
      {y: '29 Mei 2020', item1: 7053, item2: 1807, item3: 517},
      {y: '30 Mei 2020', item1: 7151, item2: 2003, item3: 519},
      {y: '31 Mei 2020', item1: 7272, item2: 2102, item3: 520},
      {y: '1 Juni 2020', item1: 7383, item2: 2246, item3: 521},
      {y: '2 Juni 2020', item1: 7459, item2: 2405, item3: 525},
      {y: '3 Juni 2020', item1: 7539, item2: 2534, item3: 529}
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
      {y: '10 April 2020', item1: 178, item2: 0, item3: 7},
      {y: '11 April 2020', item1: 93, item2: 60, item3: 12},
      {y: '12 April 2020', item1: 179, item2: 0, item3: 27},
      {y: '13 April 2020', item1: 160, item2: 0, item3: 14},
      {y: '14 April 2020', item1: 107, item2: 21, item3: 34},
      {y: '15 April 2020', item1: 98, item2: 1, item3: 3},
      {y: '16 April 2020', item1: 223, item2: 38, item3: 2},
      {y: '17 April 2020', item1: 153, item2: 1, item3: 2},
      {y: '18 April 2020', item1: 79, item2: 3, item3: 7},
      {y: '19 April 2020', item1: 131, item2: 1, item3: 35},
      {y: '20 April 2020', item1: 79, item2: 30, item3: 5},
      {y: '21 April 2020', item1: 167, item2: 49, item3: 8},
      {y: '22 April 2020', item1: 120, item2: 5, item3: 3},
      {y: '23 April 2020', item1: 107, item2: 1, item3: 8},
      {y: '24 April 2020', item1: 99, item2: 35, item3: 15},
      {y: '25 April 2020', item1: 76, item2: 7, item3: 19},
      {y: '26 April 2020', item1: 65, item2: 4, item3: 7},
      {y: '27 April 2020', item1: 86, item2: 0, item3: 18},
      {y: '28 April 2020', item1: 118, item2: 3, item3: 4},
      {y: '29 April 2020', item1: 83, item2: 71, item3: 2},
      {y: '30 April 2020', item1: 105, item2: 0, item3: 0},
      {y: '1 Mei 2020', item1: 145, item2: 15, item3: 12},
      {y: '2 Mei 2020', item1: 72, item2: 135, item3: 7},
      {y: '3 Mei 2020', item1: 62, item2: 60, item3: 10},
      {y: '4 Mei 2020', item1: 55, item2: 28, item3: 2},
      {y: '5 Mei 2020', item1: 169, item2: 61, item3: 2},
      {y: '6 Mei 2020', item1: 68, item2: 2, item3: 6},
      {y: '7 Mei 2020', item1: 66, item2: 5, item3: 10},
      {y: '8 Mei 2020', item1: 126, item2: 45, item3: 1},
      {y: '9 Mei 2020', item1: 57, item2: 4, item3: 6},
      {y: '10 Mei 2020', item1: 182, item2: 36, item3: 7},
      {y: '11 Mei 2020', item1: 55, item2: 33, item3: 9},
      {y: '12 Mei 2020', item1: 108, item2: 426, item3: 4},
      {y: '13 Mei 2020', item1: 134, item2: 15, item3: 4},
      {y: '14 Mei 2020', item1: 180, item2: 2, item3: 5},
      {y: '15 Mei 2020', item1: 62, item2: 7, item3: 8},
      {y: '16 Mei 2020', item1: 116, item2: 6, item3: 1},
      {y: '17 Mei 2020', item1: 127, item2: 3, item3: 3},
      {y: '18 Mei 2020', item1: 74, item2: 6, item3: 5},
      {y: '19 Mei 2020', item1: 57, item2: 116, item3: 4},
      {y: '20 Mei 2020', item1: 97, item2: 8, item3: 6},
      {y: '21 Mei 2020', item1: 70, item2: 111, item3: 5},
      {y: '22 Mei 2020', item1: 96, item2: 22, item3: 3},
      {y: '23 Mei 2020', item1: 127, item2: 29, item3: 3},
      {y: '24 Mei 2020', item1: 118, item2: 7, item3: 1},
      {y: '25 Mei 2020', item1: 67, item2: 54, item3: 1},
      {y: '26 Mei 2020', item1: 61, item2: 30, item3: 2},
      {y: '27 Mei 2020', item1: 137, item2: 20, item3: 2},
      {y: '28 Mei 2020', item1: 103, item2: 21, item3: 4},
      {y: '29 Mei 2020', item1: 124, item2: 88, item3: 3},
      {y: '30 Mei 2020', item1: 98, item2: 196, item3: 2},
      {y: '31 Mei 2020', item1: 121, item2: 99, item3: 1},
      {y: '1 Juni 2020', item1: 111, item2: 144, item3: 1},
      {y: '2 Juni 2020', item1: 76, item2: 159, item3: 4},
      {y: '3 Juni 2020', item1: 80, item2: 129, item3: 4},
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
      {y: '10 April 2020', item1: 1572,},
      {y: '11 April 2020', item1: 1572,},
      {y: '12 April 2020', item1: 1745,},
      {y: '13 April 2020', item1: 1891,},
      {y: '14 April 2020', item1: 1943,},
      {y: '15 April 2020', item1: 2037,},
      {y: '16 April 2020', item1: 2220,},
      {y: '17 April 2020', item1: 2370,},
      {y: '18 April 2020', item1: 2439,},
      {y: '19 April 2020', item1: 2534,},
      {y: '20 April 2020', item1: 2578,},
      {y: '21 April 2020', item1: 2688,},
      {y: '22 April 2020', item1: 2800,},
      {y: '23 April 2020', item1: 2898,},
      {y: '24 April 2020', item1: 2947,},
      {y: '25 April 2020', item1: 2997,},
      {y: '26 April 2020', item1: 3051,},
      {y: '27 April 2020', item1: 3119,},
      {y: '28 April 2020', item1: 3230,},
      {y: '29 April 2020', item1: 3240,},
      {y: '30 April 2020', item1: 3345,},
      {y: '1 Mei 2020', item1: 3463,},
      {y: '2 Mei 2020', item1: 3393,},
      {y: '3 Mei 2020', item1: 3385,},
      {y: '4 Mei 2020', item1: 3410,},
      {y: '5 Mei 2020', item1: 3516,},
      {y: '6 Mei 2020', item1: 3576,},
      {y: '7 Mei 2020', item1: 3627,},
      {y: '8 Mei 2020', item1: 3707,},
      {y: '9 Mei 2020', item1: 3754,},
      {y: '10 Mei 2020', item1: 3893,},
      {y: '11 Mei 2020', item1: 3906,},
      {y: '12 Mei 2020', item1: 3584,},
      {y: '13 Mei 2020', item1: 3699,},
      {y: '14 Mei 2020', item1: 3872,},
      {y: '15 Mei 2020', item1: 3919,},
      {y: '16 Mei 2020', item1: 4028,},
      {y: '17 Mei 2020', item1: 4149,},
      {y: '18 Mei 2020', item1: 4212,},
      {y: '19 Mei 2020', item1: 4149,},
      {y: '20 Mei 2020', item1: 4232,},
      {y: '21 Mei 2020', item1: 4186,},
      {y: '22 Mei 2020', item1: 4257,},
      {y: '23 Mei 2020', item1: 4352,},
      {y: '24 Mei 2020', item1: 4462,},
      {y: '25 Mei 2020', item1: 4474,},
      {y: '26 Mei 2020', item1: 4503,},
      {y: '27 Mei 2020', item1: 4618,},
      {y: '28 Mei 2020', item1: 4696,},
      {y: '29 Mei 2020', item1: 4729,},
      {y: '30 Mei 2020', item1: 4629,},
      {y: '31 Mei 2020', item1: 4650,},
      {y: '1 Juni 2020', item1: 4616,},
      {y: '2 Juni 2020', item1: 4529,},
      {y: '3 Juni 2020', item1: 4476},
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
      {y: '11 April 2020', item1: 7.1,},
      {y: '10 April 2020', item1: 19.6,},
      {y: '12 April 2020', item1: 19,},
      {y: '13 April 2020', item1: 12.7,},
      {y: '14 April 2020', item1: 8.8,},
      {y: '15 April 2020', item1: 22.7,},
      {y: '16 April 2020', item1: 1,},
      {y: '17 April 2020', item1: 6.5,},
      {y: '18 April 2020', item1: 11.7,},
      {y: '19 April 2020', item1: 6.3,},
      {y: '20 April 2020', item1: 10.4,},
      {y: '21 April 2020', item1: 7.5,},
      {y: '22 April 2020', item1: 6.9,},
      {y: '23 April 2020', item1: 5.8,},
      {y: '24 April 2020', item1: 4.8,},
      {y: '25 April 2020', item1: 5.1,},
      {y: '26 April 2020', item1: 10.7,},
      {y: '27 April 2020', item1: 8.2,},
      {y: '28 April 2020', item1: 4.4,},
      {y: '29 April 2020', item1: 4.6,},
      {y: '30 April 2020', item1: 6.2,},
      {y: '1 Mei 2020', item1: 2.9,},
      {y: '2 Mei 2020', item1: 2.8,},
      {y: '3 Mei 2020', item1: 4.9,},
      {y: '4 Mei 2020', item1: 6.5,},
      {y: '5 Mei 2020', item1: 2.7,},
      {y: '6 Mei 2020', item1: 2.2,},
      {y: '7 Mei 2020', item1: 7.3,},
      {y: '8 Mei 2020', item1: 2.3,},
      {y: '9 Mei 2020', item1: 6.9,},
      {y: '10 Mei 2020', item1: 3.7,},
      {y: '11 Mei 2020', item1: 4.2,},
      {y: '12 Mei 2020', item1: 4.3,},
      {y: '13 Mei 2020', item1: 6.9,},
      {y: '14 Mei 2020', item1: 2.5,},
      {y: '15 Mei 2020', item1: 4.8,},
      {y: '16 Mei 2020', item1: 6.3,},
      {y: '17 Mei 2020', item1: 5.3,},
      {y: '18 Mei 2020', item1: 2,},
      {y: '19 Mei 2020', item1: 3.8,},
      {y: '20 Mei 2020', item1: 2.9,},
      {y: '21 Mei 2020', item1: 5.1,},
      {y: '22 Mei 2020', item1: 4,},
      {y: '23 Mei 2020', item1: 6.7,},
      {y: '24 Mei 2020', item1: 7.7,},
      {y: '25 Mei 2020', item1: 7,},
      {y: '26 Mei 2020', item1: 5.3,},
      {y: '27 Mei 2020', item1: 4.2,},
      {y: '28 Mei 2020', item1: 4.2,},
      {y: '29 Mei 2020', item1: 6,},
      {y: '30 Mei 2020', item1: 4.1,},
      {y: '31 Mei 2020', item1: 4.3,},
      {y: '1 Juni 2020', item1: 1.8,},
      {y: '2 Juni 2020', item1: 3,},
      {y: '3 Juni 2020', item1: 3.6},
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
    </div>

    

  </section>




