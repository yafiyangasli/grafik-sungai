<!DOCTYPE html>
<html>
<head>
	
	<title><?= $active;?></title>
	
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/fontawesome/css/all.min.css');?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/home.css');?>">

  <style type="text/css">
  @font-face /*perintah untuk memanggil font eksternal*/
  {
    font-family: 'Montserrat-bold'; /*memberikan nama bebas untuk font*/
    src: url('<?=base_url('assets/font/montserrat');?>/Montserrat-Bold.otf');/*memanggil file font eksternalnya di folder montserrat*/

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
        <li class="nav-item active m-2">
          <a class="nav-link btn pr-3 pl-3" href="<?=base_url('home');?>">Beranda</a>
        </li>
        <li class="nav-item m-2">
          <a class="nav-link btn pr-3 pl-3" href="<?=base_url('contact_person');?>">Contact Person</a>
        </li>
        <li class="nav-item dropdown m-2">
          <a class="nav-link btn dropdown-toggle pr-3 pl-3" href="" id="navbardrop" data-toggle="dropdown">
            Grafik
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?=base_url('graph/harian');?>">Harian</a>
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

  <div class="row no-gutters">
      <div class="col-12 col-sm-12">
        <div class="container-image">
          <img class="img-fluid" src="<?=base_url('assets/img/jumbotron.jpg');?>">
          <div class="col-sm-4 d-none d-sm-block top-right-sm">
            <p>Eco River Water Level Monitoring And Mitigation System</p>
            <p id="bawahnya-sm">(COVER VONDATIONS)</p>
          </div>
          <div class="col-6 d-sm-none top-right">
            <p>Eco River Water Level Monitoring And Mitigation System</p>
            <p id="bawahnya">(COVER VONDATIONS)</p>
          </div>
        </div>
      </div>
    </div>

</body>
</html>