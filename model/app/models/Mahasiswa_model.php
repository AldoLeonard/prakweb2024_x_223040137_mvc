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

    private $dbh; //database handler
    private $stmt;

    public function __construct() {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=mvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($$e->getMessage());
        }
    }

    public function getAllMahasiswa() {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}