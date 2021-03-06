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
		        <a class="dropdown-item" href="<?=base_url('graph/harian');?>">Harian</a>
            <a class="dropdown-item" href="<?=base_url('graph/mingguan');?>">Mingguan</a>
            <a class="dropdown-item" href="<?=base_url('graph/bulanan');?>" style="background-color: #f7ba2c;">Bulanan</a>
            <a class="dropdown-item" href="<?=base_url('graph/tahunan');?>">Tahunan</a>
		      </div>
		    </li>
	    </ul>
	    <span class="navbar-text">
     		<a href="<?= base_url('download_data');?>" class="text-decoration-none" target="_blank">Download Data</a>
    	</span>
	  </div>
	</nav>

  <div class="container">
    <div align="center">
      <h3>Sales Comparison</h3>      
    </div>
    <canvas id="linechart" width="100" height="100"></canvas>
  </div>
</body>
</html>

<script type="text/javascript">
  var ctx = document.getElementById("linechart").getContext("2d");
  var data = {
    labels : 
    ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec",],
    datasets:[{
        label : "Export",
        backgroundColor : "#F07124",
        data : [<?= '"'.$export['jan'].'","'.$export['feb'].'","'.$export['mar'].'","'.$export['apr'].'","'.$export['may'].'","'.$export['jun'].'","'.$export['jul'].'","'.$export['aug'].'","'.$export['sep'].'","'.$export['oct'].'","'.$export['nov'].'","'.$export['dec'].'"'?>]
      },
      {
        label : "Local",
        backgroundColor : "#ffcc66",
        data : [<?= '"'.$local['jan'].'","'.$local['feb'].'","'.$local['mar'].'","'.$local['apr'].'","'.$local['may'].'","'.$local['jun'].'","'.$local['jul'].'","'.$local['aug'].'","'.$local['sep'].'","'.$local['oct'].'","'.$local['nov'].'","'.$local['dec'].'"'?>]
      },
      {
        label : "Local Skurt",
        backgroundColor : "#aaaaaa",
        data : [<?= '"'.$local['jan'].'","'.$local['feb'].'","'.$local['mar'].'","'.$local['apr'].'","'.$local['may'].'","'.$local['jun'].'","'.$local['jul'].'","'.$local['aug'].'","'.$local['sep'].'","'.$local['oct'].'","'.$local['nov'].'","'.$local['dec'].'"'?>]
      }
      ]
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
</script>