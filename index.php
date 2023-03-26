<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>Film Horor</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul']; 
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?i=tt3896198a&apikey=9dee38b&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data["Search"] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">

  <h3>MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="search" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item mt-auto">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>Film Horor</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="qodrat.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Qodrat</h5>
        <p class="card-text">Qodrat merupakan salah satu film horor terbaru 2022 Indonesia yang dibintangi oleh Vino G Bastian dan Marsha Timothy. Sinopsisnya berkisah tentang ustaz ahli rukhiyah bernama Qodrat yang pulang ke pesantren. Ia menemukan makhluk gaib yang mengganggu sebuah keluarga Yasmin.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="perempuan.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Perempuan Bergaun Merah</h5>
        <p class="card-text">Perempuan Bergaun Merah mengangkat kisah mahasiswi introvert bernama Dinda, diperankan oleh Tatjana Saphira. Ia diteror oleh hantu bergaun merah setelah sahabatnya hilang secara misterius./</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="kalian.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Kalian Pantas Mati</h5>
        <p class="card-text">Film horor terbaru 2022 Indonesia berjudul Kalian Pantas Mati ini didasari dari film Korea Selatan berjudul Mourning Grave pada 2014. Sinopsis Kalian Pantas Mati mengisahkan tentang pria indigo, Rakka yang pindah ke rumah pamannya. Ia kemudian harus berhadapan dengan arwah jahat yang membuat beberapa temannya hilang. Di sisi lain, ia juga harus menolong hantu bernama Dini.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="inang.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Inang</h5>
        <p class="card-text"> Salah satu film horor terbaru 2022 Indonesia ini berhasil tayang di Festival Film Fantasi Internasional Bucheon. Inang yang merupakan garapan dari sutradara Fajar Nugros berkisah tentang Wulan, diperankan oleh Naysila Mirdad yang hamil di luar nikah. Ia kemudian tinggal dengan sebuah keluarga yang ingin mengadopsi anaknya. Namun, banyak kejanggalan muncul secara misterius.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="mumun.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Mumun</h5>
        <p class="card-text">Diadaptasi dari serial televisi Jadi Pocong, Mumun adalah film horor terbaru 2022 Indonesia yang tak boleh dilewatkan. Disutradarai oleh Rizal Mantovani, Mumun mengisahkan tentang Acha Septriasa yang berperan sebagai Mumun dan meninggal dalam tragedi kecelakaan. Setelah dimakamkan, ternyata tali pocong Mumun lupa dibuka oleh penggali kubur dan menyebabkan arwah Mumun gentayangan.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="pamali.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Pamali</h5>
        <p class="card-text">Pamali mengisahkan tentang pasangan suami istri yang memulai hidup baru di desa. Mereka tak sengaja melanggar tradisi yang menyebabkan munculnya makhluk halus mengancam nyawa.</p>
      </div>
    </div>
  </div>
 
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
