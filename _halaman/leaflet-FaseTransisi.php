<?php
  $title="Peta Perkembangan Covid-19 Fase PSBB Transisi I";
  $judul=$title;
  $url='leaflet-FaseTransisi';
  $fileJs='leaflet-FaseTransisiJs';
 ?>
 <section class="content">
 <div class="callout callout-danger lead">
          <h4>Info!</h4>

          <p><b>PSBB Awal</b> berlangsung pada tanggal <b>4 Juni - 13 September 2020</b> dengan jumlah hari yaitu <b>101 hari </b></p>
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
        <h3 class='lol'>12440</h3>
        
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
        <h3 class='lol'>47180</h3>

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
        <h3 class='lol'>38263</h3>

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
        <h3 class='lol'>878</h3>

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
      {y: '4 Juni 2020', item1: 7600, item2: 2607, item3: 2666},
      {y: '5 Juni 2020', item1: 7684, item2: 2751, item3: 2666},
      {y: '6 Juni 2020', item1: 7786, item2: 2840, item3: 2666},
      {y: '7 Juni 2020', item1: 7964, item2: 3170, item3: 2666},
      {y: '8 Juni 2020', item1: 8037, item2: 3205, item3: 2666},
      {y: '9 Juni 2020', item1: 8276, item2: 3369, item3: 2666},
      {y: '10 Juni 2020', item1: 8423, item2: 3517, item3: 2666},
      {y: '11 Juni 2020', item1: 8552, item2: 3664, item3: 2666},
      {y: '12 Juni 2020', item1: 8628, item2: 3780, item3: 2666},
      {y: '13 Juni 2020', item1: 8748, item2: 3840, item3: 2666},
      {y: '14 Juni 2020', item1: 8863, item2: 4091, item3: 2666},
      {y: '15 Juni 2020', item1: 8968, item2: 4198, item3: 2666},
      {y: '16 Juni 2020', item1: 9092, item2: 4329, item3: 2666},
      {y: '17 Juni 2020', item1: 9209, item2: 4444, item3: 2666},
      {y: '18 Juni 2020', item1: 9385, item2: 4592, item3: 2666},
      {y: '19 Juni 2020', item1: 9525, item2: 4682, item3: 2666},
      {y: '20 Juni 2020', item1: 9703, item2: 4821, item3: 2666},
      {y: '21 Juni 2020', item1: 9830, item2: 5054, item3: 2666},
      {y: '22 Juni 2020', item1: 9957, item2: 5128, item3: 2666},
      {y: '23 Juni 2020', item1: 10123, item2: 5228, item3: 2666},
      {y: '24 Juni 2020', item1: 10277, item2: 5322, item3: 2666},
      {y: '25 Juni 2020', item1: 10472, item2: 5435, item3: 2666},
      {y: '26 Juni 2020', item1: 10640, item2: 5542, item3: 2666},
      {y: '27 Juni 2020', item1: 10853, item2: 5610, item3: 2666},
      {y: '28 Juni 2020', item1: 10985, item2: 5865, item3: 2666},
      {y: '29 Juni 2020', item1: 11080, item2: 6118, item3: 2666},
      {y: '30 Juni 2020', item1: 11276, item2: 6512, item3: 2666},
      {y: '1 Juli 2020', item1: 11482, item2: 6680, item3: 2666},
      {y: '2 Juli 2020', item1: 11677, item2: 6871, item3: 2666},
      {y: '3 Juli 2020', item1: 11824, item2: 7109, item3: 2666},
      {y: '4 Juli 2020', item1: 12039, item2: 7377, item3: 2666},
      {y: '5 Juli 2020', item1: 12295, item2: 7663, item3: 2666},
      {y: '6 Juli 2020', item1: 12526, item2: 8033, item3: 2666},
      {y: '7 Juli 2020', item1: 12725, item2: 8277, item3: 2666},
      {y: '8 Juli 2020', item1: 13069, item2: 8429, item3: 2666},
      {y: '9 Juli 2020', item1: 13359, item2: 8647, item3: 2666},
      {y: '10 Juli 2020', item1: 13598, item2: 8825, item3: 2666},
      {y: '11 Juli 2020', item1: 13957, item2: 9040, item3: 2666},
      {y: '12 Juli 2020', item1: 14361, item2: 9200, item3: 2666},
      {y: '13 Juli 2020', item1: 14639, item2: 9408, item3: 2666},
      {y: '14 Juli 2020', item1: 14914, item2: 9528, item3: 2666},
      {y: '15 Juli 2020', item1: 15173, item2: 9721, item3: 2666},
      {y: '16 Juli 2020', item1: 15466, item2: 9857, item3: 2666},
      {y: '17 Juli 2020', item1: 15707, item2: 9994, item3: 2666},
      {y: '18 Juli 2020', item1: 16038, item2: 10117, item3: 2666},
      {y: '19 Juli 2020', item1: 16351, item2: 10444, item3: 2666},
      {y: '20 Juli 2020', item1: 16712, item2: 10602, item3: 2666},
      {y: '21 Juli 2020', item1: 17153, item2: 10864, item3: 2666},
      {y: '22 Juli 2020', item1: 17529, item2: 11187, item3: 2666},
      {y: '23 Juli 2020', item1: 17945, item2: 11302, item3: 2666},
      {y: '24 Juli 2020', item1: 18230, item2: 11585, item3: 2666},
      {y: '25 Juli 2020', item1: 18623, item2: 11715, item3: 2666},
      {y: '26 Juli 2020', item1: 19001, item2: 11889, item3: 2666},
      {y: '27 Juli 2020', item1: 19473, item2: 11996, item3: 2666},
      {y: '28 Juli 2020', item1: 19885, item2: 12373, item3: 2666},
      {y: '29 Juli 2020', item1: 20470, item2: 12613, item3: 2666},
      {y: '30 Juli 2020', item1: 20769, item2: 12801, item3: 2666},
      {y: '31 Juli 2020', item1: 21201, item2: 13208, item3: 2666},
      {y: '1 Agustus 2020', item1: 21575, item2: 13887, item3: 2666},
      {y: '2 Agustus 2020', item1: 21954, item2: 14027, item3: 2666},
      {y: '3 Agustus 2020', item1: 22443, item2: 14165, item3: 2666},
      {y: '4 Agustus 2020', item1: 22909, item2: 14381, item3: 2666},
      {y: '5 Agustus 2020', item1: 23266, item2: 14760, item3: 2666},
      {y: '6 Agustus 2020', item1: 23863, item2: 15006, item3: 2666},
      {y: '7 Agustus 2020', item1: 24521, item2: 15201, item3: 2666},
      {y: '8 Agustus 2020', item1: 25242, item2: 15710, item3: 2666},
      {y: '9 Agustus 2020', item1: 25714, item2: 16268, item3: 2666},
      {y: '10 Agustus 2020', item1: 26193, item2: 16446, item3: 2666},
      {y: '11 Agustus 2020', item1: 26664, item2: 16927, item3: 2666},
      {y: '12 Agustus 2020', item1: 27242, item2: 17349, item3: 2666},
      {y: '13 Agustus 2020', item1: 27863, item2: 17838, item3: 2666},
      {y: '14 Agustus 2020', item1: 28438, item2: 18528, item3: 2666},
      {y: '15 Agustus 2020', item1: 29036, item2: 18974, item3: 2666},
      {y: '16 Agustus 2020', item1: 29554, item2: 19708, item3: 2666},
      {y: '17 Agustus 2020', item1: 30092, item2: 19916, item3: 2666},
      {y: '18 Agustus 2020', item1: 30597, item2: 20505, item3: 2666},
      {y: '19 Agustus 2020', item1: 31162, item2: 21069, item3: 2666},
      {y: '20 Agustus 2020', item1: 31757, item2: 21795, item3: 2666},
      {y: '21 Agustus 2020', item1: 32398, item2: 22228, item3: 2666},
      {y: '22 Agustus 2020', item1: 32999, item2: 22877, item3: 2666},
      {y: '23 Agustus 2020', item1: 33636, item2: 23567, item3: 2666},
      {y: '24 Agustus 2020', item1: 34295, item2: 25463, item3: 2666},
      {y: '25 Agustus 2020', item1: 34931, item2: 25986, item3: 2666},
      {y: '26 Agustus 2020', item1: 35642, item2: 26750, item3: 2666},
      {y: '27 Agustus 2020', item1: 36462, item2: 28288, item3: 2666},
      {y: '28 Agustus 2020', item1: 37278, item2: 29169, item3: 2666},
      {y: '29 Agustus 2020', item1: 38166, item2: 29768, item3: 2666},
      {y: '30 Agustus 2020', item1: 39280, item2: 30134, item3: 2666},
      {y: '31 Agustus 2020', item1: 40309, item2: 30538, item3: 2666},
      {y: '1 September 2020', item1: 41250, item2: 31267, item3: 2666},
      {y: '2 September 2020', item1: 42303, item2: 31741, item3: 2666},
      {y: '3 September 2020', item1: 43709, item2: 32424, item3: 2666},
      {y: '4 September 2020', item1: 44604, item2: 33206, item3: 2666},
      {y: '5 September 2020', item1: 45446, item2: 33991, item3: 2666},
      {y: '6 September 2020', item1: 46691, item2: 34738, item3: 2666},
      {y: '7 September 2020', item1: 47796, item2: 35431, item3: 2666},
      {y: '8 September 2020', item1: 48811, item2: 36451, item3: 2666},
      {y: '9 September 2020', item1: 49837, item2: 37245, item3: 2666},
      {y: '10 September 2020', item1: 51287, item2: 38226, item3: 2666},
      {y: '11 September 2020', item1: 52321, item2: 39115, item3: 2666},
      {y: '12 September 2020', item1: 53761, item2: 40183, item3: 2666},
      {y: '13 September 2020', item1: 54864, item2: 41014, item3: 2666},

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
      {y: '4 Juni 2020', item1: 61, item2: 73, item3: 1},
      {y: '5 Juni 2020', item1: 84, item2: 144, item3: 2},
      {y: '6 Juni 2020', item1: 102, item2: 89, item3: 3},
      {y: '7 Juni 2020', item1: 160, item2: 330, item3: 2},
      {y: '8 Juni 2020', item1: 91, item2: 35, item3: 1},
      {y: '9 Juni 2020', item1: 239, item2: 164, item3: 9},
      {y: '10 Juni 2020', item1: 147, item2: 148, item3: 4},
      {y: '11 Juni 2020', item1: 129, item2: 147, item3: 4},
      {y: '12 Juni 2020', item1: 76, item2: 116, item3: 6},
      {y: '13 Juni 2020', item1: 120, item2: 60, item3: 3},
      {y: '14 Juni 2020', item1: 115, item2: 251, item3: 7},
      {y: '15 Juni 2020', item1: 105, item2: 107, item3: 9},
      {y: '16 Juni 2020', item1: 124, item2: 131, item3: 3},
      {y: '17 Juni 2020', item1: 117, item2: 115, item3: 5},
      {y: '18 Juni 2020', item1: 176, item2: 148, item3: 6},
      {y: '19 Juni 2020', item1: 140, item2: 90, item3: 5},
      {y: '20 Juni 2020', item1: 178, item2: 139, item3: 4},
      {y: '21 Juni 2020', item1: 127, item2: 233, item3: 12},
      {y: '22 Juni 2020', item1: 127, item2: 74, item3: 3},
      {y: '23 Juni 2020', item1: 166, item2: 100, item3: 1},
      {y: '24 Juni 2020', item1: 154, item2: 94, item3: 9},
      {y: '25 Juni 2020', item1: 195, item2: 113, item3: 3},
      {y: '26 Juni 2020', item1: 168, item2: 107, item3: 1},
      {y: '27 Juni 2020', item1: 213, item2: 68, item3: 0},
      {y: '28 Juni 2020', item1: 132, item2: 255, item3: 3},
      {y: '29 Juni 2020', item1: 95, item2: 253, item3: 1},
      {y: '30 Juni 2020', item1: 196, item2: 394, item3: 5},
      {y: '1 Juli 2020', item1: 206, item2: 168, item3: 3},
      {y: '2 Juli 2020', item1: 195, item2: 191, item3: 2},
      {y: '3 Juli 2020', item1: 147, item2: 238, item3: 2},
      {y: '4 Juli 2020', item1: 215, item2: 268, item3: 2},
      {y: '5 Juli 2020', item1: 256, item2: 286, item3: 8},
      {y: '6 Juli 2020', item1: 231, item2: 370, item3: 0},
      {y: '7 Juli 2020', item1: 199, item2: 244, item3: 6},
      {y: '8 Juli 2020', item1: 344, item2: 152, item3: 3},
      {y: '9 Juli 2020', item1: 290, item2: 218, item3: 10},
      {y: '10 Juli 2020', item1: 239, item2: 178, item3: 7},
      {y: '11 Juli 2020', item1: 359, item2: 215, item3: 6},
      {y: '12 Juli 2020', item1: 404, item2: 160, item3: 12},
      {y: '13 Juli 2020', item1: 278, item2: 208, item3: 8},
      {y: '14 Juli 2020', item1: 275, item2: 120, item3: 4},
      {y: '15 Juli 2020', item1: 259, item2: 193, item3: 6},
      {y: '16 Juli 2020', item1: 293, item2: 136, item3: 2},
      {y: '17 Juli 2020', item1: 241, item2: 137, item3: 9},
      {y: '18 Juli 2020', item1: 331, item2: 123, item3: 9},
      {y: '19 Juli 2020', item1: 313, item2: 327, item3: 8},
      {y: '20 Juli 2020', item1: 361, item2: 158, item3: 1},
      {y: '21 Juli 2020', item1: 441, item2: 262, item3: 9},
      {y: '22 Juli 2020', item1: 376, item2: 323, item3: 8},
      {y: '23 Juli 2020', item1: 416, item2: 115, item3: 1},
      {y: '24 Juli 2020', item1: 285, item2: 283, item3: 1},
      {y: '25 Juli 2020', item1: 393, item2: 130, item3: 1},
      {y: '26 Juli 2020', item1: 378, item2: 174, item3: 10},
      {y: '27 Juli 2020', item1: 472, item2: 107, item3: 3},
      {y: '28 Juli 2020', item1: 412, item2: 377, item3: 13},
      {y: '29 Juli 2020', item1: 584, item2: 240, item3: 25},
      {y: '30 Juli 2020', item1: 299, item2: 188, item3: 1},
      {y: '31 Juli 2020', item1: 432, item2: 407, item3: 15},
      {y: '1 Agustus 2020', item1: 374, item2: 679, item3: 16},
      {y: '2 Agustus 2020', item1: 379, item2: 140, item3: 0},
      {y: '3 Agustus 2020', item1: 489, item2: 138, item3: 15},
      {y: '4 Agustus 2020', item1: 466, item2: 216, item3: 13},
      {y: '5 Agustus 2020', item1: 357, item2: 379, item3: 15},
      {y: '6 Agustus 2020', item1: 597, item2: 246, item3: 13},
      {y: '7 Agustus 2020', item1: 658, item2: 195, item3: 14},
      {y: '8 Agustus 2020', item1: 721, item2: 509, item3: 12},
      {y: '9 Agustus 2020', item1: 472, item2: 558, item3: 5},
      {y: '10 Agustus 2020', item1: 479, item2: 178, item3: 1},
      {y: '11 Agustus 2020', item1: 471, item2: 481, item3: 13},
      {y: '12 Agustus 2020', item1: 578, item2: 422, item3: 15},
      {y: '13 Agustus 2020', item1: 621, item2: 489, item3: 13},
      {y: '14 Agustus 2020', item1: 575, item2: 690, item3: 4},
      {y: '15 Agustus 2020', item1: 598, item2: 446, item3: 6},
      {y: '16 Agustus 2020', item1: 518, item2: 734, item3: 4},
      {y: '17 Agustus 2020', item1: 538, item2: 208, item3: 16},
      {y: '18 Agustus 2020', item1: 505, item2: 589, item3: 17},
      {y: '19 Agustus 2020', item1: 565, item2: 564, item3: 18},
      {y: '20 Agustus 2020', item1: 595, item2: 726, item3: 15},
      {y: '21 Agustus 2020', item1: 641, item2: 433, item3: 15},
      {y: '22 Agustus 2020', item1: 601, item2: 649, item3: 15},
      {y: '23 Agustus 2020', item1: 637, item2: 690, item3: 16},
      {y: '24 Agustus 2020', item1: 659, item2: 1896, item3: 5},
      {y: '25 Agustus 2020', item1: 636, item2: 523, item3: 17},
      {y: '26 Agustus 2020', item1: 711, item2: 764, item3: 15},
      {y: '27 Agustus 2020', item1: 820, item2: 1538, item3: 3},
      {y: '28 Agustus 2020', item1: 816, item2: 881, item3: 7},
      {y: '29 Agustus 2020', item1: 888, item2: 599, item3: 18},
      {y: '30 Agustus 2020', item1: 1114, item2: 366, item3: 14},
      {y: '31 Agustus 2020', item1: 1029, item2: 404, item3: 16},
      {y: '1 September 2020', item1: 941, item2: 729, item3: 17},
      {y: '2 September 2020', item1: 1053, item2: 474, item3: 18},
      {y: '3 September 2020', item1: 1406, item2: 683, item3: 13},
      {y: '4 September 2020', item1: 895, item2: 836, item3: 7},
      {y: '5 September 2020', item1: 842, item2: 731, item3: 17},
      {y: '6 September 2020', item1: 1245, item2: 747, item3: 12},
      {y: '7 September 2020', item1: 1105, item2: 693, item3: 29},
      {y: '8 September 2020', item1: 1015, item2: 1020, item3: 12},
      {y: '9 September 2020', item1: 1026, item2: 794, item3: 17},
      {y: '10 September 2020', item1: 1450, item2: 981, item3: 18},
      {y: '11 September 2020', item1: 1034, item2: 889, item3: 17},
      {y: '12 September 2020', item1: 1440, item2: 1068, item3: 22},
      {y: '13 September 2020', item1: 1492, item2: 831, item3: 6},
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
      {y: '4 Juni 2020', item1: 7600, item2: 2607, item3: 2666},
      {y: '5 Juni 2020', item1: 7684, item2: 2751, item3: 2666},
      {y: '6 Juni 2020', item1: 7786, item2: 2840, item3: 2666},
      {y: '7 Juni 2020', item1: 7964, item2: 3170, item3: 2666},
      {y: '8 Juni 2020', item1: 8037, item2: 3205, item3: 2666},
      {y: '9 Juni 2020', item1: 8276, item2: 3369, item3: 2666},
      {y: '10 Juni 2020', item1: 8423, item2: 3517, item3: 2666},
      {y: '11 Juni 2020', item1: 8552, item2: 3664, item3: 2666},
      {y: '12 Juni 2020', item1: 8628, item2: 3780, item3: 2666},
      {y: '13 Juni 2020', item1: 8748, item2: 3840, item3: 2666},
      {y: '14 Juni 2020', item1: 8863, item2: 4091, item3: 2666},
      {y: '15 Juni 2020', item1: 8968, item2: 4198, item3: 2666},
      {y: '16 Juni 2020', item1: 9092, item2: 4329, item3: 2666},
      {y: '17 Juni 2020', item1: 9209, item2: 4444, item3: 2666},
      {y: '18 Juni 2020', item1: 9385, item2: 4592, item3: 2666},
      {y: '19 Juni 2020', item1: 9525, item2: 4682, item3: 2666},
      {y: '20 Juni 2020', item1: 9703, item2: 4821, item3: 2666},
      {y: '21 Juni 2020', item1: 9830, item2: 5054, item3: 2666},
      {y: '22 Juni 2020', item1: 9957, item2: 5128, item3: 2666},
      {y: '23 Juni 2020', item1: 10123, item2: 5228, item3: 2666},
      {y: '24 Juni 2020', item1: 10277, item2: 5322, item3: 2666},
      {y: '25 Juni 2020', item1: 10472, item2: 5435, item3: 2666},
      {y: '26 Juni 2020', item1: 10640, item2: 5542, item3: 2666},
      {y: '27 Juni 2020', item1: 10853, item2: 5610, item3: 2666},
      {y: '28 Juni 2020', item1: 10985, item2: 5865, item3: 2666},
      {y: '29 Juni 2020', item1: 11080, item2: 6118, item3: 2666},
      {y: '30 Juni 2020', item1: 11276, item2: 6512, item3: 2666},
      {y: '1 Juli 2020', item1: 11482, item2: 6680, item3: 2666},
      {y: '2 Juli 2020', item1: 11677, item2: 6871, item3: 2666},
      {y: '3 Juli 2020', item1: 11824, item2: 7109, item3: 2666},
      {y: '4 Juli 2020', item1: 12039, item2: 7377, item3: 2666},
      {y: '5 Juli 2020', item1: 12295, item2: 7663, item3: 2666},
      {y: '6 Juli 2020', item1: 12526, item2: 8033, item3: 2666},
      {y: '7 Juli 2020', item1: 12725, item2: 8277, item3: 2666},
      {y: '8 Juli 2020', item1: 13069, item2: 8429, item3: 2666},
      {y: '9 Juli 2020', item1: 13359, item2: 8647, item3: 2666},
      {y: '10 Juli 2020', item1: 13598, item2: 8825, item3: 2666},
      {y: '11 Juli 2020', item1: 13957, item2: 9040, item3: 2666},
      {y: '12 Juli 2020', item1: 14361, item2: 9200, item3: 2666},
      {y: '13 Juli 2020', item1: 14639, item2: 9408, item3: 2666},
      {y: '14 Juli 2020', item1: 14914, item2: 9528, item3: 2666},
      {y: '15 Juli 2020', item1: 15173, item2: 9721, item3: 2666},
      {y: '16 Juli 2020', item1: 15466, item2: 9857, item3: 2666},
      {y: '17 Juli 2020', item1: 15707, item2: 9994, item3: 2666},
      {y: '18 Juli 2020', item1: 16038, item2: 10117, item3: 2666},
      {y: '19 Juli 2020', item1: 16351, item2: 10444, item3: 2666},
      {y: '20 Juli 2020', item1: 16712, item2: 10602, item3: 2666},
      {y: '21 Juli 2020', item1: 17153, item2: 10864, item3: 2666},
      {y: '22 Juli 2020', item1: 17529, item2: 11187, item3: 2666},
      {y: '23 Juli 2020', item1: 17945, item2: 11302, item3: 2666},
      {y: '24 Juli 2020', item1: 18230, item2: 11585, item3: 2666},
      {y: '25 Juli 2020', item1: 18623, item2: 11715, item3: 2666},
      {y: '26 Juli 2020', item1: 19001, item2: 11889, item3: 2666},
      {y: '27 Juli 2020', item1: 19473, item2: 11996, item3: 2666},
      {y: '28 Juli 2020', item1: 19885, item2: 12373, item3: 2666},
      {y: '29 Juli 2020', item1: 20470, item2: 12613, item3: 2666},
      {y: '30 Juli 2020', item1: 20769, item2: 12801, item3: 2666},
      {y: '31 Juli 2020', item1: 21201, item2: 13208, item3: 2666},
      {y: '1 Agustus 2020', item1: 21575, item2: 13887, item3: 2666},
      {y: '2 Agustus 2020', item1: 21954, item2: 14027, item3: 2666},
      {y: '3 Agustus 2020', item1: 22443, item2: 14165, item3: 2666},
      {y: '4 Agustus 2020', item1: 22909, item2: 14381, item3: 2666},
      {y: '5 Agustus 2020', item1: 23266, item2: 14760, item3: 2666},
      {y: '6 Agustus 2020', item1: 23863, item2: 15006, item3: 2666},
      {y: '7 Agustus 2020', item1: 24521, item2: 15201, item3: 2666},
      {y: '8 Agustus 2020', item1: 25242, item2: 15710, item3: 2666},
      {y: '9 Agustus 2020', item1: 25714, item2: 16268, item3: 2666},
      {y: '10 Agustus 2020', item1: 26193, item2: 16446, item3: 2666},
      {y: '11 Agustus 2020', item1: 26664, item2: 16927, item3: 2666},
      {y: '12 Agustus 2020', item1: 27242, item2: 17349, item3: 2666},
      {y: '13 Agustus 2020', item1: 27863, item2: 17838, item3: 2666},
      {y: '14 Agustus 2020', item1: 28438, item2: 18528, item3: 2666},
      {y: '15 Agustus 2020', item1: 29036, item2: 18974, item3: 2666},
      {y: '16 Agustus 2020', item1: 29554, item2: 19708, item3: 2666},
      {y: '17 Agustus 2020', item1: 30092, item2: 19916, item3: 2666},
      {y: '18 Agustus 2020', item1: 30597, item2: 20505, item3: 2666},
      {y: '19 Agustus 2020', item1: 31162, item2: 21069, item3: 2666},
      {y: '20 Agustus 2020', item1: 31757, item2: 21795, item3: 2666},
      {y: '21 Agustus 2020', item1: 32398, item2: 22228, item3: 2666},
      {y: '22 Agustus 2020', item1: 32999, item2: 22877, item3: 2666},
      {y: '23 Agustus 2020', item1: 33636, item2: 23567, item3: 2666},
      {y: '24 Agustus 2020', item1: 34295, item2: 25463, item3: 2666},
      {y: '25 Agustus 2020', item1: 34931, item2: 25986, item3: 2666},
      {y: '26 Agustus 2020', item1: 35642, item2: 26750, item3: 2666},
      {y: '27 Agustus 2020', item1: 36462, item2: 28288, item3: 2666},
      {y: '28 Agustus 2020', item1: 37278, item2: 29169, item3: 2666},
      {y: '29 Agustus 2020', item1: 38166, item2: 29768, item3: 2666},
      {y: '30 Agustus 2020', item1: 39280, item2: 30134, item3: 2666},
      {y: '31 Agustus 2020', item1: 40309, item2: 30538, item3: 2666},
      {y: '1 September 2020', item1: 41250, item2: 31267, item3: 2666},
      {y: '2 September 2020', item1: 42303, item2: 31741, item3: 2666},
      {y: '3 September 2020', item1: 43709, item2: 32424, item3: 2666},
      {y: '4 September 2020', item1: 44604, item2: 33206, item3: 2666},
      {y: '5 September 2020', item1: 45446, item2: 33991, item3: 2666},
      {y: '6 September 2020', item1: 46691, item2: 34738, item3: 2666},
      {y: '7 September 2020', item1: 47796, item2: 35431, item3: 2666},
      {y: '8 September 2020', item1: 48811, item2: 36451, item3: 2666},
      {y: '9 September 2020', item1: 49837, item2: 37245, item3: 2666},
      {y: '10 September 2020', item1: 51287, item2: 38226, item3: 2666},
      {y: '11 September 2020', item1: 52321, item2: 39115, item3: 2666},
      {y: '12 September 2020', item1: 53761, item2: 40183, item3: 2666},
      {y: '13 September 2020', item1: 54864, item2: 41014, item3: 2666},

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
      {y: '4 Juni 2020', item1: 4.80,},
      {y: '5 Juni 2020', item1: 5.30,},
      {y: '6 Juni 2020', item1: 6.90,},
      {y: '7 Juni 2020', item1: 5.20,},
      {y: '8 Juni 2020', item1: 3.20,},
      {y: '9 Juni 2020', item1: 2.70,},
      {y: '10 Juni 2020', item1: 3.50,},
      {y: '11 Juni 2020', item1: 2.70,},
      {y: '12 Juni 2020', item1: 3.50,},
      {y: '13 Juni 2020', item1: 2.30,},
      {y: '14 Juni 2020', item1: 5.70,},
      {y: '15 Juni 2020', item1: 2.00,},
      {y: '16 Juni 2020', item1: 3.10,},
      {y: '17 Juni 2020', item1: 3.70,},
      {y: '18 Juni 2020', item1: 3.30,},
      {y: '19 Juni 2020', item1: 3.70,},
      {y: '20 Juni 2020', item1: 4.10,},
      {y: '21 Juni 2020', item1: 4.70,},
      {y: '22 Juni 2020', item1: 4.70,},
      {y: '23 Juni 2020', item1: 2.70,},
      {y: '24 Juni 2020', item1: 3.80,},
      {y: '25 Juni 2020', item1: 3.10,},
      {y: '26 Juni 2020', item1: 4.00,},
      {y: '27 Juni 2020', item1: 3.30,},
      {y: '28 Juni 2020', item1: 3.90,},
      {y: '29 Juni 2020', item1: 4.30,},
      {y: '30 Juni 2020', item1: 4.40,},
      {y: '1 Juli 2020', item1: 4.70,},
      {y: '2 Juli 2020', item1: 3.40,},
      {y: '3 Juli 2020', item1: 3.60,},
      {y: '4 Juli 2020', item1: 5.90,},
      {y: '5 Juli 2020', item1: 7.50,},
      {y: '6 Juli 2020', item1: 4.50,},
      {y: '7 Juli 2020', item1: 5.60,},
      {y: '8 Juli 2020', item1: 4.50,},
      {y: '9 Juli 2020', item1: 3.70,},
      {y: '10 Juli 2020', item1: 5.50,},
      {y: '11 Juli 2020', item1: 7.10,},
      {y: '12 Juli 2020', item1: 6.80,},
      {y: '13 Juli 2020', item1: 4.60,},
      {y: '14 Juli 2020', item1: 4.80,},
      {y: '15 Juli 2020', item1: 4.70,},
      {y: '16 Juli 2020', item1: 3.60,},
      {y: '17 Juli 2020', item1: 3.70,},
      {y: '18 Juli 2020', item1: 4.60,},
      {y: '19 Juli 2020', item1: 9.90,},
      {y: '20 Juli 2020', item1: 7.20,},
      {y: '21 Juli 2020', item1: 4.70,},
      {y: '22 Juli 2020', item1: 4.10,},
      {y: '23 Juli 2020', item1: 3.20,},
      {y: '24 Juli 2020', item1: 4.30,},
      {y: '25 Juli 2020', item1: 8.90,},
      {y: '26 Juli 2020', item1: 8.6,},
      {y: '27 Juli 2020', item1: 5.3,},
      {y: '28 Juli 2020', item1: 6.1,},
      {y: '29 Juli 2020', item1: 3.7,},
      {y: '30 Juli 2020', item1: 6.9,},
      {y: '31 Juli 2020', item1: 7.8,},
      {y: '1 Agustus 2020', item1: 5.2,},
      {y: '2 Agustus 2020', item1: 11.9,},
      {y: '3 Agustus 2020', item1: 4.9,},
      {y: '4 Agustus 2020', item1: 6.6,},
      {y: '5 Agustus 2020', item1: 7.2,},
      {y: '6 Agustus 2020', item1: 8.6,},
      {y: '7 Agustus 2020', item1: 8.8,},
      {y: '8 Agustus 2020', item1: 7.9,},
      {y: '9 Agustus 2020', item1: 7.2,},
      {y: '10 Agustus 2020', item1: 9.6,},
      {y: '11 Agustus 2020', item1: 8.3,},
      {y: '12 Agustus 2020', item1: 7.4,},
      {y: '13 Agustus 2020', item1: 7.2,},
      {y: '14 Agustus 2020', item1: 8.9,},
      {y: '15 Agustus 2020', item1: 6.5,},
      {y: '16 Agustus 2020', item1: 10.1,},
      {y: '17 Agustus 2020', item1: 7.7,},
      {y: '18 Agustus 2020', item1: 8.5,},
      {y: '19 Agustus 2020', item1: 6.5,},
      {y: '20 Agustus 2020', item1: 9.4,},
      {y: '21 Agustus 2020', item1: 10.2,},
      {y: '22 Agustus 2020', item1: 12.5,},
      {y: '23 Agustus 2020', item1: 13.8,},
      {y: '24 Agustus 2020', item1: 7.9,},
      {y: '25 Agustus 2020', item1: 6.5,},
      {y: '26 Agustus 2020', item1: 7.9,},
      {y: '27 Agustus 2020', item1: 9.4,},
      {y: '28 Agustus 2020', item1: 8.6,},
      {y: '29 Agustus 2020', item1: 10.4,},
      {y: '30 Agustus 2020', item1: 14.4,},
      {y: '31 Agustus 2020', item1: 13.6,},
      {y: '1 September 2020', item1: 13.6,},
      {y: '2 September 2020', item1: 12.8,},
      {y: '3 September 2020', item1: 10.7,},
      {y: '4 September 2020', item1: 12.1,},
      {y: '5 September 2020', item1: 11.5,},
      {y: '6 September 2020', item1: 14.1,},
      {y: '7 September 2020', item1: 10.5,},
      {y: '8 September 2020', item1: 10.3,},
      {y: '9 September 2020', item1: 11,},
      {y: '10 September 2020', item1: 11.5,},
      {y: '11 September 2020', item1: 14.9,},
      {y: '12 September 2020', item1: 16.1,},
      {y: '13 September 2020', item1: 15.1,},

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

