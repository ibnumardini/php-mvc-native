<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">

            <div class="row">
                <div class="col-lg-12">
                    <?php Flasher::flash() ?>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-6">
                    <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                        Tambah Data
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <form action="<?= BASE_URL ?>/mahasiswa/cari" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="cari mahasiswa" name="keyword" id="keyword" autocomplete="off">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <h3 class="mt-2">Daftar Mahasiswa</h3>
            <ul class="list-group mt-4">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama'] ?>
                        <a href="<?= BASE_URL ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin akhi?')">hapus</a>
                        <a href="<?= BASE_URL ?>/mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge badge-warning float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id'] ?>">ubah</a>
                        <a href="<?= BASE_URL ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-info float-right ml-1">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= BASE_URL ?>/mahasiswa/tambah" method="post">

                    <input type="hidden" name="id" id="id">

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="nrp">Nrp</label>
                        <input type="number" class="form-control" id="nrp" name="nrp" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option value="Tekink Informatika">Tekink
                                Informatika</option>
                            <option value="Tekink Mesin">Tekink
                                Mesin</option>
                            <option value="Tekink Biologi">Tekink
                                Biologi</option>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah data</button>
                </form>
            </div>
        </div>
    </div>
</div>