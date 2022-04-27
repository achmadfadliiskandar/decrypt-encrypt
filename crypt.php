<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypt</title>
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- end css -->
</head>
<body>
    <?php
    $halaman = "crypt";
    include 'navbar.php'; 
    ?>
    <div class="container mt-3 pt-3">
        <h1>Crypt</h1>
        <p>Crypt Merupakan sebuah fungsi yang terdapat pada PHP yang bisa kita gunakan untuk enkripsi atau keamanan, pada crypt menghasilkan kode atau kata sandi yang lebih pendek dari fungsi passwordhash(). dan Fungsi ini menghasilkan kode hash dengan menggunakan algoritma DES, Blowfish, dan MD5.</p>
</div>
<div class="container">
    <div class="mt-3">
    <div class="alert alert-primary">Silahkan Encrypt Di bawah ini</div>
    <form action="/generatepassword/crypt.php" method="POST">
    <div class="my-3">
    <div class="mb-3">
    <label for="crypt1" class="form-label">Crypt 1</label>
    <input type="text" class="form-control" name="encrypt1">
    </div>
    <div class="mb-3">
    <label for="crypt2" class="form-label">Crypt 2</label>
    <input type="text" class="form-control" name="encrypt2">
    </div>
    </div>
    <button type="submit" class="btn btn-primary w-100 my-3" name="encrypt">Encrypt Now</button>
    </form>
    </div>
    <?php 
    if (isset($_POST['encrypt'])) {
        $encript1 = $_POST['encrypt1'];
        $encript2 = $_POST['encrypt2'];
        // echo crypt($encript1,$encript2);
        if ($encript1 == null || $encript2 == null) {
            echo "<div class='alert alert-danger'>tidak ada yang di encrypt</div>";
        }else {
            // echo crypt($encript1,$encript2);
            echo '<h4>Hasil Encrypt Dari ', "<u class='text-danger'>".$generate = $_POST['encrypt1']."</u>" , "<u class='text-danger'>".$generate = $_POST['encrypt2']."</u>" ,'<span> adalah :</span>'.'</h4>';
            echo "<p>".crypt($encript1,$encript2)."</p>";
        }
    }
    ?>
</div>
</body>
<?php include 'footer.php'; ?>
<!-- js script -->
<script src="script.js"></script>
<!-- end js script -->
<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- end js -->
</html>