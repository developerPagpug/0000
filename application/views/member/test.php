<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="../css/mycss.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <div class="navbar-fixed">
      <nav class="#303f9f indigo darken-2 fixed">
          <div class="nav-wrapper">
            <a href="#!" class="brand-logo" style="padding-left:250px">
                <!--<img src="../image/logobca1.png" width="300px">
                <span class="hide-on-med-and-down"><i>Welcome Admin Event</i></span>-->
            </a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <!--<li><a href="#!">Sign In</a></li>
              <li><a href="#!">Register</a></li>-->
              <li><a href="../maincontent.html">Get Sponsor</a></li>
              <li><a class="waves-effect waves-light btn" href="#!">Logout</a></li>
            </ul>
            <ul class="side-nav fixed #82b1ff blue accent-1" id="mobile-demo">
              <li class="logo"><a href="#" class="logo-container">this is logo</a></li>
              <li class="active"><a href="adminevent.html">Home</a></li>
              <li><a href="editprofile.html">Edit Profile</a></li>
              <li><a href="companyacc.html">Company Acc<span class="new badge">4</span></a></li>
              <!--<li class="active"><a href="akuntansiform.html">Akuntansi</a></li>
              <li><a href="#">RK Distribusi</a></li>
              <li><a href="#">Grup Hukum</a></li>
              <li><a href="#">BS Distribusi</a></li>
              <li><a href="#">BS UBC</a></li>-->
            </ul>
          </div>
        </nav>
    </div>




  <div class="main-content" style="height:100vh">
      <div class="container">

        <h3>Welcome To E-Proposal Online</h3>
        <div class="divider"></div>

        <div class="section">

          <p style="font-weight:700">Looking For New Acc Company Or Propose To Another Company?</p>

          <div class="section"></div>

          <p style="text-indent: 20px">
            Here's For Get a new Sponsor
          </p>

          <div class="butt-event">
            <a href="../maincontent.html" class="waves-effect waves-light btn">button</a>
            <br>
            <span style="font-size:12px; font-style:italic">Note: you only propose 5 times until you got a new acc sponsor</span>
          </div>

        </div>

      </div><!-- end of content company -->
  </div>




      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-2.1.2.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      <script type="text/javascript" src="../js/myjs.js"></script>
      <script type="text/javascript">
        $('.button-collapse').sideNav('show');
      </script>
    </body>
  </html>
