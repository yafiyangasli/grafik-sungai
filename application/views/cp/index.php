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
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/cp.css');?>">
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
	      <li class="nav-item active m-2">
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

  <div class="container">
    
    <div class="row no-gutters mt-5">
      <div class="col-12 col-sm-6 offset-sm-3 w3-animate-left">
        <h1 class="text-center mb-5" id="header-cp">Hubungi Kami</h1>

        <div class="row no-gutters mb-3">
          <div class="col-2 col-sm-3">
            <i class="fab fa-fw fa-whatsapp text-success" id="ic-whatsapp"></i>
          </div>
          <div class="col-7 col-sm pl-2" id="no-whatsapp">+6289503924256</div>
        </div>

        <div class="row no-gutters mb-3">
          <div class="col-2 col-sm-3">
            <i class="far fa-fw fa-envelope text-danger" id="ic-whatsapp"></i>
          </div>
          <div class="col-7 col-sm pl-2" id="no-whatsapp">email@gmail.com</div>
        </div>

      </div>
    </div>

    <div class="row no-gutters mt-3 mb-5">
      <div class="col-10 col-sm-6 offset-1 offset-sm-3 w3-animate-left">
        <div class="container-fluid" style="border-style: solid; border-width: 1.5px; background-color: white; border-radius: 5px;">
          <h3 class="text-center my-4" style="font-family: 'Montserrat-medium';">Kirim email secara langsung</h3>
          <form class="mb-3 px-5" method="post" action="">
          <?= $this->session->flashdata('message');?>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email..." value="<?=set_value('email');?>">
              <?=form_error('email','<small class="text-danger pl-1">','</small>');?>
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama..." value="<?=set_value('nama');?>">
              <?=form_error('nama','<small class="text-danger pl-1">','</small>');?>
            </div>
            <div class="form-group">
              <label for="subjek">Subjek</label>
              <input type="text" class="form-control" id="subjek" name="subjek" placeholder="Subjek email..." value="<?=set_value('subjek');?>">
              <?=form_error('subjek','<small class="text-danger pl-1">','</small>');?>
            </div>
            <div class="form-group">
              <label for="pesan">Pesan</label>
              <textarea class="form-control" id="pesan" name="pesan" rows="3"><?=set_value('pesan');?></textarea>
              <?=form_error('pesan','<small class="text-danger pl-1">','</small>');?>
            </div>
            
            <button type="submit" class="btn btn-secondary col-6 col-sm-2 offset-3 offset-sm-5 my-4">Kirim</button>
            
          </form>
        </div>
      </div>
    </div>

  </div>

    

</body>
</html>