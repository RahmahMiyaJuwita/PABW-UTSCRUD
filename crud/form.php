<?php require_once("../auth.php"); ?>

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
              <a href="../index.php" class="brand-logo">La Familie</a>
              <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
       
              <ul class="right hide-on-med-and-down">
                <li><a href="../index.php" class="active">Home</a></li>       
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
        <li><a href="../index.php" class="active black-text">Home</a></li>
      </ul>


      <!-- form -->     
        
        <div class="parallax-container">      
          <div class="parallax"><img src="img/snow.jpg"></div>
            <div class="container">
              <div class="card-panel">

              <h5>Selamat Datang Di Website Simulasi Sensus</h5>
                    <h4><?php echo  $_SESSION["user"]["name"] ?></h4>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>
                    <a href="../server/server_logout.php">
                    <button type="submit" class="btn light-text teal lighten-3">Log out</button>
                    </a>

                    <form method="POST" action="insert.php">
                           
                            <h5>Please Fill Out This Form</h5>

                            <div class="input-field">
                            <input type="text" name="nama_ayah" id="nama_ayah" required class="validate">
                            <label for="nama_ayah">Nama Kepala Keluarga</label>
                            </div>

                            <div class="input-field">
                            <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" required class="validate">
                            <label for="pekerjaan_ayah">Pekerjaan Kepala Keluarga</label>
                            </div>

                            <div class="input-field">
                            <input type="text" name="nama_ibu" id="nama_ibu" required class="validate">
                            <label for="nama_ibu">Nama Ibu Rumah Tangga</label>
                            </div>

                            <div class="input-field">
                            <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" required class="validate">
                            <label for="pekerjaan_ibu">Pekerjaan Ibu Rumah Tangga</label>
                            </div>
                            
                            <div class="input-field">
                            <input type="text" name="nama_anak" id="nama_anak" required class="validate">
                            <label for="nama_anak">Nama Anak</label>
                            </div>

                            <div class="input-field">
                            <textarea name="alamat" id="alamat" class="materialize-textarea"></textarea>
                            <label for="alamat">Alamat</label>
                            </div>

                            <button type="submit" class="btn lighten-text teal ligthen-3" onclick="M.toast({html: 'Data Berhasil Disimpan'})"><i class="material-icons left">book</i>Save</button>
                        
                   </form>                
                  	<br>
                  	 <table class="striped responsive-table highlight">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Kepala Keluarga</th>
                          <th>Pekerjaan Kepala Keluarga</th>
                          <th>Nama Ibu Rumah Tangga</th>
                          <th>Pekerjaan Ibu Rumah Tangga</th>
                          <th>Nama Anak</th>
                          <th>Alamat</th>
                          <th>Delete</th>
                          <th>Update</th>
                       </tr>
                    </thead>

                    <tbody>

                    <?php
                      include "database.php";

                      $query = "SELECT *FROM sensus";
                      $data = $con -> prepare($query);
                      $data -> execute();
                      $no = 1;
                      while ($sensus = $data -> fetch(PDO :: FETCH_OBJ)){
                        
                    ?>

                      <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $sensus -> nama_ayah ?></td>
                        <td><?php echo $sensus -> pekerjaan_ayah ?></td>
                        <td><?php echo $sensus -> nama_ibu ?></td>
                        <td><?php echo $sensus -> pekerjaan_ibu ?></td>
                        <td><?php echo $sensus -> nama_anak ?></td>
                        <td><?php echo $sensus -> alamat ?></td>
                        <td><a href="delete.php?id=<?php echo $sensus -> id ?>"><button class="btn-small light red darken-1">
                        Delete
                        </button></a></td>
                        <td><a href="form-update.php?id=<?php echo $sensus -> id ?>"><button class="btn-small light green darken-1">
                        Update
                        </button></a></td>
                      </tr>
                    <?php                   
                      $no++;
                    } ?>
                    
                    </tbody>

                  </table>
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