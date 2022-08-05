<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/fontawesome-free-5.15.1-web/css/fontawesome.min.css">
    <!--<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/mystyle.css">
    <title>RICO-TES NIAGAHOSTER</title>
  </head>
  <body>
    <div class="container-fluid border-bottom">
      <div class="container">
        <div class="row" style="margin-left:25px;">
          <div class="col">
            <div>
               Gratis Ebook 9 Cara Cerdas Menggunakan Domain [x]
            </div>
          </div>
          <div class="col-md-auto">
            <div class="p-1 mr-2">
              <i class="fas fa-phone-alt"></i> 0274-5305505
            </div>
          </div>
          <div class="col-md-auto">
            <div class="p-1 mr-2">
              <i class="fas fa-comment-alt"></i> Live Chat
            </div>
          </div>
          <div class="col col-lg-2">
            <div class="p-1 mr-2">
              <i class="fas fa-user-circle"></i> Member Area
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clear-fix"> </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light nv-bg-light pl-5">
      <div class="container">
        <a class="navbar-brand mx-4" href="#">
          <img width="220" height="50" src="assets/images/niagahoster-logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto" style="margin-left:100px;font-weight:500">
          <?php foreach($menu->result_array() as $menu){ ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $menu['link'];?>"> <?php echo $menu['menu_name'];?> <span class="sr-only">(current)</span></a>
            </li>
            <?php } ?>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Domain</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Server</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Website</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Afiliasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Promo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pembayaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Review</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kontak">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
      <div class="clear-fix"> </div>
