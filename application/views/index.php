<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/mycss.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
<?php echo $this->session->flashdata('error') ?>
    <!-- navbar-top -->
      <?php $this->load->view('header') ?>
    <!-- banner -->
      <div class="carousel carousel-slider center" data-indicators="true">
        <div class="carousel-item valign-wrapper red white-text row" href="#one!">
          <div class="valign center-block col s12 m6 l4 #f48fb1 pink lighten-3">
              <h4>Sponsor Online Untuk EO</h4>
              <p>Buruan Daftar</p>
              <a class="waves-effect waves-light btn yellow black-text modal-trigger" href="#modal2">Daftar Gratis</a>
              <a class="waves-effect waves-light btn green" href="<?php echo base_url() ?>sponsor/sponsorList">Cari Sponsor</a>
              <div class="section"></div>
          </div>
        </div>
      </div>
  <!-- end of banner -->


  <!-- promotion -->
  <div class="container section pad">
    <div class="row">

          <div class="col s12 l4 center boxv">
            <!-- Promo Content 1 goes here -->
            <h4>Identitas Profesional</h4>
            <img src="<?php echo base_url()?>GilangCI/assets/img/pencarikerja.jpg"  />
            <br />
            <caption>
              <p class="presisi">
                Buat identitas event organizer anda secara online
                dan pastikan Anda selalu mendapatkan
                sponsor yang sesuai.
              </p>
            </caption>
          </div>
          <div class="col s12 l4 center boxv">
            <!-- Promo Content 2 goes here -->
            <h4>Profil Anda</h4>
            <img src="<?php echo base_url()?>GilangCI/assets/img/pencarikerja.jpg" />
            <br />
            <caption>
              <p class="presisi">
                Masuk ke halaman pribadi Anda dan lihat
                sponsor yang sesuai dengan Anda.
              </p>
            </caption>
          </div>
          <div class="col s12 l4 center boxv">
            <!-- Promo Content 3 goes here -->
            <h4>Iklan Sponsor Lengkap</h4>
            <img src="<?php echo base_url()?>GilangCI/assets/img/pencarikerja.jpg" />
            <br />
            <caption>
              <p class="presisi">
                Dapatkan sponsor dengan dana yang sesuai
                dan informasi sponsor.
              </p>
            </caption>
          </div>

      </div>
  </div>
  <!--end of promotion -->



<!-- footer -->
<footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Footer Content</h5>
          <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © 2014 Copyright Text
      <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
      </div>
    </div>
  </footer>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.2.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>assets/js/materialize.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>assets/js/myjs.js"></script>
      <script type="text/javascript">
      $(function(){
        $(".button-collapse").sideNav();
      });
      </script>
    </body>
  </html>
