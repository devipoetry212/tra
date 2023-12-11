<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#formModal">Tambah  Data Guru</button><br/>

            <!-- Search -->
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
                
            <h3>Daftar Guru</h3>
                <ul class="list-group mt-2">
                <?php foreach ($data['guru'] as $guru) : ?>
                    <li class="list-group-item">
                        <?= $guru['nama']; ?>
                        <a href="<?= BASE_URL; ?>/guru/hapus/<?= $guru['id']; ?>" class="badge badge-pill badge-danger float-right" onclick="return confirm('yakin?');">Hapus</a>
        
                        <a style="margin-right:10px;margin-left:10px;" href="<?= BASE_URL; ?>/guru/ubah/<?= $guru['id']; ?>" class="badge badge-pill badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $guru['id']; ?>">Ubah</a>
                        
                        <input type="hidden" name="id" id="id">
                        <a style="margin-left:10px;" href="<?= BASE_URL; ?>/guru/detail/<?= $guru['id']; ?>" class="badge badge-pill badge-primary float-right">Detail</a>
                    </li>
                <?php endforeach; ?> 
                </ul>
                
                    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulModal">Tambah Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASE_URL; ?>/guru/tambah" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="mapel">Mapel</label>
                        <input class="form-control" id="mapel" name="mapel">
                    </div><div class="form-group">
                        <label for="kode_guru">Kode Guru</label>
                        <input type="text" class="form-control" id="kode_guru" name="kode_guru">
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