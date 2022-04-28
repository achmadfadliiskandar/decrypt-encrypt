<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD5</title>
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- end css -->
</head>
<body>
    <?php
    $halaman = "md5";
    include 'navbar.php'; 
    ?>
    <div class="container mt-3 pt-3">
        <h1>md5</h1>
        <p>Dalam kriptografi, MD5 (Message-Digest algorithm 5) adalah fungsi hash kriptografik yang digunakan secara luas dengan hash value 128-bit. Pada standart Internet MD5 telah dimanfaatkan secara bermacam-macam pada aplikasi keamanan, dan Fungsi ini akan menghasilkan kode hash sepanjang 32 karakter.</p>
</div>
<div class="container">
    <div class="mt-3">
    <div class="alert alert-primary">Silahkan Encrypt Di bawah ini</div>
    <form action="/generatepassword/md5" method="post">
    <div class="mb-3">
    <label for="md5" class="form-label">Encrypt Md 5</label>
    <textarea class="form-control" id="md5" name="md5" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary my-3 w-100" name="submit">Encrypt Now</button>
    </form>
    </div>
    <?php
    if(isset($_POST['submit'])){
        $md5 = $_POST['md5'];
        if ($md5 == null) {
            echo "<div class='alert alert-danger'>tidak ada encrypt</div>";
        } else {
            echo '<h4>Hasil Encrypt Dari ', "<u class='text-danger'>".$md5 = $_POST['md5']."</u>" , '<span> adalah :</span>'.'</h4>';
            echo "<p>".md5($md5)."</p>";
        }
        
    }
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