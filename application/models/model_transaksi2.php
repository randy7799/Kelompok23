<?php
class Model_transaksi2 extends ci_model
{


    function simpan_buku()
    {
        $judul_buku    =  $this->input->post('t_buku');
        $qty            =  $this->input->post('qty');
        $kd_buku       = $this->db->get_where('t_buku',array('judul_buku'=>$judul_buku))->row_array();
        $data           = array('kd_buku'=>$kd_buku['kd_buku'],
                                'qty'=>$qty,
                                'harga'=>$kd_buku['harga'],
                                'status'=>'0');
        $this->db->insert('t_dstran',$data);
    }

    function tampilkan_detail_transaksi()
    {
        $query  ="SELECT td.dstran_id,td.qty,b.harga_buku,b.judul_buku
                FROM t_dstran as td,t_buku as b
                WHERE b.kd_buku=td.kd_buku and td.status='0'";
        return $this->db->query($query);
    }

    function hapusitem($id)
    {
        $this->db->where('t_dstran',$id);
        $this->db->delete('t_stran');
    }


    function selesai_belanja($data)
    {
        $this->db->insert('t_stran',$data);
        $last_id=  $this->db->query("select stran_id from t_stran order by stran_id desc")->row_array();
        $this->db->query("update t_dstran set stran_id='".$last_id['stran_id']."' where status='0'");
        $this->db->query("update t_dstran set status='1' where status='0'");
    }
}
