<?php
namespace App\Models;
use CodeIgniter\Model;

class PinjamanModel extends Model
{
  protected $table = 'pinjaman';

  public function getPinjaman($no_pinjaman = false)
  {
    if($no_pinjaman === false){
      return $this->findAll();
    } else {
      return $this->getWhere(['no_pinjaman' => $no_pinjaman]);
    }
  }

  public function getPinjamanAnggota($email = false)
  {
    if($email === false){
      return $this->findAll();
    } else {
      return $this->getWhere(['email' => $email]);
    }
  }

  public function savePinjaman($data)
  {
    $query = $this->db->table($this->table)->insert($data);
    return $query;
  }

  public function updatePinjaman($data, $no_pinjaman)
  {
    $query = $this->db->table($this->table)->update($data, array('no_pinjaman' => $no_pinjaman));
    return $query;
  }

  public function deletePinjaman($no_pinjaman)
  {
    $query = $this->db->table($this->table)->delete(array('no_pinjaman' => $no_pinjaman));
    return $query;
  }
}