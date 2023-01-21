<?php

class Todo extends Controller
{
    public function index()
    {
        $data['title'] = 'TODO LIST';
        $data['to_do_selesai'] = $this->model('Todo_model')->ambilDataSelesai();
        $data['to_do_belum'] = $this->model('Todo_model')->ambilDataBelumSelesai();
        $this->view('templates/header', $data);
        $this->view('todo/index', $data);
        $this->view('templates/footer');
    }

    public function hapus($id)
    {
        if ($this->model('Todo_model')->hapusTodo($id) > 0) {
            header('Location:' . BASEURL . '/todo');
            exit;
        }
    }

    public function tambah()
    {
        if ($this->model('Todo_model')->tambahTodo($_POST) > 0) {
            header('Location: ' . BASEURL . '/todo');
            exit;
        }
    }

    public function selesai($id)
    {
        if ($this->model('Todo_model')->selesaiTodo($id) > 0) {
            header('Location: ' . BASEURL . '/todo');
            exit;
        }
    }

    // nambahin fungsi buat detail, ini fungsinya baut nampilin halaman detail
    public function detail($id)
    {
        $data['title'] = 'Detail TODO';
        // $data['todo'] = $this->model('Todo_model')->ambilDataById($id);
        $this->view('templates/header', $data);
        $this->view('todo/detail', $data);
        $this->view('templates/footer');
    }

    // nambahin fungsi buat edit, ini fungsinya buat nampilin halaman edit dan diisi sama data yang udah ada
    public function edit($id)
    {
        $data['title'] = 'Edit TODO';
        // $data['todo'] = $this->model('Todo_model')->ambilDataById($id);
        $this->view('templates/header', $data);
        $this->view('todo/edit', $data);
        $this->view('templates/footer');
    }
}
