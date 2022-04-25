<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Password (Encrypt - Decrypt)</title>
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- end css -->
</head>
<body>
    <!-- navbar -->
    <?php 
    $halaman = "index";
    include 'navbar.php';
    ?>
    <!-- end navbar -->
    <div class="container mt-3 pt-3 mb-3 pb-3">
    <h2>Enskripsi PHP Yang berfungsi untuk mengamankan data</h2>

<p>Pengertian : enskripsi data adalah suatu fungsi dari php yang berguna untuk melindungi data atau isi di dalam data yang sangat berharga
    seperti password agar orang lain tidak tau isi data yang sebenarnya meskipun mereka tau isi luar nya tapi tidak tau isi dalamnya dan
</p>

<div class="alert alert-info" role="alert">
#Info : Enkripsi akan menjamin data-data tetap aman meskipun berada di tangan orang lain, karena mereka tidak tahu isi aslinya.
</div>

<h3>Yang ada di web ini hanyalah 4 enskripsi saja Yaitu : </h3>
<ul class="list-group">
<li class="list-group-item">Pasword Hash</li>
<li class="list-group-item">Crypt</li>
<li class="list-group-item">Md5</li>
<li class="list-group-item">Base 64 Decode</li>
</ul>
</div>
<?php 
include 'footer.php';
?>
<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- end js -->
</body>
</html>
