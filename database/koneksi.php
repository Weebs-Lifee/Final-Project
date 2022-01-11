<?php

    class Koneksi
    {
        public $user  = 'root';
        public $pass = '';
        public $dbname = 'tugas_akhir';

        function get()
        {
            try {
                // buat koneksi dengan database
                $koneksi = new PDO('mysql:host=localhost;dbname='.$this->dbname.';',$this->user,$this->pass);
                // set error mode
                $koneksi->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                return $koneksi;
            } catch (PDOException $e) {
                // tampilkan pesan kesalahan jika koneksi gagal
                return "Koneksi atau query bermasalah : " . $e->getMessage() . "<br/>";
            }
        }
    }
    