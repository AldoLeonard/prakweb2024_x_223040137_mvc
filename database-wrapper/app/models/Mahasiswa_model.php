<?php

class Mahasiswa_model {
    // private $mhs = [
    // [
    //     "nama" => "Aldo Leonard",
    //     "nrp" => "223040137",
    //     "email" => "aldo.223040137@mail.unpas.ac.id",
    //     "jurusan" => "Teknik Informatika"
    // ],
    // [
    //     "nama" => "Cristiano Ronaldo",
    //     "nrp" => "223040777",
    //     "email" => "ronaldo.223040777@mail.unpas.ac.id",
    //     "jurusan" => "Teknik Mesin"
    // ],
    // [
    //     "nama" => "Lionel Messi",
    //     "nrp" => "223040100",
    //     "email" => "messi.223040100@mail.unpas.ac.id",
    //     "jurusan" => "Teknik Industri"
    // ]
    // ];



    private $table = 'mahasiswa';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllMahasiswa() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById ($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}