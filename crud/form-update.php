<?php
include "database.php";

$query = "SELECT *FROM sensus WHERE id = '$_GET[id]'";
$data = $con -> prepare($query);
$data -> execute();

$sensus = $data -> fetch(PDO :: FETCH_OBJ);

?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--css-->
      <link rel="stylesheet" type="text/css" href="css/style.css">

      <!--logo -->
      <link href="img/icon1.jpg" rel="icon" type="icon/x-image" >

      <!--interaktif-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>La Familie</title>
    </head>

    <body>

    <div class="navbar-fixed">
       
        <nav class="#80cbc4 teal lighten-3">
       
          <div class="container">
       
            <div class="nav-wrapper">
              <a href="../../index.php" class="brand-logo">La Familie</a>
              <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
       
              <ul class="right hide-on-med-and-down">
                <li><a href="../../index.html" class="active">Home</a></li>
                <li><a href="login.php" class="active">Login</a></li>       
              </ul>
       
            </div>
       
          </div>
       
        </nav>
      
      </div>

      <!--sidenav-->

      <ul class="sidenav white" id="mobile-nav">
        <li><a href="index.php" class="active black-text">Home</a></li>
        <li><a href="form.php" class="active black-text">Form</a></li>
      </ul>


      <!-- form -->     
        
        <div class="parallax-container">      
          <div class="parallax"><img src="img/snow.jpg"></div>
            <div class="container">
              <div class="card-panel">
                    <form method="POST" action="update.php">
                           
                            <h5>Update Form</h5>

                            <input type="hidden" name="id" value="<?php echo $sensus -> id ?>"/>

                            <div class="input-field">
                            <input type="text" name="nama_ayah" id="nama_ayah" required class="validate" value="<?php echo $sensus -> nama_ayah ?>">
                            <label for="nama_ayah">Nama Kepala Keluarga</label>
                            </div>

                            <div class="input-field">
                            <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" required class="validate" value="<?php echo $sensus -> pekerjaan_ayah ?>">
                            <label for="pekerjaan_ayah">Pekerjaan Kepala Keluarga</label>
                            </div>

                            <div class="input-field">
                            <input type="text" name="nama_ibu" id="nama_ibu" required class="validate" value="<?php echo $sensus -> nama_ibu ?>">
                            <label for="nama_ibu">Nama Ibu Rumah Tangga</label>
                            </div>

                            <div class="input-field">
                            <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" required class="validate" value="<?php echo $sensus -> pekerjaan_ibu ?>">
                            <label for="pekerjaan_ibu">Pekerjaan Ibu Rumah Tangga</label>
                            </div>
                            
                            <div class="input-field">
                            <input type="text" name="nama_anak" id="nama_anak" required class="validate" value="<?php echo $sensus -> nama_anak ?>">
                            <label for="nama_anak">Nama Anak</label>
                            </div>

                            <div class="input-field">
                            <textarea name="alamat" id="alamat" class="materialize-textarea"><?php echo $sensus -> alamat ?></textarea>
                            <label for="alamat">Alamat</label>
                            </div>

                            <button type="submit" class="btn teal lighten-3" onclick="M.toast({html: 'Data Berhasil Disimpan'})"><i class="material-icons left">book</i>Save</button>
                        
                    </form>                
                  <br>
                  
              </div>
            </div>
        </div>

      <!-- footer -->

      <footer class="teal lighten-3 center white-text">
        <p>
            La Familie &copy;Copyright 2020 by <a href="https://instagram.com/rahmahmiyaa/" class="active white-text">Rahmah Miya Juwita</a>
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
