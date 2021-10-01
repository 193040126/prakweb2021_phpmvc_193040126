<?php

    class Mahasiswa_model{
        private $dbh; //database handler
        private $stmt;

        public function __construct(){
            //data source name
            $dsn = 'mysql:host=localhost;dbname=phpmvc';

            try{
                $this->dbh = new PDO($dsn, 'root', '');
            } catch(PDOExceotion $e){
                die($e->getMessage());
            }
        }

        // private $mhs = [
        //     [
        //         "nama" => "Diva Amwal",
        //         "nrp" => "193040126",
        //         "email" => "193040126.diva@mail.unpas.ac.id",
        //         "jurusan" => "Teknik Informatika"
        //     ],
        //     [
        //         "nama" => "Doddy Ferdiansyah",
        //         "nrp" => "133050321",
        //         "email" => "doddy@gmail.com",
        //         "jurusan" => "Teknik Mesin"
        //     ],
        //     [
        //         "nama" => "Erik Doank",
        //         "nrp" => "163030123",
        //         "email" => "erik@yahoo.com",
        //         "jurusan" => "Teknik Industri"
        //     ]
        // ];

        public function getAllMahasiswa(){
            $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }