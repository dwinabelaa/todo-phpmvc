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
}
