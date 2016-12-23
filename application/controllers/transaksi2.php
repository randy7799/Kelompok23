<?php
class Transaksi2 extends ci_controller{

        function __construct() {
        parent::__construct();
        $this->load->model(array('model_buku','model_transaksi2'));

    }

    function index()
    {
        if(isset($_POST['submit']))
        {
            $this->model_transaksi2->simpan_buku();
            redirect('transaksi2');
        }
        else
        {
            $data['buku']=  $this->model_buku->list_buku();
            $data['detail']= $this->model_transaksi2->tampilkan_detail_transaksi()->result();
            $this->template->load('templateu','transaksi/form_transaksi',$data);
        }
    }


    function hapusitem()
    {
        $id=  $this->uri->segment(3);
        $this->model_transaksi2->hapusitem($id);
        redirect('transaksi2');
    }


    function selesai_belanja()
    {
        $tanggal=date('Y-m-d');
        $user=  $this->session->userdata('username');
        $id_user=  $this->db->get_where('operator',array('username'=>$user))->row_array();
        $data=array('operator_id'=>$id_user['operator_id'],'tanggal_transaksi'=>$tanggal);
        $this->model_transaksi2->selesai_belanja($data);
        redirect('transaksi2');
    }

}
