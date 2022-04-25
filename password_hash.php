<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Hash</title>
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- end css -->
</head>
<body>
    <?php
    $halaman = "password_hash";
    include 'navbar.php'; 
    ?>
    <div class="container mt-3 pt-3">
        <h1>Password Hash</h1>
        <p> adalah salah satu fungsi yang dimiliki PHP yaitu berfungsi untuk mengubah text-polos menjadi kode fingerprint atau kode random</p>
</div>
<div class="container">
    <div class="alert alert-primary">Silahkan Encrypt Di bawah ini</div>
    <div class="mb-3">
    <form action="/generatepassword/password_hash.php" method="post">
    <label for="exampleFormControlTextarea1" class="form-label">Encrypt Password Hash</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="generate" rows="3"></textarea>
    <button type="submit" name="submit" class="btn btn-primary my-4 w-100">Encrypt Now</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $generate = $_POST['generate'];
        if ($_POST['generate'] == null) {
            echo "<div class='alert alert-danger'>tidak ada kode yang di Encrypt</div>";
        }else{
            echo '<h4>Hasil Encrypt Dari ', "<u class='text-danger'>".$generate = $_POST['generate']."</u>" , '<span> adalah :</span>'.'</h4>';
            echo "<p>".password_hash($generate,PASSWORD_DEFAULT)."</p>";
        }
    }
    ?>
    </div>
</div>
</body>
<?php include 'footer.php'; ?>
<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- end js -->
</html>