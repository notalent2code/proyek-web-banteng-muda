<?php
namespace App\Models;
use CodeIgniter\Model;

class AnggotaModel extends Model
{
  protected $table = 'anggota';

  public function getAnggota($no_anggota = false)
  {
    if($no_anggota === false){
      return $this->findAll();
    } else {
      return $this->getWhere(['no_anggota' => $no_anggota]);
    }
  }

  public function getAnggotaEmail($email = false)
  {
    return $this->getWhere(['email' => $email]);
  }

  public function saveAnggota($data)
  {
    $query = $this->db->table($this->table)->insert($data);
    return $query;
  }

  public function updateAnggota($data, $no_anggota)
  {
    $query = $this->db->table($this->table)->update($data, array('no_anggota' => $no_anggota));
    return $query;
  }
  
  public function deleteAnggota($no_anggota)
  {
    $query = $this->db->table($this->table)->delete(array('no_anggota' => $no_anggota));
    return $query;
  }
}