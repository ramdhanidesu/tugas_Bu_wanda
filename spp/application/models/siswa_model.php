<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    private $_table = "siswa";

    public $nisn;
    public $nis;
    public $nama;
    public $id_kelas;
    public $alamat;
    public $no_telp;
    public $id_login;
    public $id_spp;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'nis',
            'label' => 'Nis',
            'rules' => 'numeric'],
            
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nisn" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nisn = $post["nisn"];
        $this->nis = $post["nis"];
        $this->nama = $post["nama"];
        $this->id_kelas = $post["id_kelas"];
        $this->alamat = $post["alamat"];
        $this->no_telp = $post["no_telp"];
        $this->id_login = $post["id_login"];
        $this->id_spp = $post["id_spp"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nisn = $post["nisn"];
        $this->nis = $post["nis"];
        $this->nama = $post["nama"];
        $this->id_kelas = $post["id_kelas"];
        $this->alamat = $post["alamat"];
        $this->no_telp = $post["no_telp"];
        $this->id_login = $post["id_login"];
        $this->id_spp = $post["id_spp"];
        $this->db->update($this->_table, $this, array('nisn' => $post['nisn']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("nisn" => $id));
    }
}
