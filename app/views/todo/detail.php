<div class="container mt-3">
  <div class="card mx-auto" style="width: 50rem;">
    <h5 class="card-header"><?= $data['title'] ?></h5>
    <div class="card-body">
      <h5 class="card-title"><?= $data['todo']['judul'] ?></h5>
      <p class="card-text"><?= $data['todo']['deskripsi'] ?></p>
      <div class="card-body text-end d-grid gap-2 d-md-flex">
        <a href="<?= BASEURL ?>/todo/edit/<?= $data['todo']['id'] ?>" class="btn btn-primary ">Edit</a>
        <a href="<?= BASEURL ?>/todo/" class="btn btn-primary ">Kembali</a>
      </div>
    </div>
  </div>
</div>