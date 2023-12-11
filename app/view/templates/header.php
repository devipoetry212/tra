<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASE_URL;?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASE_URL;?>/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
        <img src="<?= BASE_URL; ?>/img/RPL.png" width="85px" alt="...">
            <a class="navbar-brand" href="<?= BASE_URL; ?>">RPL<span>SMKN2TRENGGALEK</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <nav class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="<?= BASE_URL; ?>">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/komli">Komli</a>
                    <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?= BASE_URL; ?>/komli" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Komli
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= BASE_URL; ?>/tkp">Teknik Konstruksi<br/>dan Perumahan</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= BASE_URL; ?>/dpib">Desain Pemodelan dan<br/> Informasi Bangunan</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= BASE_URL; ?>/tptup">Teknik Pemanasan,Tata<br/>Udara dan Pendinginan</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= BASE_URL; ?>/tp">Teknik Pengelasan</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= BASE_URL; ?>/rpl">Rekayasa Perangkat Lunak</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= BASE_URL; ?>/kuliner">Kuliner</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= BASE_URL; ?>/akuntansi">Akuntansi</a>
                    </div>
                    </li> -->
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/guru">Data Guru</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/siswa">Data Siswa</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/user/profile">About</a>
                </div>
            </nav>
        </div>
    </nav>
