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
        $query = 'INSERT INTO ' . $this->table . ' VALUES (NULL, :title, :deskripsi, "0")';
        $this->db->query($query);
        $this->db->bind('title', $data['judul']);
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

    public function updateTodo($data)
    {
        // TUGAS BELA:
        // BIKIN LOGIKA BUAT UPDATE, SYNTAX SQL-NYA KURANG LEBIH SAMA KAYAK FUNGSI selesaiToDO()
        // YANG MEMBEDAKAN NANTI YANG DI UPDATE BUKAN STATUS TAPI JUDUL DAN DESKRIPSI

        $query = "UPDATE todo SET 
                    judul = :judul,
                    deskripsi = :deskripsi,
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('id', $data['input']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ambilDataById($id)
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id=:id';

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->single();
    }
}
