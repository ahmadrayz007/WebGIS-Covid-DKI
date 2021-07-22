<?php
  $title="Leaflet - Choropleth";
  $judul=$title;
  $url='leaflet-choropleth';
  $fileJs='leaflet-choroplethJs';
 ?>
<?=content_open($title)?>
<section class="content">
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-blue">
      <div class="inner">
        <h3 class='lol'>402</h3>

        <p class='lol'>Perkembangan Kasus Aktif</p>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3 class='lol'>7,037</h3>

        <p class='lol'>Perkembangan Kasus Positif Covid 19</p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3 class='lol'>6,578</h3>

        <p class='lol'>Total Sembuh</p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3 class='lol'>57</h3>

        <p class='lol'>Total Kematian</p>
      </div>
    </div>
  </div>
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

<?=content_close()?>
