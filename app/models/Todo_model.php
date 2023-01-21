<?php

class Todo_model
{
    private $table = 'todo';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function ambilSemuaData()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function ambilDataSelesai()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE status = 1');
        return $this->db->resultSet();
    }

    public function ambilDataBelumSelesai()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE status = 0');
        return $this->db->resultSet();
    }

    public function hapusTodo($id)
    {
        $query = 'DELETE FROM todo WHERE id = :id';
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahTodo($data)
    {
        $query = 'INSERT INTO todo VALUES ("", :judul, :deskripsi, "")';

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('deskripsi', $data['deskripsi']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function selesaiTodo($id)
    {
        $query = 'UPDATE todo SET status = 1 WHERE id=:id';

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}