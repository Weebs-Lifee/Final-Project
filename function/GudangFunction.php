<?php

  include('database/koneksi.php');

  class Gudang
  {
    private $koneksi;

    public function __construct()
    {
      $koneksi = new Koneksi;
      $this->koneksi = $koneksi;
    }

    function index($tbl_name, $params = [])
    {
      $add_on_query = null;

      if (count($params) > 0 && !is_null($params['invoice']) && $params['invoice']) {
          $add_on_query .= " where invoice LIKE '%".$params['invoice']."%'";
      }

      $sql = "SELECT * FROM " . $tbl_name . $add_on_query ;
      $row = $this->koneksi->get()->prepare($sql);
      $row->execute();
      $hasil = $row->fetchAll();
      return $hasil;
    }

    function detail ($tbl_name, $id) 
    {
      $sql = "SELECT * FROM $tbl_name WHERE id= ?";
      $row = $this->koneksi->get()->prepare($sql);
      $row->execute(array($id));
      $hasil = $row->fetch();
      return $hasil;
    }

    function create ($tbl_name, $request) {
      $sql = 'INSERT INTO '.$tbl_name.' (invoice,nama,barang_1,barang_2,barang_3,status,tanggal,kuantiti_1,kuantiti_2,kuantiti_3,harga_1,harga_2,harga_3) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $row = $this->koneksi->get()->prepare($sql);
      $row = $row->execute($request);
      return $row;
    }

    function update ($tbl_name, $request) {
      $sql = 'UPDATE '.$tbl_name.' set nama = ?, tanggal=?, status=?, barang_1=?, barang_2=?, barang_3=?, kuantiti_1=?, kuantiti_2=?, kuantiti_3=?, harga_1=?, harga_2=?, harga_3=? WHERE id=?';
      $row = $this->koneksi->get()->prepare($sql);
      $row = $row->execute($request);
      return $row;
    }

    function delete($tbl_name, $id)
    {
      $sql = 'DELETE FROM ' . $tbl_name . " where id =?";
      $row = $this->koneksi->get()->prepare($sql);
      $row = $row->execute(array($id));
      return $row;
    }
      
  }
    