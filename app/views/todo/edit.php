<div class="container mt-3">
    <div class="card">
        <h5 class="card-header"><?= $data['title'] ?></h5>
        <div class="card-body">
            <form action="<?= BASEURL; ?>/todo/ubah/" method="post">
                <input type="number" value="<?= $data['todo']['id'] ?>" name="input">
                <div class="form-floating mb-3">
                    <input type="text" value="<?= $data['todo']['judul'] ?>" class="form-control" id="floatingInput" placeholder="judul" name="judul">
                    <label for="floatingInput">Judul</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Deskripsi" id="floatingDeskripsi" style="height: 100px" name="deskripsi"><?= $data['todo']['deskripsi'] ?></textarea>
                    <label for="floatingDeskripsi">Deskripsi</label>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Ubah</button>
                <a href="<?= BASEURL; ?>/todo/detail/<?= $data['todo']['id'] ?>" type="submit" class="btn btn-primary mt-2">Kembali</a>
            </form>
        </div>
    </div>
</div>