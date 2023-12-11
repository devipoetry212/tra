<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <?php Flasher::flash(); ?>

            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Tambah  Data Siswa</button>

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
            
            <h3>DAFTAR SISWA</h3>
            <ul class="list-group mt-2">
                <?php foreach ($data['siswa'] as $siswa) : ?>
                    <li class="list-group-item">
                        <?= $siswa['nama']; ?>
                        <a href="<?= BASE_URL; ?>/siswa/hapus/<?= $siswa['id']; ?>" class="badge badge-danger float-right " onclick="return confirm('yakin?');">Hapus</a>
                    
                        <a style="margin-right:10px;margin-left:10px;"href="<?= BASE_URL; ?>/siswa/ubah/<?= $siswa['id']; ?>" class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#exampleModal" data-id="<?= $siswa['id']; ?>">Ubah</a>
                        
                        <a style="margin-left:10px;"href="<?= BASE_URL; ?>/siswa/detail/<?= $siswa['id']; ?>" class="badge badge-primary float-right">Detail</a>
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
                    <form action="<?= BASE_URL; ?>/siswa/tambah" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="laki-laki"> </option>
                            <option value="laki-laki">Laki - laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div><div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
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
