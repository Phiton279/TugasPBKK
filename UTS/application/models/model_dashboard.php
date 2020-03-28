<?php
class Model_dashboard extends CI_Model{
    
    function tampil_data(){
        
        return $this->db->query("select * from kategori_barang");
    }

    function tampil_total_penjualan(){
        $query  ="SELECT SUM(qty) as Total FROM transaksi_detail";
        $result = $this->db->query($query) ;
        return $result->row()->Total;
    }

    function tampil_total_produk(){
        $query  ="SELECT count(nama_barang) as Total FROM barang";
        $result = $this->db->query($query) ;
        return $result->row()->Total;
    }

    function tampil_total_transaksi(){
        $query  ="SELECT count(transaksi_id) as Total FROM transaksi";
        $result = $this->db->query($query) ;
        return $result->row()->Total;
    }

    function tampil_total_pembeli(){
        $query  ="SELECT count(DISTINCT operator_id) as Total FROM transaksi";
        $result = $this->db->query($query) ;
        return $result->row()->Total;
    }

}