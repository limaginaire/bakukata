<?php
class Buku extends CI_Model
{
    public function tampil_data_buku($kode)
    {
		if ($kode=='all'){
			$hasil=$this->db->get('tabel_buku');	
		}else{
			$this->db->where('kode_buku',$kode);
			$hasil=$this->db->get('tabel_buku');
		}
        return $hasil->result();
    }
	public function simpan_data_buku($data)
	{
		if ($data['mode']=='baru'){
			unset($data['mode']);
			$hasil=$this->db->insert('tabel_buku', $data); 	
		}else{
			unset($data['mode']);
			$this->db->where('kode_buku',$data['kode_buku']);
			$hasil=$this->db->update('tabel_buku', $data); 	
		}
		return $hasil;
	}
	public function hapus_data_buku($kode)
	{
		$this->db->where('kode_buku', $kode);
		$hasil=$this->db->delete('tabel_buku'); 
		return $hasil;
	}
}
?> 