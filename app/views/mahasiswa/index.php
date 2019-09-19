<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">

            <div class="row">
                <div class="col-lg-12">
                    <?php Flasher::flash() ?>
                </div>
            </div>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                Tambah Data
            </button>

            <h3 class="mt-4">Daftar Mahasiswa</h3>
            <ul class="list-group mt-4">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mhs['nama'] ?>
                        <a href="<?= BASE_URL ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-info">detail</a>
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