<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base 64 Decode - Encode</title>
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- end css -->
</head>
<body>
    <?php
    $halaman = "base64";
    include 'navbar.php'; 
    ?>
    <div class="container mt-3 pt-3">
        <h1>Base 64 Encode Decode</h1>
        <p>Apa yang dimaksud Base64?
        Transformasi base64 merupakan salah satu algoritma untuk Encode dan Decode suatu data ke dalam format ASCII yang didasarkan kepada bilangan dasar 64 atau bisa dikatakan sebagai salah satu metode yang digunakan untuk melakukan encode (penyandian) terhadap data binary
        </p>
        <p>Apa yang dimaksud dengan decode dan encode?
        Dalam dunia komputer, <span class="text-danger">encode adalah proses penempatan urutan karakter (huruf, angka, tanda baca, dan symbol tertentu) ke dalam format khusus sehingga menjadi sebuah sandi.</span> Sedangkan <span class="text-info">decode adalah proses sebaliknya yaitu konversi dari format yang disandikan kembali pada karakter asli</span>.
        </p>
</div>
<div class="container">
    <div class="mt-3">
    <div class="alert alert-primary">Silahkan Encrypt dan Decrypt Di bawah ini</div>
    <div class="row">
    <div class="col-lg-6">
        <!-- encode  -->
        <form action="/generatepassword/base64.php" method="post">
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Base 64 Encode</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="encode" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary my-2 w-100" name="submitencode">Encode Now</button>
        </form>
        <!-- end encode -->
    </div>
    <div class="col-lg-6">
        <!-- decode -->
        <form action="/generatepassword/base64" method="post">
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Base 64 Decode</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="decode" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-danger my-2 w-100" name="submitdecode">Decode Now</button>
        </form>
        <!-- end decode -->
    </div>
    </div>
    </div>
    <?php
    // encode
    if (isset($_POST['submitencode'])) {
        $encode = $_POST['encode'];
        if (empty($encode)) {
            echo "<div class='alert alert-danger'>tidak ada kode yang di encode</div>";
        } 
            echo '<h4>Hasil Encode Dari ', "<u class='text-danger'>".$encode = $_POST['encode']."</u>" , '<span> adalah :</span>'.'</h4>';
            echo "<p>".base64_encode($encode)."</p>";
    }
    // end encode
    // batas //
    // decode
    if (isset($_POST['submitdecode'])) {
        $decode = $_POST['decode'];
        if(empty($decode)){
            echo "<div class='alert alert-danger'>tidak ada kode yang di decode</div>";
        }
        echo '<h4>Hasil Decode Dari ', "<u class='text-danger'>".$decode = $_POST['decode']."</u>" , '<span> adalah :</span>'.'</h4>';
        echo "<p>".base64_decode($decode)."</p>";
    }
    // end decode
    ?>
</div>
</body>
<?php include 'footer.php'; ?>
<!-- js script -->
<script>
    // untuk menghilangkan confirm form resubmission
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<!-- end js script -->
<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- end js -->
</html>