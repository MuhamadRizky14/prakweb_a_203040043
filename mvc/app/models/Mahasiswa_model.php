<?php
class Mahasiswa_model
{
  private $dbh; // database handler
  private $stmt;

  public function __construct()
  {
    //data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }



  // private $mhs = [
  //   [
  //     "nama" => "Muhamad Rizky",
  //     "nrp" => "203040043",
  //     "email" => "203040043@mail.unpas.ac.id",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  //   [
  //     "nama" => "Hervin FM",
  //     "nrp" => "203040097",
  //     "email" => "203040043@mail.unpas.ac.id",
  //     "jurusan" => "Teknik Mesin"
  //   ],
  //   [
  //     "nama" => "Fsmmy O",
  //     "nrp" => "203040040",
  //     "email" => "203040040@mail.unpas.ac.id",
  //     "jurusan" => "Teknik Pangan"
  //   ]
  // ];


  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}