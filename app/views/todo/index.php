<div class="container mt-3">
    <h3>TODO Aktif</h3>
    <ol class="list-group list-group-numbered">
        <?php foreach ($data['to_do_belum'] as $todo) : ?>
            <li class="list-group-item d-flex justify-content-between align-items-start gap-1">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">
                        <a href="<?= BASEURL ?>/todo/detail/<?= $todo['id'] ?>"><?= $todo['judul'] ?></a>
                    </div>
                    <?= $todo['deskripsi'] ?>
                </div>
                <!-- tombol untuk todo selesai -->
                <a onClick='alert()' href="<?= BASEURL; ?>/todo/selesai/<?= $todo['id']; ?>">
                    <span class="badge bg-success rounded-pill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                        </svg>
                    </span>
                </a>
                <a href="<?= BASEURL; ?>/todo/hapus/<?= $todo['id']; ?>">
                    <span class="badge bg-danger rounded-pill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </span>
                </a>
            </li>
        <?php endforeach ?>
    </ol>
</div>


<div class="container mt-3">
    <h3>TODO Selesai</h3>
    <ol class="list-group list-group-numbered">
        <?php foreach ($data['to_do_selesai'] as $todo) : ?>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <del class="fw-bold"><?= $todo['judul'] ?></del>
                    <p>
                        <?= $todo['deskripsi'] ?>
                    </p>
                </div>
                <a href="<?= BASEURL; ?>/todo/hapus/<?= $todo['id']; ?>">
                    <span class="badge bg-danger rounded-pill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg></span></a>
            </li>
        <?php endforeach ?>
    </ol>
</div>

<!-- Button trigger modal -->
<div class="dropup position-absolute bottom-0 end-0 rounded-circle m-5">
    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" aria-expanded="false" aria-haspopup="true" data-bs-target="#tambahtodo">
        Tambah TODO
    </button>
</div>


<!-- Modal -->
<div class="modal fade" id="tambahtodo" tabindex="-1" aria-labelledby="tambahtodo" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambahtodo">Tambah TODO</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/todo/tambah" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul">
                        <label for="floatingInput">Judul</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="deskripsi" placeholder="deskripsi" name="deskripsi">
                        <label for="floatingdeskripsi">Deskripsi</label>
                    </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah TODO</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- <script>
   const tombol = document.querySelectorAll('.hapus')
   tombol.forEach(item=>{
   item.addEventListener('click',function(){
    Swal.fire({
        title: 'Apakah anda yaqueeen?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
       
    })
   })
</script> -->