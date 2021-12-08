<?php

namespace App\Models;

use CodeIgniter\Model;

class IuranModel extends Model
{
  protected $table = 'iuran';

  public function getIuran($no_iuran = false)
  {
    if ($no_iuran === false) {
      return $this->findAll();
    } else {
      return $this->getWhere(['no_iuran' => $no_iuran]);
    }
  }

  public function getIuranAnggota($no_anggota = false)
  {
    if ($no_anggota === false) {
      return $this->findAll();
    } else {
      return $this->getWhere(['no_anggota' => $no_anggota]);
    }
  }

  public function saveIuran($data)
  {
    $query = $this->db->table($this->table)->insert($data);
    return $query;
  }

  public function updateIuran($data, $no_iuran)
  {
    $query = $this->db->table($this->table)->update($data, array('no_iuran' => $no_iuran));
    return $query;
  }

  public function deleteIuran($no_iuran)
  {
    $query = $this->db->table($this->table)->delete(array('no_iuran' => $no_iuran));
    return $query;
  }
}
