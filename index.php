<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--my css-->
      <link rel="stylesheet" type="text/css" href="css/style.css">

      <!-- logo -->
      <link href="img/icon1.jpg" rel="icon" type="icon/x-image" >

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>La Familie</title>
    </head>

    <body>

    <div class="navbar-fixed">
       
        <nav class="#80cbc4 teal lighten-3">
       
          <div class="container">
       
            <div class="nav-wrapper">
              <a href="../index.html" class="brand-logo">La Familie</a>
              <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
       
              <ul class="right hide-on-med-and-down">
              <li><a href="https://rahmahmiya01.com/" class="active white-text">Home</a></li>       
              </ul>
       
            </div>
       
          </div>
       
        </nav>
      
      </div>

      <!--sidenav-->

      <ul class="sidenav white" id="mobile-nav">
        <div>  
          <h5 class="center black-text">La Familie</h5>
        </div>
        <br>
        <li><a href="https://rahmahmiya01.com/" class="active black-text">Home</a></li>
      </ul>


      <!-- form -->     
      
        <div class="parallax-container">      
          <div class="parallax"><img src="img/snow.jpg"></div>
            <div class="container">
              <div class="card-panel">
                    
                    <h3>Assalamualaikum...</h3>
                    
                    <p>Silahkan Klik Masuk Untuk Melakukan Percobaan Sensus Secara Online</p>
                    <p>Simulasi ini menggunakan CRUD</p>
                    <br>
                    <a href="login.php">
                        <button type="submit" class="btn teal lighten-3">Masuk</button>
                    </a>                   
                  
              </div>
            </div>
        </div>

      <!-- footer -->

      <footer class="teal lighten-3 center white-text">
        <p>
            La Familie &copy;Copyright 2020 by <a href="https://www.instagram.com/rahmahmiyaa/" class="active white-text">Rahmah Miya Juwita</a>
        </p>
      </footer>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>

        <script>

        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        </script>

    </body>
  </html>