<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title><?= SITE_TITLE ?></title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css<?= "?v=" . rand(99,9999999) ?>">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>

  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js<?= "?v=" . rand(99,9999999) ?>"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>


</head>
<body>

  <div class="main">

    <div class="head">
      <!-- partial:index.partial.html -->
      <form method="post" class="search">
        <input type="text" class="textbox" placeholder="دنبال کجا می گردی ؟">
      </form>
    <!-- partial -->
    </div>
    <div id="map"></div>
  </div>

  <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3>ثبت موقعیت مکانی</h3>
    <hr>
    <form action="" class="modal-form">
      <label for="fname">مختصات :</label>
      <input type="text" id="fname" name="lat" placeholder="عرض جغرافیایی">
      <input type="text" id="fname" name="lng" placeholder="طول جغرافیایی">
      <br>
      <br>
      <label for="fname">نام مکان :</label>
      <input type="text" id="fname" name="title" placeholder="مثلا : دفتر مرکزی سون لرن">
    </form>
  </div>

</div>


<script src="<?= BASE_URL ?>assets/js/jquery.min.js"></script>
<script src="<?= BASE_URL ?>assets/js/script.js"></script>
  
</body>
</html>
