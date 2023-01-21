
<div class="container">
    <div class="card">
        <h5 class="card-header"><?= $data['title'] ?></h5>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-floating mb-3">
                    <input type="text" value="ini isi text, nanti diambil dari database" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Judul</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Deskripsi..." id="floatingDeskripsi" style="height: 100px">ini isi text, nanti diambil dari database</textarea>
                    <label for="floatingDeskripsi">Deskripsi</label>
                </div>
                <butoon type="submit" class="btn btn-primary mt-2">Ubah(ini tombol submit)</a>
            </form>
        </div>
    </div>
</div>
