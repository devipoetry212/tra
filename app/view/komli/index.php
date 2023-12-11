<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <?php Flasher::flash(); ?>

            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Tambah Kompetensi Keahlian</button>

        <!-- Search -->
        <br/>
        <br/>
            <div>
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <!-- End of Search -->
            
            <h3>DAFTAR KOMPETENSI KEAHLIAN</h3>
            <ul class="list-group mt-2">
                <?php foreach ($data['komli'] as $komli) : ?>
                    <li class="list-group-item">
                        <?= $komli['nama']; ?>
                        <a href="<?= BASE_URL; ?>/komli/hapus/<?= $komli['id']; ?>" class="badge badge-danger float-right " onclick="return confirm('yakin?');">Hapus</a>
                    
                        <a style="margin-right:10px;margin-left:10px;"href="<?= BASE_URL; ?>/komli/ubah/<?= $komli['id']; ?>" class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#exampleModal" data-id="<?= $komli['id']; ?>">Ubah</a>
                        
                        <a style="margin-left:10px;" href="<?= BASE_URL; ?>/komli/detail/<?= $komli['id']; ?>"  class="badge badge-primary float-right">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
            
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel ">Tambah Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASE_URL; ?>/komli/tambah" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                    <form action="<?= BASE_URL; ?>/komli/tambah" method="post">
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan">
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Tambah Data</button>
                </div>
            </div>
        </div>
    </div>    
    <!-- end of Model -->     
            </div>
        </div>
    </div>
</body>
