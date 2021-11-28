<?php
namespace App\Models;
use CodeIgniter\Model;

class SimpananModel extends Model
{
  protected $table = 'simpanan';

  public function getSimpanan($no_simpanan = false)
  {
    if($no_simpanan === false){
      return $this->findAll();
    } else {
      return $this->getWhere(['no_simpanan' => $no_simpanan]);
    }
  }

  public function saveSimpanan($data)
  {
    $query = $this->db->table($this->table)->insert($data);
    return $query;
  }

  public function updateSimpanan($data, $no_simpanan)
  {
    $query = $this->db->table($this->table)->update($data, array('no_simpanan' => $no_simpanan));
    return $query;
  }

  public function deleteSimpanan($no_simpanan)
  {
    $query = $this->db->table($this->table)->delete(array('no_simpanan' => $no_simpanan));
    return $query;
  }
}