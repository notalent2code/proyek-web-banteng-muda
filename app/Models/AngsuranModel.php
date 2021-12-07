<?php

namespace App\Models;

use CodeIgniter\Model;

class AngsuranModel extends Model
{
  protected $table = 'angsuran';

  public function getAngsuran($no_angsuran = false)
  {
    if ($no_angsuran === false) {
      return $this->findAll();
    } else {
      return $this->getWhere(['no_angsuran' => $no_angsuran]);
    }
  }

  public function getAngsuranPinjaman($no_pinjaman = false)
  {
    if ($no_pinjaman === false) {
      return $this->findAll();
    } else {
      return $this->getWhere(['no_pinjaman' => $no_pinjaman]);
    }
  }

  public function saveAngsuran($data)
  {
    $query = $this->db->table($this->table)->insert($data);
    return $query;
  }

  public function updateAngsuran($data, $no_angsuran)
  {
    $query = $this->db->table($this->table)->update($data, array('no_angsuran' => $no_angsuran));
    return $query;
  }

  public function deleteAngsuran($no_angsuran)
  {
    $query = $this->db->table($this->table)->delete(array('no_angsuran' => $no_angsuran));
    return $query;
  }
}
