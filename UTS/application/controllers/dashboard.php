<?php
class Dashboard extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_dashboard');
        // chek_session();
    }
    
    function index(){
        // chek_session();
        $data['record']=  $this->model_dashboard->tampil_data();
        $data['total_penjualan']=  $this->model_dashboard->tampil_total_penjualan();
        $data['total_pembeli']=  $this->model_dashboard->tampil_total_pembeli();
        $data['total_transaksi']=  $this->model_dashboard->tampil_total_transaksi();
        $data['total_produk']=  $this->model_dashboard->tampil_total_produk();
    
        $this->template->load('template','v_dashboard',$data);
    }


}   