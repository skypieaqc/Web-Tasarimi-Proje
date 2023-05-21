<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.O/css/all.min.css">    
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<body>
    <!-- navbar -->
    <nav class="navbar"> 
        <div class="row">
          <div class="Baslik col-sm-6 col-md-4 col-lg-3">
            <a class="navbar-brand" href="index.html"><b>Ana Sayfa</b></a>
          </div>
          <div class="nav-ust col-sm-6 col-md-4 col-lg-3">
            <a class="nav-link" aria-current="page" href="ozgecmis.html"><b>Özgeçmiş</b></a>
          </div>
          <div class="nav-ust col-sm-6 col-md-4 col-lg-2">
            <a class="nav-link" href="rize_hakkinda.html"><b>Şehir</b></a>
          </div>
          <div class="nav-ust col-sm-6 col-md-4 col-lg-2">
            <a class="nav-link" href="rize_miras.html"><b>Mirasım</b></a>
          </div>

        </div>       
    </nav>
      <!-- navbar -->
      <div class="arkaplan">
        <div class="bosluk">&nbsp;</div>
        <div class="bosluk">&nbsp;</div>
        <div class="bosluk">&nbsp;</div>
        

        <div class="dolgu">
            <?php
                echo "Hoşgeldin " . $_POST['gizli1'] ;
            ?>

            

        </div>

        <div class="bosluk">&nbsp;</div>

      </div>

      <footer class="linkler">
        <div class="bosluk">&nbsp;</div>
        <div class="row">
          <div class="footer col-sm-6 col-md-4 col-lg-2">
            <a href="https://www.instagram.com/ahmetdyunus/"> <img src="./resimler/insta.png" alt="" width="30px"> Instagram </a>
          </div>
          <div class="footer col-sm-6 col-md-4 col-lg-2">
            <a href="https://www.youtube.com/channel/UCMbgMOpt9RGm--1nJTSFYDw"> <img src="./resimler/youtube.png" alt="" width="30px"> Youtube </a>
          </div>
          <div class="footer col-sm-6 col-md-4 col-lg-4">
              <p> &#x2022 ahmet.cavus1@ogr.sakarya.edu.tr </p>
          </div>
        </div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="script.js"></script>
</body>
</html>