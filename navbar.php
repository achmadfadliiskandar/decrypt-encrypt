<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
<div class="container">
<a class="navbar-brand" href="#">Encrypt-Decrypt</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link <?php if($halaman=='index') {echo "active";} ?>" aria-current="page" href="index.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if($halaman=='password_hash') {echo "active";} ?>" href="password_hash.php">Password Hash</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if($halaman=='crypt') {echo "active";} ?>" href="crypt.php">Crypt</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if($halaman=='md5') {echo "active";} ?>" href="md5.php">MD5</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if($halaman=='base64') {echo "active";} ?>" href="base64.php">Base 64 Encode</a>
    </li>
</ul>
</div>
</div>
</nav>