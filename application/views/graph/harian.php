<!DOCTYPE html>
<html>
<head>
	
	<title><?=$active;?></title>
	
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/fontawesome/css/all.min.css');?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="<?=base_url('assets/js/Chart.js');?>"></script>
  <!-- <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/series-label.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script> -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/graph.css');?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap-social.css');?>">

  <style type="text/css">
  @font-face /*perintah untuk memanggil font eksternal*/
  {
    font-family: 'Montserrat-bold'; /*memberikan nama bebas untuk font*/
    src: url('<?=base_url('assets/font/montserrat/');?>/Montserrat-Bold.otf');/*memanggil file font eksternalnya di folder montserrat*/

    }
 @font-face /*perintah untuk memanggil font eksternal*/
  {
    font-family: 'Montserrat-regular'; /*memberikan nama bebas untuk font*/
    src: url('<?=base_url('assets/font/montserrat/');?>/Montserrat-Regular.otf');/*memanggil file font eksternalnya di folder montserrat*/
    
    }
  @font-face /*perintah untuk memanggil font eksternal*/
  {
    font-family: 'Montserrat-extra-bold'; /*memberikan nama bebas untuk font*/
    src: url('<?=base_url('assets/font/montserrat/');?>/Montserrat-ExtraBold.otf');/*memanggil file font eksternalnya di folder montserrat*/
  }

  @font-face /*perintah untuk memanggil font eksternal*/
  {
    font-family: 'Montserrat-medium'; /*memberikan nama bebas untuk font*/
    src: url('<?=base_url('assets/font/montserrat/');?>/Montserrat-Medium.otf');/*memanggil file font eksternalnya di folder montserrat*/
    
    }

  body{
    background-color: #EEEEEE;
    font-family: 'Montserrat-regular';
  }
    </style>
</head>
<body>

	<!-- Navbar -->

	<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
	  <a class="navbar-brand" href="#"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item m-2">
	        <a class="nav-link btn pr-3 pl-3" href="<?=base_url('home');?>">Beranda</a>
	      </li>
	      <li class="nav-item m-2">
	        <a class="nav-link btn pr-3 pl-3" href="<?=base_url('contact_person');?>">Contact Person</a>
	      </li>
	      <li class="nav-item active dropdown m-2">
		      <a class="nav-link btn dropdown-toggle pr-3 pl-3" href="" id="navbardrop" data-toggle="dropdown">
		        Grafik
		      </a>
		      <div class="dropdown-menu">
		        <a class="dropdown-item" href="<?=base_url('graph/harian');?>" style="background-color: #f7ba2c;">Harian</a>
            <a class="dropdown-item" href="<?=base_url('graph/mingguan');?>">Mingguan</a>
            <a class="dropdown-item" href="<?=base_url('graph/bulanan');?>">Bulanan</a>
            <a class="dropdown-item" href="<?=base_url('graph/tahunan');?>">Tahunan</a>
		      </div>
		    </li>
	    </ul>
	    <span class="navbar-text">
     		<a href="<?= base_url('download_data');?>" class="text-decoration-none" target="_blank">Download Data</a>
    	</span>
	  </div>
	</nav>

  <div class="container-fluid">
    <h3 align="center">Data Harian</h3>
    <div class="row mb-5">
      <div class="col-12 col-sm-10 offset-sm-1">
        <canvas id="linechart1" width="100" height="50"></canvas>
      </div>
    </div>

    <div class="row mb-5">
      <div class="col-12 col-sm-10 offset-sm-1">
        <canvas id="linechart2" width="100" height="50"></canvas>
      </div>
    </div>

    <div class="row mb-5">
      <div class="col-12 col-sm-10 offset-sm-1">
        <canvas id="linechart3" width="100" height="50"></canvas>
      </div>
    </div>      
  </div>


</body>
</html>

<script type="text/javascript">
  var ctx = document.getElementById("linechart1").getContext("2d");
  var data = {
    labels : 
    [
    <?php foreach($harian as $hr):?>
      "<?= $hr['tanggal'];?>",
    <?php endforeach;?>
      ],
    datasets:[{
        label : "debit",
        backgroundColor : "#F07124",
        data : [
        <?php foreach($harian as $hr):?>
      "<?= $hr['debit'];?>",
      <?php endforeach;?>
    ]
      }]
  };

  var mychart = new Chart(ctx, {
      type : 'line',
      data : data,
      options : {
        display : true
      },
      barValueSpacing : 20,
      scales : {
        yAxes: [{
          ticks: {
            min: 0,
          }
        }],
        xAxes: [{
          gridLines : {
            color : "rgba(0, 0, 0, 0)",
          }
        }]
      }
  });

  var ctx2 = document.getElementById("linechart2").getContext("2d");
  var data2 = {
    labels : 
    [
    <?php foreach($harian as $hr):?>
      "<?= $hr['tanggal'];?>",
    <?php endforeach;?>
      ],
    datasets:[{
        label : "ketinggian",
        backgroundColor : "#ffcc66",
        data : [
        <?php foreach($harian as $hr):?>
      "<?= $hr['tinggi'];?>",
      <?php endforeach;?>
    ]
      }]
  };

  var mychart2 = new Chart(ctx2, {
      type : 'line',
      data : data2,
      options : {
        display : true
      },
      barValueSpacing : 20,
      scales : {
        yAxes: [{
          ticks: {
            min: 0,
          }
        }],
        xAxes: [{
          gridLines : {
            color : "rgba(0, 0, 0, 0)",
          }
        }]
      }
  });

  var ctx3 = document.getElementById("linechart3").getContext("2d");
  var data3 = {
    labels : 
    [
    <?php foreach($harian as $hr):?>
      "<?= $hr['tanggal'];?>",
    <?php endforeach;?>
      ],
    datasets:[{
        label : "kecepatan",
        backgroundColor : "orange",
        data : [
        <?php foreach($harian as $hr):?>
      "<?= $hr['kecepatan'];?>",
      <?php endforeach;?>
    ]
      }]
  };

  var mychart3 = new Chart(ctx3, {
      type : 'line',
      data : data3,
      options : {
        display : true
      },
      barValueSpacing : 20,
      scales : {
        yAxes: [{
          ticks: {
            min: 0,
          }
        }],
        xAxes: [{
          gridLines : {
            color : "rgba(0, 0, 0, 0)",
          }
        }]
      }
  });
</script>